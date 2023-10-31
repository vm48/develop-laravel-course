<?php

namespace App\Exceptions;

use App\Helpers\Telegram;
use Illuminate\Container\Container;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash
        = [
            'current_password', 'password', 'password_confirmation',
        ];
    protected $telegram;

    public function __construct(Container $container, Telegram $telegram)
    {
        parent::__construct($container);
        $this->telegram = $telegram;
    }

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function report(Throwable $e)
    {
        $data = [
            'description' => $e->getMessage(), 'file' => $e->getFile(),
            'line'        => $e->getLine(),
        ];
        //138371782
        //(string) view('report', compact('data'))
        /*$telegram = new Telegram();
        $telegram->sendMessage(138371782,
            (string) view('report', compact('data')));*/
        $this->telegram->sendMessage(env('REPORT_TELEGRAM_ID'),
            (string) view('report', compact('data')));
    }
}
