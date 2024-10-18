@extends('components.template') 
    {{-- untuk menghubungkan ke template --}}
@section('title', 'contact')
@section('content')
    <div class="min-h-screen  flex " style="background: linear-gradient(to bottom, #B79D9B, #30333A)">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <h1 class="my-2 text-3xl md:text-4xl text-white font-bold leading-tight mb-10">
                Contact
            </h1>
            <div  class="bg-white rounded-lg shadow-lg p-6 ">
                <table border="1" class="table-auto w-full text-left border">
                    <thead class="border=1">
                        <tr class="text-white justify-center" style="background-color: #b094a8;">
                            <th class="px-4 py-2">No.</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Phone</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-100">
                        @foreach ($contacts as $contact)
                            <tr class="border-b hover:bg-gray-300 transition duration-100">
                                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2">{{ $contact["name"] }}</td>
                                <td class="px-4 py-2">{{ $contact["email"] }}</td>
                                <td class="px-4 py-2">{{ $contact["phone"] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
