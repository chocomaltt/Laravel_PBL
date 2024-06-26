@extends('kader.layouts.template')

@section('content')
<div class="grid grid-cols-3 mx-5 mt-5 mb-10 gap-5">

    {{-- Card Jumlah Balita --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Jumlah Balita</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        <h1 class="text-5xl font-medium">20</h1>
        <p class="text-xs text-stone-400 pb-4">Sebulan Terakhir</p>
    </div>

    {{-- Card Jumlah Ibu Hamil --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Jumlah Ibu Hamil</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        <h1 class="text-5xl font-medium">20</h1>
        <p class="text-xs text-stone-400 pb-4">Sebulan Terakhir</p>
    </div>

    {{-- Card Jumlah Lansia --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Jumlah Lansia</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        <h1 class="text-5xl font-medium">20</h1>
        <p class="text-xs text-stone-400 pb-4">Sebulan Terakhir</p>
    </div>

    {{-- Card Jumlah Stunting --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Jumlah Stunting</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        <h1 class="text-5xl font-medium">20</h1>
        <p class="text-xs text-stone-400 pb-4">Sebulan Terakhir</p>
    </div>

    {{-- Card Jumlah ibu Hamil Kurang Gizi --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Jumlah Ibu Hamil Kurang Gizi</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        <h1 class="text-5xl font-medium">20</h1>
        <p class="text-xs text-stone-400 pb-4">Sebulan Terakhir</p>
    </div>

    {{-- Card Jumlah Lansia Kurang Sehat --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Jumlah Lansia Kurang Sehat</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        <h1 class="text-5xl font-medium">20</h1>
        <p class="text-xs text-stone-400 pb-4">Sebulan Terakhir</p>
    </div>

    {{-- Card Kunjungan Anggota --}}
    <div class="flex flex-col bg-white rounded-2xl pr-6 pl-7 mb-10 gap-9">
        <div class="flex w-full justify-between pt-5">
            <p class="font-medium text-base">Kunjungan Anggota</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
              </svg>              
        </div>
        {!! $chart->container() !!}
    </div>

    {{-- Card Agenda Posyandu --}}
    <div class="flex flex-col col-span-2 bg-white rounded-2xl pr-6 pl-7 pb-9 gap-5">
        <div class="flex w-full justify-between pt-6 align-middle">
            <p class="font-medium text-xl">Agenda Posyandu</p>
            <div class="flex gap-4">
                <div class="relative flex">
                    <input type="text" class="text-xs pl-5 pr-4 py-2 border rounded-3xl focus:outline-none" id="search" name="search" placeholder="Cari Kegiatan">           
                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>                      
                    </div>
                </div>
                <div class="border flex items-center rounded-full py-1 px-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="0A0A0A" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-3.5 h-3.5 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                      </svg>              
                </div>
            </div>
        </div>
        <table class="border-collapse w-full rounded-t-[10px] overflow-hidden">
            <thead class="bg-gray-200 border-b text-left py-5">
                <tr class=" text-stone-400">
                    <th class="font-normal text-sm">Nama Kegiatan</th>
                    <th class="font-normal text-sm">Tanggal</th>
                    <th class="font-normal text-sm">Pukul</th>
                    <th class="font-normal text-sm">Tempat</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-neutral-950 text-left">
                    <td class="font-normal text-sm">Imunisasi Polio</td>
                    <td class="font-normal text-sm">1 April 2024</td>
                    <td class="font-normal text-sm">08:00 - Selesai</td>
                    <td class="font-normal text-sm">Posyandu Delima Merah</td>
                </tr>
                <tr class="text-neutral-950 w-full text-left">
                    <td class="font-normal text-sm">Imunisasi Polio</td>
                    <td class="font-normal text-sm">1 April 2024</td>
                    <td class="font-normal text-sm">08:00 - Selesai</td>
                    <td class="font-normal text-sm">Posyandu Delima Merah</td>
                </tr>
                <tr class="text-neutral-950 w-full text-left">
                    <td class="font-normal text-sm">Imunisasi Polio</td>
                    <td class="font-normal text-sm">1 April 2024</td>
                    <td class="font-normal text-sm">08:00 - Selesai</td>
                    <td class="font-normal text-sm">Posyandu Delima Merah</td>
                </tr>
                <tr class="text-neutral-950 w-full text-left">
                    <td class="font-normal text-sm">Imunisasi Polio</td>
                    <td class="font-normal text-sm">1 April 2024</td>
                    <td class="font-normal text-sm">08:00 - Selesai</td>
                    <td class="font-normal text-sm">Posyandu Delima Merah</td>
                </tr>
                <tr class="text-neutral-950 w-full text-left">
                    <td class="font-normal text-sm">Imunisasi Polio</td>
                    <td class="font-normal text-sm">1 April 2024</td>
                    <td class="font-normal text-sm">08:00 - Selesai</td>
                    <td class="font-normal text-sm">Posyandu Delima Merah</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('css')
<style>
    th, td {
        padding-inline: 20px;
        padding-block: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
@endpush

@push('js')
<script src="{{ $chart->cdn() }}"></script>
{{$chart->script() }}
    
@endpush