<?php namespace MWA\Flash;

interface SessionStore
{

    /**
     * flash a message to the session.
     *
     * @param $message
     * @param $level
     */
    public function flash($message, $level);
} 