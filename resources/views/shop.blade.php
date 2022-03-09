@extends('layouts.master')

@section('container')
<div class="main">
    <div class="shop_top">
      <div class="container">
        <?php $counter = 1;?>
        @foreach ($data as $item)
            @if ($counter % 4 == 0)
                <div class="row mb-4">
            @endif

            @component('components.shop-box', ['item' => $item])
                @slot('new')
                    @if ($item->new > 0)
                        <span class="new-label">New</span>
                    @endif
                @endslot

                @slot('sale')
                    @if ($item->sale > 0)
                        <span class="sale-label">Sale!</span>
                    @endif
                @endslot

                @slot('prices')
                    @if ($item->diskon > 0)
                        <span class="reducedfrom">Rp. {{ $item->harga }}</span>
                        <span class="actual">Rp. {{ ($item->harga -= ($item->harga * $item->diskon)) }}</span><br>
                    @else 
                        <span class="actual">Rp. {{ $item->harga }}</span><br>
                    @endif
                @endslot
            @endcomponent
            
            @if ($counter % 4 == 0)
                </div>
            @endif

            <?php $counter++; ?>
        @endforeach     
        
        <div class="row">
            {{ $data->links() }}
        </div>
      </div>
    </div>
</div>
@endsection