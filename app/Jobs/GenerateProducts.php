<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateProducts implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $totalNumbers;

    public function __construct($numbers)
    {
        $this->totalNumbers = $numbers;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        \App\Models\Product::factory($this->totalNumbers)->create();
    }
}
