<?php
/**​
 * Filename:    create.blade.php
 * Project:     plant-prop
 * Location:    resources/views/batches
 * Author:      Georgia Treacy <20064347@tafe.wa.edu.au>
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
                    <h3 class="card-header px-2 py-4 text-2xl bg-gray-800 text-gray-50">
                        New Product
                    </h3>
                    <div class="card-body mt-2 p-4">
                        <form action="{{ route('products.store') }}" method="post">
                            @csrf
                            <div class="pb-4 flex">
                                <label for="name" class="flex mr-4 w-1/12 w-20">
                                    Name
                                </label>
                                <input type="text" id="name" name="name" class="flex-1"/>
                            </div>
                            <div class="pb-4 flex">
                                <label for="description" class="flex mr-4 w-1/12 w-20">
                                    Description
                                </label>
                                <textarea id="description" name="description" class="flex-1"></textarea>
                            </div>
                            <div class="pb-4 flex">
                                <label for="price" class="flex mr-4 w-1/12 w-20">Price</label>
                                <input type="number" id="price" name="price" class="flex-1"/>
                            </div>
                            <div class="pb-4 flex gap-4">
                                <span class="py-4 w-1/12 w-20"></span>
                                <button class="rounded py-4  mr-4 w-1/12 w-20 bg-green-200">
                                    Save
                                </button>
                                <button class="rounded py-4  mr-4 w-1/12 w-20 bg-blue-200">
                                    Clear
                                </button>
                                <a href="{{ route('products.index') }}" class="rounded py-4 w-1/12 w-20 bg-red-200 text-center">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
<!-- Create Product Content Here -->


