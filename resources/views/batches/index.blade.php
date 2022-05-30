<?php
/**
 * Filename:    index.blade.php
 * Project:     plant-prop
 * Location:    resources/views/batches
 * Author:      Georgia Treacy
 * Created:     30/05/22
 */
?>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg border border-gray-800">
                <div class="card">

                    <h3 class="card-header px-2 py-4 text-2xl bg-gray-800 text-white">
                        Batch List
                    </h3>
                    <div class="card-body mt-2">
                        <a href="{{ route('batch.create') }}" class="btn btn-gray-400 m-4 p-2">Add new Batch</a>
                        <br/><br/>
                        <table class="table w-full">
                            <thead class=" bg-gray-800 text-white">
                            <thead class=" bg-gray-800 text-white">
                            <tr class="columns-2">
                                <th class="col-auto px-4 py-2 text-left">Batch</th>
                                <th class="col-auto px-4 py-2"></th>
                            </tr
                            </thead>
                            <tbody>
                            @forelse ($batches as $batch)
                                <tr class="even:bg-gray-100 border-gray-300 border border-bottom border-l-0 border-r-0 hover:bg-neutral-300">
                                    <td class="col-auto px-4 py-2">
                                        <i class="{{$batch->icon}}"></i>{{ $batch->name }}
                                    </td>
                                    <td>
                                        <span class="text-green-500">Details</span>
                                        <span class="text-blue-500">Edit</span>
                                        <span class="text-red-500">Remove</span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="col-auto px-4 py-2">
                                        No Batches found.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot class="bg-gray-800 text-white">
                            <tr>
                                <td class="col-auto px-4 py-2">Navigation</td>
                                <td class="col-auto px-4 py-2">
                                    {{$count}} Batches
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

