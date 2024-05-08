<table class="w-full mt-8">
    <tbody>
        <caption class="my-4 underline">
            {{__('frontend.brokerFileH1')}}
        </caption>
        <tr>
            <td colspan="2" class="text-center pb-2 text-base">
                {{__('frontend.brokerFileP')}}
            </td>
        </tr>

        <tr>
            <td>{{__('frontend.brokerFileTradeLicense')}}</td>
            <td>
                <input type="file" name="valid_trade_license_id"
                class="block w-full text-sm text-slate-500
                border border-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-0 file:border-0
                file:text-sm file:font-semibold
                file:bg-black file:text-gray-50
                file:cursor-pointer 
                bg-transparent focus:outline-none focus:border-white focus:ring-white
                "
                required
                accept=".pdf, .jpg, .jpeg"
                />
            </td>
        </tr>

        <tr>
            <td>{{__('frontend.brokerFileRera')}}</td>
            <td><input type="file" name="rera_certificate_id"
                class="block w-full text-sm text-slate-500
                border border-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-0 file:border-0
                file:text-sm file:font-semibold
                file:bg-black file:text-gray-50
                file:cursor-pointer 
                bg-transparent focus:outline-none focus:border-white focus:ring-white
                "
                required
                accept=".pdf, .jpg, .jpeg"
                />
            </td>
        </tr>

        <tr>
            <td style="width: 235px">{{__('frontend.brokerFileMOA')}}</td>
            <td><input type="file" name="power_of_atty_or_moa_id"
                class="block w-full text-sm text-slate-500 
                border border-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-0 file:border-0
                file:text-sm file:font-semibold
                file:bg-black file:text-gray-50
                file:cursor-pointer 
                bg-transparent focus:outline-none focus:border-white focus:ring-white
                "
                required
                accept=".pdf, .jpg, .jpeg"
                />
            </td>
        </tr>

        <tr>
            <td>{{__('frontend.brokerFileVat')}}</td>
            <td><input type="file" name="valid_vat_certificate_or_noc_id"
                class="block w-full text-sm text-slate-500
                border border-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-0 file:border-0
                file:text-sm file:font-semibold
                file:bg-black file:text-gray-50
                file:cursor-pointer 
                bg-transparent focus:outline-none focus:border-white focus:ring-white
                "
                required
                accept=".pdf, .jpg, .jpeg"
                />
            </td>
        </tr>

        <tr>
            <td>{{__('frontend.brokerFileAuthP')}}</td>
            <td><input type="file" name="authorized_p_docx"
                class="block w-full text-sm text-slate-500
                    border border-gray-600
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-0 file:border-0
                    file:text-sm file:font-semibold
                    file:bg-black file:text-gray-50
                    file:cursor-pointer 
                    bg-transparent focus:outline-none focus:border-white focus:ring-white
                    "
                    required
                accept=".pdf, .jpg, .jpeg"
                />
                <span class=" text-sm float-right">* all four in one pdf document</span>
            </td>
        </tr>
    </tbody>
</table>