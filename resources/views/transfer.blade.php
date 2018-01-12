@extends('base')

@section('content')

<h2>Transfer bitcoins to another wallet</h2>

Your wallet: #<br /><br />

<form>
    <label>Send to wallet #</label>
    <input type="text"><br /><br />

    <label>Amount:</label><br />
    <input type="number"> Bitcoins<br /><br />

    <button>Send</button>
</form>

@endsection