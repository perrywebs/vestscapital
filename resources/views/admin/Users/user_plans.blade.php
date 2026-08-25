<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $text = 'dark';
} else {
    $text = 'light';
}
?>
@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1  d-inline"> {{ $user->name }} Clients Trades</h1>
                    <div class="d-inline">
                        <div class="float-right btn-group">
                            <a class="btn btn-primary btn-sm" href="{{ route('viewuser', $user->id) }}"> <i
                                    class="fa fa-arrow-left"></i> back</a>
                        </div>
                    </div>
                </div>
                <x-danger-alert />
                <x-success-alert />
                <div class="mb-5 row">
                    <div class="col card p-3 shadow ">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <span style="margin:3px;">
                                <div class="table-responsive">
                                    <table id="ShipTable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Investor</th>
                                                <th>Plan</th>
                                                <th>Amount</th>
                                                <th>Min Return</th>
                                                <th>Max Return</th>
                                                <th>Profit</th>
                                                <th>Status</th>
                                                <th>Duration</th>
                                                <th>Activated</th>
                                                <th>Expire At</th>
                                                <th>Last Growth</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($investments as $investment)
                                                @php
                                                    $plan = App\Models\Plans::where('id', $investment->plan)->first();
                                                    $userModel = App\Models\User::where(
                                                        'id',
                                                        $investment->user,
                                                    )->first();

                                                    $amount = (float) $investment->amount;

                                                    $minRate = $plan ? (float) $plan->minr : 0;
                                                    $maxRate = $plan ? (float) $plan->maxr : 0;

                                                    $minReturn = $amount * ($minRate / 100);
                                                    $maxReturn = $amount * ($maxRate / 100);
                                                @endphp

                                                <tr>

                                                    {{-- Investor --}}
                                                    <td>
                                                        @if ($userModel)
                                                            <strong>
                                                                {{ $userModel->name }}
                                                            </strong>

                                                            @if (!empty($userModel->email))
                                                                <br>
                                                                <small class="text-muted">
                                                                    {{ $userModel->email }}
                                                                </small>
                                                            @endif
                                                        @else
                                                            <span class="text-muted">
                                                                Unknown User
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Plan --}}
                                                    <td>
                                                        @if ($plan)
                                                            <strong>{{ $plan->name }}</strong>

                                                            @if (!empty($plan->type))
                                                                <br>

                                                                @if ($plan->type == 'Buy')
                                                                    <span class="badge badge-success">
                                                                        {{ $plan->type }}
                                                                    </span>
                                                                @else
                                                                    <span class="badge badge-danger">
                                                                        {{ $plan->type }}
                                                                    </span>
                                                                @endif
                                                            @endif
                                                        @else
                                                            <span class="badge badge-secondary">
                                                                Plan Deleted
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Investment Amount --}}
                                                    <td>
                                                        <strong>
                                                            {{ $user->currency }}{{ number_format($amount, 2) }}
                                                        </strong>
                                                    </td>

                                                    {{-- Minimum Return --}}
                                                    <td>
                                                        <span class="badge badge-info">
                                                            {{ $minRate }}%
                                                        </span>
                                                    </td>

                                                    {{-- Maximum Return --}}
                                                    <td>
                                                        <span class="badge badge-success">
                                                            {{ $maxRate }}%
                                                        </span>
                                                    </td>

                                                    {{-- Current Profit --}}
                                                    <td>
                                                        @if ((float) $investment->profit_earned > 0)
                                                            <span class="badge badge-success">
                                                                +{{ $user->currency }}{{ number_format((float) $investment->profit_earned, 2) }}
                                                            </span>
                                                        @elseif ((float) $investment->profit_earned < 0)
                                                            <span class="badge badge-danger">
                                                                {{ $user->currency }}{{ number_format((float) $investment->profit_earned, 2) }}
                                                            </span>
                                                        @else
                                                            <span class="badge badge-secondary">
                                                                {{ $user->currency }}0.00
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Status --}}
                                                    <td>
                                                        @if ($investment->active == 'yes')
                                                            <span class="badge badge-success">
                                                                Active
                                                            </span>
                                                        @else
                                                            <span class="badge badge-danger">
                                                                Inactive
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Duration --}}
                                                    <td>
                                                        {{ $investment->inv_duration }}
                                                    </td>

                                                    {{-- Activated --}}
                                                    <td>
                                                        @if ($investment->activated_at)
                                                            {{ \Carbon\Carbon::parse($investment->activated_at)->toDayDateTimeString() }}
                                                        @else
                                                            <span class="text-muted">
                                                                Not activated
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Expiration --}}
                                                    <td>
                                                        @if ($investment->expire_date)
                                                            {{ \Carbon\Carbon::parse($investment->expire_date)->toDayDateTimeString() }}

                                                            @if (now()->greaterThan(\Carbon\Carbon::parse($investment->expire_date)))
                                                                <br>
                                                                <span class="badge badge-danger">
                                                                    Expired
                                                                </span>
                                                            @endif
                                                        @else
                                                            <span class="text-muted">
                                                                —
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Last Growth --}}
                                                    <td>
                                                        @if ($investment->last_growth)
                                                            {{ \Carbon\Carbon::parse($investment->last_growth)->toDayDateTimeString() }}
                                                        @else
                                                            <span class="text-muted">
                                                                —
                                                            </span>
                                                        @endif
                                                    </td>

                                                    {{-- Actions --}}
                                                    <td>
                                                        @if ($investment->active == 'yes')
                                                            {{-- Enter profit/loss amount --}}
                                                            <div class="mb-2" style="min-width: 220px;">

                                                                <div class="input-group input-group-sm mb-2">
                                                                    <span class="input-group-text">
                                                                        {{ $user->currency }}
                                                                    </span>

                                                                    <input type="number" step="0.01" min="0"
                                                                        class="form-control"
                                                                        id="result_amount_{{ $investment->id }}"
                                                                        placeholder="Enter amount">
                                                                </div>

                                                                <div class="d-flex">

                                                                    <button type="button"
                                                                        class="btn btn-success btn-sm mr-1 mx-1"
                                                                        onclick="submitTradeResult(
                                                                            {{ $investment->id }},
                                                                            'profit',
                                                                            '{{ route('markprofit', $investment->id) }}'
                                                                        )">
                                                                        <i class="fa fa-plus"></i> Profit
                                                                    </button>

                                                                    <button type="button" class="btn btn-danger btn-sm mx-1"
                                                                        onclick="submitTradeResult(
                                                                            {{ $investment->id }},
                                                                            'loss',
                                                                            '{{ route('markloss', $investment->id) }}'
                                                                        )">
                                                                        <i class="fa fa-minus"></i> Loss
                                                                    </button>

                                                                </div>

                                                            </div>

                                                            <a href="{{ route('markas', [
                                                                'id' => $investment->id,
                                                                'status' => 'expired',
                                                            ]) }}"
                                                                class="m-1 btn btn-warning btn-sm">
                                                                Mark as expired
                                                            </a>
                                                        @else
                                                            <a href="{{ route('markas', [
                                                                'id' => $investment->id,
                                                                'status' => 'yes',
                                                            ]) }}"
                                                                class="m-1 btn btn-success btn-sm">
                                                                Mark as active
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('deleteplan', $investment->id) }}"
                                                            class="m-1 btn btn-info btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this investment?')">
                                                            Delete
                                                        </a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function submitTradeResult(id, type, url) {

                const input = document.getElementById('result_amount_' + id);
                const amount = parseFloat(input.value);

                if (!amount || amount <= 0) {
                    alert('Please enter a valid amount.');
                    input.focus();
                    return;
                }

                let message = type === 'profit' ?
                    'Mark this trade with a profit of ' + amount + '?' :
                    'Mark this trade with a loss of ' + amount + '?';

                if (!confirm(message)) {
                    return;
                }

                window.location.href = url + '?amount=' + encodeURIComponent(amount);
            }
        </script>
    @endsection
