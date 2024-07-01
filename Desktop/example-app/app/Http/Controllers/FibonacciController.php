<?php

namespace App\Http\Controllers;


class FibonacciController extends Controller
{
    public function generateSequence($length)
    {
        $fibonacciSequence = [];

        // Edge case for invalid lengths (less than 1)
        if ($length < 1) {
            return $fibonacciSequence; // Return empty array for invalid input
        }

        // Initialize the first two Fibonacci numbers
        $fibonacciSequence[] = 0; // Fibonacci number at position 0
        if ($length > 1) {
            $fibonacciSequence[] = 1; // Fibonacci number at position 1
        }

        // Generate Fibonacci sequence iteratively
        for ($i = 2; $i < $length; $i++) {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }

    public function index()
    {
        $sequence = $this->generateSequence(10); // Generate Fibonacci sequence of length 10

        return view('fibonacci', ['sequence' => $sequence]);
    }
}
