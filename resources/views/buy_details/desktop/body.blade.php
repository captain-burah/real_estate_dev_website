<div class="">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="container mx-auto flex flex-col items-start md:flex-row">
            <div class="ml-0 md:mr-12 lg:w-2/3 sticky">
                
                <div class="container mx-auto w-full h-full">
                    <style>
                        ul{
                            padding-left: 30px;
                        }
                        li {
                            list-style-type: disc;
                            padding-left: 10px;
                        }
                    </style>

                        {!!html_entity_decode($properties->description_en, ENT_COMPAT, 'UTF-8')!!}

                </div>
            </div>
            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 mx-0">
                @include('buy_details.desktop.simplified')
            </div>

        </div>
    </div>
</div>
