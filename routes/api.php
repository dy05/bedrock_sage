<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

function sendCustomerMail(string $to, string $subject) {
    $content = apply_filters('inrage/mail-content', 'email.quote', [
        'title' => 'My Sweat Title',
    ]);

    wp_mail($to, $subject, $content);
}

Route::post('/contact', function ($request) {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return new \WP_Error('invalid_request', 'Invalid request', ['status' => 500]);
    }

    $name = $request->get_param('lastname');
    $email = $request->get_param('email');
    $message = $request->get_param('message');

    if (! $name || ! $email || ! $message) {
        return new \WP_Error('invalid_request', 'Invalid request', ['status' => 500]);
    }

    wp_mail(
        'hello@example.com',
        'Contact Form Submission from '.$name,
        "Name: $name\n\nEmail: $email\n\nMessage:\n$message",
        ['From: '.get_option('name').' <noreply@'.$_SERVER['HTTP_HOST'].'>']
    );

    return new \WP_REST_Response(['status' => 'ok'], 200);
//    $data = $request->get_params();
//    var_dump($data);
//    Validator::make($data, [
//        'email' => ['required', 'email'],
//        'lastname' => ['required', 'string'],
//        'firstname' => ['required', 'string'],
//        'phone' => ['nullable'],
//        'message' => ['nullable'],
//    ]);
//    $errors = [];

//    add_action('phpmailer_init', function ($phpmailer) use ($errors) {
//        $phpmailer->SMTPDebug = 1;
//        $phpmailer->Debugoutput = fn ($error) => $errors[] = $error;
//
//        $config = collect($phpmailer)
//            ->filter(fn ($value, $key) => in_array($key, array_keys($this->options)))
//            ->map(fn ($value, $key) => $key === 'Password' ? Str::mask($value, '*', 0) : $value)
//            ->map(fn ($value, $key) => Str::finish($this->options[$key], ': ').(is_null($value) || empty($value) ? 'Not set' : "<fg=blue>{$value}</>"));
//
//        $this->components->bulletList($config);
//    });

    $mail = wp_mail(
        'dyosby237@gmail.com',
        'Test Email',
        'This is a test email from WordPress.'
    );
    var_dump($mail);
//    var_dump($errors);
    return response()->json([
        'message' => 'Message sent.',
    ]);
})->name('contact');

