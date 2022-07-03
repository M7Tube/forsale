@extends('layouts.livewireLayout')

@section('tableName', __('Users'))
@section('searchOptions')
    <option value="first_name">{{ __('First Name') }}</option>
    <option value="last_name">{{ __('Last Name') }}</option>
    <option value="phone_number">{{ __('Phone Number') }}</option>
    <option value="email">{{ __('Email') }}</option>
    <option value="is_personal">{{ __('Account Type') }}</option>
    <option value="birth_date">{{ __('Birth Date') }}</option>
@endsection
@section('table-head-names')
    <th>{{ __('First Name') }}</th>
    <th>{{ __('Last Name') }}</th>
    <th>{{ __('Phone Number') }}</th>
    <th>{{ __('Email') }}</th>
    <th>{{ __('Account Type') }}</th>
    <th>{{ __('Birth Date') }}</th>
    <th>{{ __('Action') }}</th>
@endsection
@section('table-body')
    @forelse($Users as $data)
        <tbody>
            <tr>
                <td>{{ $data->first_name }}
                </td>
                <td>{{ $data->last_name }}
                </td>
                <td>{{ $data->phone_number }}
                </td>
                <td>{{ $data->email }}
                </td>
                @if ($data->is_personal == 1)
                    <td>{{ __('Yes') }}
                    </td>
                @else
                    <td>{{ __('No') }}
                    </td>
                @endif
                <td>{{ $data->birth_date }}
                </td>
                @can('edit_users')
                    <td>
                        <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" wire:click.prevent="edit({{ $data->user_id }})"><i
                                class="bi bi-pen"></i></button>
                    </td>
                @endcan
            </tr>
        </tbody>
    @empty
        <tr>
            <td colspan="100">
                <h5 class="text-center">
                    <i>{{ __('Empty') }} <button type="button" class="btn btn-outline-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#CreateModal"><i class="bi bi-plus-square"></i></button></i>
                </h5>
            </td>
        </tr>
    @endforelse
@endsection
@section('create-model-body')
    @if (Session()->has('WrongUser'))
        <div class="alert alert-danger">
            {{ Session('WrongUser') }}
        </div>
    @endif
    @if (!Session()->has('WrongUser'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <div class="results">
                    @if (Session()->has('message'))
                        <div class="alert alert-success">
                            {{ Session('message') }}
                        </div>
                    @endif
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="first_name" autocomplete="off"
                                wire:model="first_name" />
                            <label for="inputfirst_name">{{ __('First Name') }}
                            </label>
                            <span class="text-danger">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="last_name" autocomplete="off"
                                wire:model="last_name" />
                            <label for="inputlast_name">{{ __('Last Name') }}
                            </label>
                            <span class="text-danger">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="phone_number" autocomplete="off"
                                wire:model="phone_number" />
                            <label for="inputphone_number">{{ __('Phone Number') }}
                            </label>
                            <span class="text-danger">
                                @error('phone_number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="email" autocomplete="off"
                                wire:model="email" />
                            <label for="inputemail">{{ __('Email') }}
                            </label>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" name="is_personal" wire:model="is_personal" id="">
                                <option value="0">{{ __('No') }}</option>
                                <option value="1">{{ __('Yes') }}</option>
                            </select>
                            <label for="inputemail">{{ __('Account Type') }}
                            </label>
                            <span class="text-danger">
                                @error('is_personal')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection
@section('edit-model-body')
    @if (Session()->has('WrongUser'))
        <div class="alert alert-danger">
            {{ Session('WrongUser') }}
        </div>
    @endif
    @if (!Session()->has('WrongUser'))
        <div class="card-body">
            <form autocomplete="off" method="POST">
                @csrf
                <input type="hidden" name="user_id" wire:model="user_id">
                <div class="results">
                    @if (Session()->has('message'))
                        <div class="alert alert-success">
                            {{ Session('message') }}
                        </div>
                    @endif
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="first_name" autocomplete="off"
                                wire:model="first_name" />
                            <label for="inputfirst_name">{{ __('First Name') }}
                            </label>
                            <span class="text-danger">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="last_name" autocomplete="off"
                                wire:model="last_name" />
                            <label for="inputlast_name">{{ __('Last Name') }}
                            </label>
                            <span class="text-danger">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="phone_number" autocomplete="off"
                                wire:model="phone_number" />
                            <label for="inputphone_number">{{ __('Phone Number') }}
                            </label>
                            <span class="text-danger">
                                @error('phone_number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputname" type="text" name="email" autocomplete="off"
                                wire:model="email" />
                            <label for="inputemail">{{ __('Email') }}
                            </label>
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-control" name="is_personal" wire:model="is_personal" id="">
                                <option value="0">{{ __('No') }}</option>
                                <option value="1">{{ __('Yes') }}</option>
                            </select>
                            <label for="inputemail">{{ __('Account Type') }}
                            </label>
                            <span class="text-danger">
                                @error('is_personal')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection
@section('linksOfPaganation')
    {!! $Users->links() !!}
@endsection
