<?php namespace MWA\Flash;

use Illuminate\Session\Store;

class LaravelSessionStore implements SessionStore
{

    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * flash a message to the session.
     *
     * @param $message
     * @param $level
     */
    public function flash($message, $level)
    {
        $count = count($this->session->get('mwa_flash', []));
        $values[] = [
            'message' => $message,
            'level' => $level
        ];
        $this->session->flash('mwa_flash.' . $count, $values);
    }

}