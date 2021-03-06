<?php

namespace App\Events;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SensorUpdated implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;
  public $del;
  public $sensor;
  public function __construct($message,$del,$sensor)
  {

      $this->message = $message;
      $this->del=$del;
      $this->sensor=$sensor;
  }

  public function broadcastOn()
  {

      return ['user-channel'];
  }

  public function broadcastAs()
  {
      return 'user-event';
  }
}