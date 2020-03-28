<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\ResetPasswordRequest;
use App\Http\Requests\Frontend\Auth\SetPasswordRequest;
use App\Repositories\Frontend\Auth\UserRepository;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;

/**
 * Class ResetPasswordController.
 */
class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * ChangePasswordController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param string|null $token
     *
     * @return \Illuminate\Http\Response
     */
    public function showResetForm($token = null)
    {
        if (! $token) {
            return redirect()->route('frontend.auth.password.email');
        }

        $user = $this->userRepository->findByPasswordResetToken($token);

        if ($user && resolve('auth.password.broker')->tokenExists($user, $token)) {
            return view('frontend.auth.passwords.reset')
                ->withToken($token)
                ->withEmail($user->email);
        }

        return redirect()->route('frontend.auth.password.email')
            ->withFlashDanger(__('exceptions.frontend.auth.password.reset_problem'));
    }


    public function showSetForm($token = null)
    {
        
        if (! $token) {
            return redirect()->route('frontend.auth.password.email');
        }
        

        $user = $this->userRepository->findByConfirmationCode($token);

        if ($user) {
            return view('frontend.auth.passwords.set')
                ->withToken($token)
                ->withEmail($user->email);
        }

        return redirect('/')
            ->withFlashDanger(__('exceptions.frontend.auth.password.reset_problem'));
    }

    /**
     * Reset the given user's password.
     *
     * @param  ResetPasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function reset(ResetPasswordRequest $request)
    {
        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request),
            function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response === Password::PASSWORD_RESET
            ? $this->sendResetResponse($response)
            : $this->sendResetFailedResponse($request, $response);
    }

    public function set(Request $request)
    {
       
        $validatedData = $request->validate([
            'token' => 'required',
            'email' => ['required', 'email'],
            'password' =>  'required | confirmed',
        ]);
       
        
        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.

        $user =  $this->userRepository->findByEmail($request->email);

        
        $state = $this->setPassword($user,$request->password);
        

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if(Auth::check()){
            return view("frontend.auth.profile");
        }else{
            return redirect()->back();
        }
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     */
    protected function resetPassword($user, $password)
    {
        $user->password = $password;

        $user->password_changed_at = now();

        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        $this->guard()->login($user);
    }

    protected function setPassword($user, $password)
    {
        $user->password = $password;

        $user->password_changed_at = now();

        $user->active = 1;

        $user->confirmed = 1;

        $user->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));

        $this->guard()->login($user);
    }

    /**
     * Get the response for a successful password reset.
     *
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetResponse($response)
    {
        return redirect()->route(home_route())->withFlashSuccess(e(trans($response)));
    }
}
