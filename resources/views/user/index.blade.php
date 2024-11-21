@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Manage User') }}</div>

                <div class="text-left mb-2 mt-2 ml-2">
                    <!-- Tombol Back dengan Ikon -->
<a href="{{ route('index') }}" class="btn btn-secondary">
    <!-- Ikon Back -->
    <i class="fas fa-arrow-left"></i> Kembali
</a>

<!-- Tombol Add dengan Ikon -->
<a href="{{ route('user.create') }}" class="btn btn-secondary">
    <!-- Ikon Add -->
    <i class="fas fa-plus"></i> Add User
</a>

                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                        <!-- Ikon Edit untuk Edit -->
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <!-- Ikon Trash untuk Delete -->
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                        
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
