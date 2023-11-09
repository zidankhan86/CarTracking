@extends('backend.layout.app')

@section('content')
<style>
    @media print {
        body {
            margin: 0;
        }
    }
</style>

<div class="card">
    <div class="card-body mx-4" id="printable-content">
        <div class="container">
            <p class="my-5 mx-5" style="font-size: 30px;">Thank you for your purchase</p>
            <div class="row">
                <ul class="list-unstyled">
                    <li class="text-black">{{ $invoice->user->name }}</li>
                    <li class="text-muted mt-1"><span class="text-black">Invoice</span> #CRT{{ $invoice->created_at->format('ymd')}}</li>
                    <li class="text-black mt-1">{{ now()->format('M d, Y') }}</li>
                </ul>
                <hr>
                <div class="col-xl-10">
                    <p style="font-weight: bold;">{{ $invoice->title }}</p>
                </div>
                <div class="col-xl-2">
                    <p class="float-end" style="font-weight: bold;">BDT {{ $invoice->amount }}</p>
                </div>
                <hr>
            </div>

            <div class="row text-black">
                <div class="col-xl-12">
                    <p class="float-end" style="font-weight: bold;">Total: BDT {{ $invoice->amount }}</p>
                </div>
            </div>
            <div class="text-center" style="margin-top: 90px;">
                <a href="javascript:void(0);" onclick="printContent()" class="btn btn-primary">Print</a>
            </div>
        </div>
    </div>
</div>

<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

<script>
    function printContent() {
        printJS({
            printable: 'printable-content',
            type: 'html',
            targetStyles: ['*']
        });
    }
</script>
@endsection
