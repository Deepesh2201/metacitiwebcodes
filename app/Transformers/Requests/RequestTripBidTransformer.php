<?php

namespace App\Transformers\Requests;

use App\Transformers\Transformer;
use App\Models\Request\TripBids;

class RequestTripBidTransformer extends Transformer
{
    /**
     * Resources that can be included if requested.
     *
     * @var array
     */
    protected array $availableIncludes = [

    ];

    /**
     * A Fractal transformer.
     *
     * @param TripBids $request
     * @return array
     */
    public function transform(TripBids $request)
    {
        return [
            'bid_id' => $request->id,
            'user_id' => $request->user_id,
            'request_id' => $request->request_id,
            'driver_id' => $request->driver_id,
            'request_eta_amount' => $request->request_eta_amount,
            'status' => $request->status,
            'bid_price' => $request->bid_price,
            'converted_updated_at' => $request->converted_updated_at,
            'converted_created_at' => $request->converted_created_at
        ];
    }
}
