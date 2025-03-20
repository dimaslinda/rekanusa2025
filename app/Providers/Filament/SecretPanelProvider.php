<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\SessionsWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\VisitorsWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\PageViewsWidget;
use BezhanSalleh\FilamentGoogleAnalytics\FilamentGoogleAnalyticsPlugin;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\MostVisitedPagesWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\SessionsByDeviceWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\SessionsDurationWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\TopReferrersListWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\ActiveUsersOneDayWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\SessionsByCountryWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\ActiveUsersSevenDayWidget;
use BezhanSalleh\FilamentGoogleAnalytics\Widgets\ActiveUsersTwentyEightDayWidget;

class SecretPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('secret')
            ->path('secret')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: \app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: \app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: \app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                PageViewsWidget::class,
                VisitorsWidget::class,
                ActiveUsersOneDayWidget::class,
                ActiveUsersSevenDayWidget::class,
                ActiveUsersTwentyEightDayWidget::class,
                SessionsWidget::class,
                SessionsDurationWidget::class,
                SessionsByCountryWidget::class,
                SessionsByDeviceWidget::class,
                MostVisitedPagesWidget::class,
                TopReferrersListWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
                FilamentGoogleAnalyticsPlugin::make()
            ]);
    }
}
