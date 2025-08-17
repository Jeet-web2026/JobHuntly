@props(['link' => ''])
<el-dialog>
    <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
        <el-dialog-backdrop class="fixed inset-0 bg-gray-600/50 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

        <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
            <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white-800 text-left shadow-xl outline -outline-offset-1 outline-white/10 transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
                <div class="bg-gray-950 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 id="dialog-title" class="text-base text-h font-semibold text-white">
                                {{ $slot }}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="bg-white px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    @if($link)
                    <a href="{{ $link }}" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white cursor-pointer hover:bg-red-400 sm:ml-3 sm:w-auto" style="color: #ffffff !important;">Logout</a>
                    @endif
                    <button type="button" command="close" commandfor="dialog" class="mt-3 inline-flex w-full justify-center rounded-md bg-gray-400 px-3 py-2 text-sm font-semibold text-white cursor-pointer inset-ring inset-ring-white/5 hover:bg-gray-500 sm:mt-0 sm:w-auto" style="color: #ffffff !important;">Cancel</button>
                </div>
            </el-dialog-panel>
        </div>
    </dialog>
</el-dialog>