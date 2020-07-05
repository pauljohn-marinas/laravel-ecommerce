<div>
    <div class="d-flex">
        <button wire:click="decrement" type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                <i class="ion-ios-remove"></i>
        </button>
        <input type="text" id="quantity" name="quantity" class="form-control input-number mx-2" value="{{ $count }}" min="1" max="100">
        <button wire:click="increment" type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
            <i class="ion-ios-add"></i>
        </button>
    </div>       	
</div>
