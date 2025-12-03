<?php

use Illuminate\Support\Facades\Route;

// Authentication
Route::post('/auth/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/auth/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/auth/2fa/verify', [App\Http\Controllers\AuthController::class, 'verifyTwoFactor']);

Route::middleware(['auth:sanctum'])->group(function () {
    // Users (Admin-only for staff creation)
    Route::apiResource('users', App\Http\Controllers\UserController::class)->middleware('can:manage-users');

    // Donors
    Route::apiResource('donors', App\Http\Controllers\DonorController::class);

    // Beneficiaries
    Route::apiResource('beneficiaries', App\Http\Controllers\BeneficiaryController::class);
    Route::get('beneficiaries/{beneficiary}/documents', [App\Http\Controllers\BeneficiaryController::class, 'documents']);
    Route::post('beneficiaries/{beneficiary}/documents', [App\Http\Controllers\BeneficiaryController::class, 'uploadDocument']);

    // Donations
    Route::apiResource('donations', App\Http\Controllers\DonationController::class);
    Route::get('donations/stats/total', [App\Http\Controllers\DonationStatsController::class, 'total']);
    Route::get('donations/stats/summary', [App\Http\Controllers\DonationStatsController::class, 'summary']);
    Route::post('donations/{donation}/approve', [App\Http\Controllers\DonationApprovalController::class, 'approve'])->middleware('can:review-donations');
    Route::post('donations/{donation}/reject', [App\Http\Controllers\DonationApprovalController::class, 'reject'])->middleware('can:review-donations');

    // Distribution Tasks
    Route::apiResource('distribution-tasks', App\Http\Controllers\DistributionTaskController::class);
    Route::post('distribution-tasks/{task}/assign', [App\Http\Controllers\DistributionTaskController::class, 'assign'])->middleware('can:assign-tasks');
    Route::post('distribution-tasks/{task}/complete', [App\Http\Controllers\DistributionTaskController::class, 'complete'])->middleware('can:confirm-delivery');

    // Field Monitoring: Proof uploads
    Route::post('distribution-records/{record}/proof/photo', [App\Http\Controllers\DistributionRecordController::class, 'uploadPhoto']);
    Route::post('distribution-records/{record}/proof/signature', [App\Http\Controllers\DistributionRecordController::class, 'uploadSignature']);
    Route::post('distribution-records/{record}/gps', [App\Http\Controllers\DistributionRecordController::class, 'updateGps']);

    // Reports
    Route::get('reports/overview', [App\Http\Controllers\ReportController::class, 'overview']);
    Route::get('reports/donations', [App\Http\Controllers\ReportController::class, 'donations']);
    Route::get('reports/beneficiaries', [App\Http\Controllers\ReportController::class, 'beneficiaries']);
    Route::get('reports/distributions', [App\Http\Controllers\ReportController::class, 'distributions']);

    // Notifications
    Route::post('notifications/announce', [App\Http\Controllers\NotificationController::class, 'announce'])->middleware('can:send-announcements');
    Route::get('notifications', [App\Http\Controllers\NotificationController::class, 'index']);

    // Audit Logs
    Route::get('audit-logs', [App\Http\Controllers\AuditLogController::class, 'index'])->middleware('can:view-audit-logs');
    Route::get('audit-logs/export', [App\Http\Controllers\AuditLogController::class, 'export'])->middleware('can:export-audit-logs');
});


