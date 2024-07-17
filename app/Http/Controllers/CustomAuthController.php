

/* namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered; 

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registerUser()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]); */

        // $user = User::create([
            // 'name' => $request->name,
            // 'email' => $request->email,
            //'password' => Hash::make($request->password),
       // ]); 
        // // Trigger the registered event and send the email verification notification
        // event(new Registered($user));

        // // Store user information in session if needed
        // session(['user_name' => $request->name]);

        // Redirect to the email verification notice page
        // return redirect()->route('verification.notice')->with('success', 'Registration successful! Please verify your email.');
    // }
// } 
