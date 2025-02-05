<div>
    <x-slot name="header">State</x-slot>
    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <x-forms.top-controls :show-filters="$showFilters"/>

        <!-- Table Caption -------------------------------------------------------------------------------------------->
        <x-table.caption :caption="'State'">
            {{$list->count()}}
        </x-table.caption>

        <!-- Table Data ----------------------------------------------------------------------------------------------->

        <x-table.form>
            <x-slot:table_header>
                <x-table.header-serial/>
                <x-table.header-text wire:click.prevent="sortBy('id')" sortIcon="{{$sortAsc}}" :left="true">
                    Name
                </x-table.header-text>

                <x-table.header-text> State Code</x-table.header-text>

                <x-table.header-status/>
                <x-table.header-action/>
            </x-slot:table_header>

            <x-slot:table_body>
                @foreach($list as $index=>$row)
                    <x-table.row>
                        <x-table.cell-text>{{$index+1}}</x-table.cell-text>
                        <x-table.cell-text left>{{$row->vname}}</x-table.cell-text>
                        <x-table.cell-text>{{$row->state_code}}</x-table.cell-text>

                        <x-table.cell-status active="{{$row->active_id}}"/>
                        <x-table.cell-action id="{{$row->id}}"/>
                    </x-table.row>
                @endforeach
            </x-slot:table_body>
        </x-table.form>

        <!-- Delete Modal --------------------------------------------------------------------------------------------->
        <x-modal.delete/>

        <div class="pt-5">{{ $list->links() }}</div>

        <!-- Create/ Edit Popup --------------------------------------------------------------------------------------->

        <x-forms.create :id="$vid">
            <div class="flex flex-col  gap-3">
                <x-input.floating wire:model="vname" label="State Name"/>
                <x-input.error-text wire:model="vname"/>
                <x-input.floating wire:model="state_code" label="State Code"/>
            </div>
        </x-forms.create>


    </x-forms.m-panel>
</div>
