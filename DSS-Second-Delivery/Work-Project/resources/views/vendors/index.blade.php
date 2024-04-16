@extends('layouts.app')

@section('content')
    <x-vendor-table :vendors="$vendors" />

    <style>
        .vendor-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .vendor-table th, .vendor-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .vendor-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .vendor-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #4CAF50;
            color: white;
        }
    </style>
@endsection
