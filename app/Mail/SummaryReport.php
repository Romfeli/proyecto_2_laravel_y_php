<?php

namespace App\Mail;

use App\Models\ExpenseReport; // Asumiendo que ExpenseReport está en el namespace correcto

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SummaryReport extends Mailable
{
    use Queueable, SerializesModels;

    private $expenseReport;

    /**
     * Create a new message instance.
     */
    public function __construct(ExpenseReport $expenseReport)
    {
        $this->expenseReport = $expenseReport;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('example@example.com', 'Sender Name')
                    ->subject('Summary Report')
                    ->view('mail.expenseReport', ['report' => $this->expenseReport]);
    }
}
