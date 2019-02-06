<?php

namespace Mmertz\Achievements\Event;

use Mmertz\Achievements\Model\AchievementProgress;
use Illuminate\Queue\SerializesModels;

class Progress
{
    use SerializesModels;

    public $progress;

    /**
     * Create a new event instance.
     *
     * @param  AchievementProgress $progress
     */
    public function __construct(AchievementProgress $progress)
    {
        $this->progress = $progress;
    }
}