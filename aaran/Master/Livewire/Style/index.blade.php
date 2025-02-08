<div>

    <x-slot name="header">Styles</x-slot>

    <!-- Top Controls ------------------------------------------------------------------------------------------------->

    <x-forms.m-panel>

        <x-forms.top-controls :show-filters="$showFilters"/>

        <x-table.caption :caption="'Styles'">
            {{$list->count()}}
        </x-table.caption>

        <x-table.form>

            <!-- Table Header ----------------------------------------------------------------------------------------->

            <x-slot:table_header name="table_header" class="bg-green-600">

                <x-table.header-serial width="20%"/>

                <x-table.header-text sortIcon="none">Image</x-table.header-text>

                <x-table.header-text wire:click.prevent="sortBy('vname')" sortIcon="{{$getListForm->sortAsc}}">
                    Name
                </x-table.header-text>

                <x-table.header-text sortIcon="none">Description</x-table.header-text>


                <x-table.header-action/>
            </x-slot:table_header>

            <!-- Table Body ------------------------------------------------------------------------------------------->

            <x-slot:table_body name="table_body">

                @foreach($list as $index=>$row)

                    <x-table.row>
                        <x-table.cell-text>{{$index+1}}</x-table.cell-text>

                        <x-table.cell-text>
                            <img src="{{ \Illuminate\Support\Facades\Storage::url('images/'.$row->image) }}" alt="image"
                                 class="flex w-10 h-10"
                            />
                        </x-table.cell-text>

                        <x-table.cell-text left>{{$row->vname}}</x-table.cell-text>

                        <x-table.cell-text>{{$row->desc}}</x-table.cell-text>

                        <x-table.cell-action id="{{$row->id}}"/>
                    </x-table.row>

                @endforeach

            </x-slot:table_body>

        </x-table.form>

        <x-modal.delete/>

        <!-- Create --------------------------------------------------------------------------------------------------->

        <x-forms.create :id="$common->vid">
            <div class="flex flex-col  gap-3">

                <x-input.floating wire:model="common.vname" label="Name"/>
                <x-input.floating wire:model="desc" label="Order Name"/>

                <!-- Image -------------------------------------------------------------------------------------------->

                <div class="flex flex-row gap-2 mt-4">

                    <div class="flex-col flex sm:flex-row">

                        <label for="logo_in"
                               class="w-[10rem] text-zinc-500 tracking-wide sm:py-2 py-1">Image</label>

                        <div class="flex-shrink-0">

                            <div>
                                @if($image)
                                    <div class="flex-shrink-0 overflow-hidden">
                                        <img class="sm:h-24 h-[94px] w-full hover:scale-105 hover:brightness-110"
                                             src="{{ $image->temporaryUrl() }}"
                                             alt="{{$image?:''}}"/>
                                    </div>
                                @endif

                                @if(!$image && isset($old_image))
                                    <img class="h-24 w-full"
                                         src="{{URL(\Illuminate\Support\Facades\Storage::url('images/'.$old_image))}}"
                                         alt="">

                                @else
                                    <x-icons.icon :icon="'logo'" class="w-auto h-auto block "/>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="relative">

                        <div>
                            <label for="club_image"
                                   class="text-gray-500 font-semibold text-base rounded flex flex-col items-center
                                   justify-center cursor-pointer border-2 border-gray-300 border-dashed p-2
                                   mx-auto font-[sans-serif]">
                                <x-icons.icon icon="cloud-upload"
                                              class="w-8 h-auto block text-gray-400"/>
                                Upload file

                                <input type="file" id='club_image' wire:model="image" class="hidden"/>
                                <p class="text-xs font-light text-gray-400 mt-2">PNG, JPG SVG, WEBP, and
                                    GIF
                                    are
                                    Allowed.</p>
                            </label>
                        </div>

                        <div wire:loading wire:target="image" class="z-10 absolute top-6 sm:left-[109px] left-[35px]">
                            <div class="w-14 h-14 rounded-full animate-spin
                                                        border-y-4 border-dashed border-green-500 border-t-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </x-forms.create>

        <!-- Actions ------------------------------------------------------------------------------------------->



        <div class="pt-5 w-10/12 mx-auto">{{ $list->links() }}</div>

    </x-forms.m-panel>
    <div class="px-10 py-16 space-y-4">
        @if(!$log->isEmpty())
            <div class="text-xs text-orange-600 font-merri underline underline-offset-4">Activity</div>
        @endif
        @foreach($log as $index => $row)
            <div class="px-6">
                <div class="relative ">
                    <div class=" border-l-[3px] border-dotted px-8 text-[10px]  tracking-wider py-3">
                        <div class="flex gap-x-5 ">
                            <div class="inline-flex text-gray-500 items-center font-sans font-semibold">
                                <span>Order No:</span> <span>{{$row->vname}}</span></div>
                            <div class="inline-flex  items-center space-x-1 font-merri"><span
                                    class="text-blue-600">@</span><span
                                    class="text-gray-500">{{$row->user->name}}</span>
                            </div>
                        </div>
                        <div
                            class="text-gray-400 text-[8px] font-semibold">{{date('M d, Y', strtotime($row->created_at))}}</div>
                        <div class="pb-2 font-lex leading-5 py-2 text-justify">{!! $row->description !!}</div>
                    </div>
                    <div class="absolute top-0 -left-1 h-2.5 w-2.5  rounded-full bg-teal-600 "></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
