<?php

namespace App\Http\Livewire\Dashboard\Notification;

use Livewire\Component;
use Kutia\Larafirebase\Facades\Larafirebase;

class Send extends Component
{
    public $title;
    public $Body;
    public $message;

    public function clear()
    {
        $this->title = null;
        $this->Body = null;
    }

    public function Send()
    {
        $this->message = Larafirebase::withTitle($this->title)
            ->withBody($this->Body)
            ->withImage('https://firebase.google.com/images/social.png')
            ->withClickAction('admin/notifications')
            ->withPriority('high')
            ->sendNotification('eZm9--mjRHG8s5GQ8r1Gjg:APA91bHM6SWaCPs1MgMMHZSQAzXhObndU-2BP031eUKLyV_LMPR2Gdl06-gHjXcRtcKsLsReHJYbPaZhStXywE36azlrBqUKXUQsKmqG6G-EWq7YkFO5ZXmykvtekHdpoIE8JURsy1s2');
        $this->clear();
    }//

    public function render()
    {
        return view('livewire.dashboard.notification.send');
    }
}
