<div>
    <form wire:submit.prevent="register">
        <label for="name">名前</label>
        <input type="text" id="name" wire:model="name"><br>
        @error('name')
            <div>{{$message}}</div>
        @enderror

        <label for="email">メールアドレス</label>
        <input type="email" id="email" wire:model.lazy="email"><br>
        @error('email')
            <div>{{$message}}</div>
        @enderror

        <label for="password">パスワード</label>
        <input type="password" id="password" wire:model="password"><br>
        @error('password')
            <div>{{$message}}</div>
        @enderror

        <button>登録する</button>
    </form>
</div>
