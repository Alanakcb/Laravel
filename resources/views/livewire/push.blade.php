<div>
    <form method="post" wire:submit.prevent="store">
        <p>{{$title}}</p>
        <p>{{$body}}</p>
        <div>
            @error('body')<p>{{$message}}</p> @enderror
        </div>
        <input type="hidden" name="editId" wire:model="editId"/>
        <input type="text" name="title" wire:model="title" class="w-full rounded-lg"/><br/>
        <textarea name="body" wire:model="body" class="w-full rounded-lg"></textarea><br/>
        <button type="submit" class="bg-primary rounded-lg p-2">Enviar</button>
        <button type="button" class="bg-secondary rounded-lg p-2" wire:click="limpar()">Limpar</button>
    </form>
    <table>
</div>
