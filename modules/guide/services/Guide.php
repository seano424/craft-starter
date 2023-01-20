<?php

namespace modules\guide\services;

use Craft;
use yii\base\Component;

/**
 * Guide service
 */
class Guide extends Component
{
    public function blockPermutations(): string
    {
        $blockTypes = Craft::$app->getFields()->getFieldByHandle('blocks')->blockTypes;
        $factorial = gmp_fact(count($blockTypes));
        $permutations = gmp_intval($factorial);

        if ($permutations > 1000000) {
            return 'more than one million';
        }

        return number_format($permutations);
    }
}
