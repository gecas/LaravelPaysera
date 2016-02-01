<?

namespace Artme\Paysera;

use Illuminate\Support\Facades\Facade;

class PayseraFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'paysera';
    }
}
