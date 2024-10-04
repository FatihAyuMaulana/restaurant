@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
    <section class="gourmet-spot-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Our Gourmet Spot Locations</h2>
                    <ul class="list-group">
                        @foreach($branches as $branch)
                            <li class="list-group-item">
                                <h4>{{ $branch['name'] }}</h4>
                                <p>Location: {{ $branch['location'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
  <style>  

.gourmet-spot-section {
    padding: 60px 0;
    background-color: #f9f9f9;
}

.gourmet-spot-section h2 {
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 40px;
    color: #333;
}

.gourmet-spot-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.gourmet-spot-section ul li {
    background-color: #fff;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-size: 1.1rem;
    color: #555;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.gourmet-spot-section ul li:hover {
    background-color: #e7f3fe;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
}

.gourmet-spot-section ul li span {
    font-weight: bold;
    color: #007bff;
}
</style>
@endpush

