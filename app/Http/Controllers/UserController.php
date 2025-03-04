<?php
namespace App\Http\Controllers;

use _PHPStan_e52dec71a\Nette\Utils\DateTime;
use App\Models\User;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Ody\Core\Foundation\Http\JsonResponse;
use Ody\Core\Support\Collection\Collection;
use SebastianBergmann\CodeCoverage\Report\PHP;
use Swoole\Coroutine;
use Swoole\Coroutine\WaitGroup;
use function Swoole\Coroutine\run;
use function Swoole\Coroutine\go;

class UserController
{
    public function __construct(private UserRepository $userRepository)
    {

    }
    public function index()
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => '$this->userRepository->getAll()'
        ]);
    }

    public function find($id)
    {
        return JsonResponse::ok([
            "message" => "Test message",
            "body" => $this->userRepository->find($id)
        ]);
    }

    public function create($request)
    {
//        run(function () {
//            $s = microtime(true);
//            $wg = new WaitGroup();
//            go(function () use ($wg) {
//                $wg->add();
//                echo "1 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "1 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//            });
//
//
//            go(function () use ($wg) {
//                $wg->add();
//                echo "2 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "2 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//            });
//
//
//            Coroutine::create(function () use ($wg) {
//                $wg->add();
//                echo "3 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "3 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//                $wg->done();
//            });
//
//            Coroutine::create(function () use ($wg) {
//                $wg->add();
//                echo "4 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "4 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//                $wg->done();
//            });
//
//            Coroutine::create(function () use ($wg) {
//                $wg->add();
//                echo "5 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "5 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//                $wg->done();
//            });
//
//            Coroutine::create(function () use ($wg) {
//                $wg->add();
//                echo "6 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "6 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//                $wg->done();
//            });
//
//            Coroutine::create(function () use ($wg) {
//                $wg->add();
//                echo "7 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "7 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//                $wg->done();
//            });
//
//            Coroutine::create(function () use ($wg) {
//                $wg->add();
//                echo "8 - start : " . Carbon::now()->toTimeString() . PHP_EOL;
//                User::query()->get();
//
//                echo "8 - end : " . Carbon::now()->toTimeString() . PHP_EOL;
//                $wg->done();
//            });
//
//            $wg->wait();

//            echo 'use ' . (microtime(true) - $s) . ' s';
//        });
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;
        User::query()->get();
        echo Carbon::now()->toAtomString() . PHP_EOL;

        return JsonResponse::ok([
            "message" => "User updated",
            "body" => 'done'
        ]);
    }

    public function update($request)
    {
        $user = User::query()->find($request->getAttribute('id'));
        $user->update($request->getParsedBody());

        return JsonResponse::ok([
            "message" => "User updated",
            "body" => $user->refresh()
        ]);
    }
}