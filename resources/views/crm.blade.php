@extends('layout')

@section('title' , "Home")


@section('content')
    <div class="col-8">
        <table class="table table-striped table-secondary">
            <tr class="h5">
                <th>Id</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Remark</th>
                <th>Action</th>
            </tr>
            @foreach ($call as $c)

            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->contact}}</td>
                <td>{{$c->address}}</td>
                <td>{{$c->address}}</td>
                <td>{{$c->remark}}</td>
                <td>
                    <a href="{{route('delete',['id'=>$c->id])}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
@endsection


@section('sidebar')
    <div class="col-3  border-start border-3 border-dark ms-3" >
        <form action="{{route('store')}}" method="post" class="bg-transparent ms-4">
            @csrf
            <div class="mb-2">
                <label class="form-label">Name</label>
                <input type="text" value="{{old('name')}}" name="name" class="form-control">
                @error('name')
                    <p class="small fw-bold text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label class="form-label">Contact</label>
                <input type="text" value="{{old('contact')}}" name="contact" class="form-control">
                @error('contact')
                    <p class="small fw-bold text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label">Email</label>
                <input type="text" value="{{old('email')}}" name="email" class="form-control">
                @error('email')
                    <p class="small fw-bold text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label">Address</label>
                <input type="text" value="{{old('address')}}" name="address" class="form-control">
                @error('address')
                    <p class="small fw-bold text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label class="form-label">Remark</label>
                <select name="remark" class="form-select">
                    <option value="5/5">5/5</option>
                    <option value="5/4">5/4</option>
                    <option value="5/3">5/3</option>
                    <option value="5/2">5/2</option>
                    <option value="5/1">5/1</option>
                </select>
                @error('remark')
                    <p class="small fw-bold text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-2">
                <input type="submit" class="btn btn-success w-50 fw-bold">
            </div>

        </form>
    </div>
@endsection


