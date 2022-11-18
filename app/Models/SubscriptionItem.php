<?php

namespace App\Models;

use Laravel\Cashier\SubscriptionItem as CashierSubscriptionItem;

/**
 * App\Models\SubscriptionItem
 *
 * @property int $id
 * @property int $subscription_id
 * @property string $stripe_id
 * @property string $stripe_product
 * @property string $stripe_price
 * @property int|null $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Subscription|null $subscription
 * @method static \Laravel\Cashier\Database\Factories\SubscriptionItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereStripePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereStripeProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereSubscriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubscriptionItem extends CashierSubscriptionItem
{
}
