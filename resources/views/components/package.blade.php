<div class="flex justify-center my-10 mx-5">
    <div class="flex flex-col gap-5 ">
        <h1 class="text-3xl font-semibold text-center">Layanan Kami</h1>
        <div role="tablist" class="tabs tabs-boxed">
            <input type="radio" name="my_tabs_1" onclick="openCity(event, 'London')" role="tab" class="tab tablinks"
                aria-label="Diskon 50%" checked />

            <input type="radio" name="my_tabs_1" onclick="openCity(event, 'Paris')" role="tab" class="tab tablinks"
                aria-label="Layanan Lain" />
        </div>
    </div>
</div>

<div class="mx-5 h-96 bg-base-200 rounded-3xl p-8">
    <div id="London" class="tabcontent block">
        <div class="flex flex-col gap-5">
            <div class="brand flex flex-grow">
                <div class="logo"></div>
                <div class="vch1"></div>
                <div class="signature"></div>
                <div class="hpch"></div>
                <div class="vps"></div>
            </div>
            <div class="disk flex flex-grow gap-3">
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
            </div>
            <div class="bandwidth flex flex-grow gap-3">
                <div class="flex-1">bandwidth</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
            </div>
            <div class="core flex flex-grow gap-3">
                <div class="flex-1">core</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
            </div>
            <div class="addon flex flex-grow gap-3">
                <div class="flex-1">addon</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
                <div class="flex-1">disk</div>
            </div>
        </div>
    </div>

    <div id="Paris" class="tabcontent hidden">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>
</div>
