<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WifiController extends Controller
{
    public function connectToWifi(Request $request)
    {
        // Validate input
        $request->validate([
            'ssid' => 'required|string',
            'password' => 'required|string',
        ]);

        // Get SSID and password from the request
        $ssid = $request->input('ssid');
        $password = $request->input('password');

        // Create the command to connect to Wi-Fi using nmcli
        $command = "sudo nmcli dev wifi connect '{$ssid}' password '{$password}'";

        // Execute the command
        $output = shell_exec($command);

        // Check if the command was successful
        if (strpos($output, 'successfully activated') !== false) {
            return response()->json([
                'status' => 'success',
                'message' => 'Wi-Fi connected successfully',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to connect to Wi-Fi',
                'output' => $output,
            ]);
        }
    }
}
