<?php

declare(strict_types=1);

namespace Pakcages\UseCase\User\Create;

interface UserCreateUseCaseInterface
{
    /**
     * ユーザー作成処理
     *
     * @param UserCreateRequest $request
     *
     * @return UserCreateResponse
     */
    public function handle(UserCreateRequest $request): UserCreateResponse;
}

// 実際に処理を行うクラス
class Real implements UserCreateUseCaseInterface
{
    public function handle(UserCreateRequest $request): UserCreateResponse
    {
        // 何かしらの都合でまだ作成できない
        // こっちで開発が進んでる

        // こっちに専念ができる
        // エラーが出たりすると、他に影響が出たりする
    }
}

// モッククラス
class Mock implements UserCreateUseCaseInterface
{
    public function handle(UserCreateRequest $request): UserCreateResponse
    {
        return // エラーの出るやつ new UserCreateResponse();
        // フロントはこっちを使う、（バックエンドの開発には影響がない）
        // テストとかにも使うことが可能になる
    }
}

// MVC のやつ
class Controller
{
    public function create(UserCreateUseCaseInterface $interactor)
    {
        return $interactor->handle(new UserCreateRequest());
    }
}