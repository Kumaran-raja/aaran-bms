@props([
    'id'=>null,
])
<td class=" print:hidden ">
    <div class="flex justify-center items-center gap-4 self-center">
       <x-aaran-ui::button.edit wire:click="edit({{$id}})"/>
       <x-aaran-ui::button.delete  wire:click="deleteFunction({{$id}})"/>
    </div>
</td>
