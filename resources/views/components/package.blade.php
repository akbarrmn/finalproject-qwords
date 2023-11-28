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

<div class="mx-60 h-max bg-base-200 rounded-3xl p-8 mb-10">
    <div id="London" class="tabcontent block">
        <div class="flex flex-col gap-5">
            <div class="brand flex flex-grow p-3">
                <div class="logo flex-1 flex justify-center">
                    <img src="/assets/images/Package.png" class="max-w-[200px] hidden lg:block" />
                </div>
                <div class="vch1 flex flex-col flex-1 gap-3 justify-center items-center">
                    <h1 class="text-3xl font-bold">VCH1</h1>
                    <p class="text-lg line-through">Rp 24.500</p>
                    <h4 class="text-2xl font-semibold text-primary">Rp 14.500</h4>
                    <p class="text-sm">Value Cloud Hosting</p>
                    <button class="btn btn-primary">Choose</button>
                </div>
                <div class="signature flex flex-col flex-1 gap-3 justify-center items-center">
                    <h1 class="text-3xl font-bold">Signature</h1>
                    <p class="text-lg line-through">Rp 109.000</p>
                    <h4 class="text-2xl font-semibold text-primary">Rp 89.900</h4>
                    <p class="text-sm">Ultimate Hosting</p>
                    <button class="btn btn-primary">Choose</button>
                </div>
                <div class="hpch flex flex-col flex-1 gap-3 justify-center items-center">
                    <h1 class="text-3xl font-bold">HPCH Bisnis 1</h1>
                    <p class="text-lg line-through">Rp 90.000</p>
                    <h4 class="text-2xl font-semibold text-primary">Rp 79.000</h4>
                    <p class="text-sm">High Performance</p>
                    <button class="btn btn-primary">Choose</button>
                </div>
                <div class="vps flex flex-col flex-1 gap-3 justify-center items-center">
                    <h1 class="text-3xl font-bold">VPS SC1</h1>
                    <p class="text-lg line-through">Rp 135.000</p>
                    <h4 class="text-2xl font-semibold text-primary">Rp 75.000</h4>
                    <p class="text-sm">Cloud VPS KVM SSD</p>
                    <button class="btn btn-primary">Choose</button>
                </div>
            </div>
            <div class="disk flex flex-grow-[2] gap-3 bg-white rounded-md p-3">
                <div class="flex-1">disk</div>
                <div class="flex flex-1 justify-center">3gb</div>
                <div class="flex flex-1 justify-center">Unlimited</div>
                <div class="flex flex-1 justify-center">3gb</div>
                <div class="flex flex-1 justify-center">25gb</div>
            </div>
            <div class="bandwidth flex flex-grow gap-3 p-3">
                <div class="flex-1">bandwidth</div>
                <div class="flex flex-1 justify-center">Unlimited</div>
                <div class="flex flex-1 justify-center">Unlimited</div>
                <div class="flex flex-1 justify-center">Unlimited</div>
                <div class="flex flex-1 justify-center">Unlimited</div>
            </div>
            <div class="core flex flex-grow gap-3 bg-white rounded-md p-3">
                <div class="flex-1">core</div>
                <div class="flex flex-1 justify-center">0.5 Core</div>
                <div class="flex flex-1 justify-center">1 Core</div>
                <div class="flex flex-1 justify-center">1 Core</div>
                <div class="flex flex-1 justify-center">1 Core</div>
            </div>
            <div class="addon flex flex-grow gap-3 p-3">
                <div class="flex-1">addon</div>
                <div class="flex flex-1 justify-center">No</div>
                <div class="flex flex-1 justify-center">5 / 5</div>
                <div class="flex flex-1 justify-center">-</div>
                <div class="flex flex-1 justify-center">Unlimited</div>
            </div>
        </div>
    </div>

    <div id="Paris" class="tabcontent hidden">
        <div class="flex flex-wrap flex-grow gap-5">
            <div class="card flex flex-col gap-5 bg-white p-5 flex-1 justify-between">
                <div class="flex flex-col gap-2">
                    <div class="flex gap-3 items-center">
                        <img src="/assets/images/Asset 1.png" alt="ssl" class="max-w-[30px]">
                        <h1 class="text-xl font-bold">SSL</h1>
                    </div>
                    <p class="text-base">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan
                        menggunakan SSL
                        Certificate.</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Mulai dari</p>
                    <h1 class="text-xl font-semibold text-primary">Rp. 112.000<span class="text-base text-black">/tahun</span></h1>
                </div>
                <button class="btn btn-primary rounded-md">Pesan Sekarang</button>
            </div>
            <div class="card flex flex-col gap-5 bg-white p-5 flex-1 justify-between">
                <div class="flex flex-col gap-2">
                    <div class="flex gap-3 items-center">
                        <img src="/assets/images/Asset 2.png" alt="server" class="max-w-[30px]">
                        <h1 class="text-xl font-bold">Dedicated Server</h1>
                    </div>
                    <p class="text-base">Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Mulai dari</p>
                    <h1 class="text-xl font-semibold text-primary">Rp. 112.000<span class="text-base text-black">/tahun</span></h1>
                </div>
                <button class="btn btn-primary rounded-md">Pesan Sekarang</button>
            </div>
            <div class="card flex flex-col gap-5 bg-white p-5 flex-1 justify-between">
                <div class="flex flex-col gap-2">
                    <div class="flex gap-3 items-center">
                        <img src="/assets/images/Asset 3.png" alt="colo" class="max-w-[30px]">
                        <h1 class="text-xl font-bold">Colocation Server</h1>
                    </div>
                    <p class="text-base">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Mulai dari</p>
                    <h1 class="text-xl font-semibold text-primary">Rp. 112.000<span class="text-base text-black">/tahun</span></h1>
                </div>
                <button class="btn btn-primary rounded-md">Pesan Sekarang</button>
            </div>
        </div>
    </div>
</div>
