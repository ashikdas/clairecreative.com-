<?php
/* phpcs:ignoreFile */
/**
 * Unicons icons for icon picker component
 * https://iconscout.com/unicons
 *
 * @package ghostkit-pro
 */

/**
 * GhostKit_Pro_Icons_Unicons
 */
class GhostKit_Pro_Icons_Unicons {
    /**
     * GhostKit_Pro_Icons_Unicons constructor.
     */
    public function __construct() {
        add_filter( 'gkt_icons_list', array( $this, 'extend_icons_list' ) );
    }

    /**
     * Extend icons list.
     *
     * @param array $icons - icons list.
     *
     * @return array
     */
    public static function extend_icons_list( $icons ) {
        /*
         * Example:

            $result = "array(\n";

            foreach ( glob( './*.svg' ) as $icon ) {
                $name = basename( $icon, '.svg' );

                $preview = trim( preg_replace( '/\s+/', ' ', file_get_contents( $icon ) ) );
                $preview = str_replace( 'svg xmlns="http://www.w3.org/2000/svg"', 'svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor"', $preview );

                $result .= "    array(
                    'keys' => '" . $name . "',
                    'svg' => '" . htmlspecialchars( $preview ) . "',
                ),\n";
            }

            $result .= ")";

            echo '<pre>' . $result . '</pre>';
        */

        // v3.0.1
        $icons['unicons'] = array(
            'name' => esc_html__( 'Unicons', 'ghostkit-pro' ),
            'icons' => array(
                array(
                    'keys' => '0-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM12.5,6h-1a3,3,0,0,0-3,3v6a3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V9A3,3,0,0,0,12.5,6Zm1,9a1,1,0,0,1-1,1h-1a1,1,0,0,1-1-1V9a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1Zm8.1-6a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9Z"/></svg>',
                ),
                array(
                    'keys' => '10-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM11,9v6a3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V9a3,3,0,0,0-3-3H14A3,3,0,0,0,11,9Zm5,0v6a1,1,0,0,1-1,1H14a1,1,0,0,1-1-1V9a1,1,0,0,1,1-1h1A1,1,0,0,1,16,9Zm5.6,0a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9ZM7,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,7,7Z"/></svg>',
                ),
                array(
                    'keys' => '12-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,9a1,1,0,0,0,2,0,1,1,0,0,1,1-1h1a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1H14a3,3,0,0,0-3,3v3a1,1,0,0,0,1,1h5a1,1,0,0,0,0-2H13V14a1,1,0,0,1,1-1h1a3,3,0,0,0,3-3V9a3,3,0,0,0-3-3H14A3,3,0,0,0,11,9Zm7-4h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM7,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,7,7ZM21.6,9a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9Z"/></svg>',
                ),
                array(
                    'keys' => '13-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM11,9a1,1,0,0,0,2,0,1,1,0,0,1,1-1h1a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1h-.5a1,1,0,0,0,0,2H15a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1H14a1,1,0,0,1-1-1,1,1,0,0,0-2,0,3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V14a3,3,0,0,0-.78-2A3,3,0,0,0,18,10V9a3,3,0,0,0-3-3H14A3,3,0,0,0,11,9ZM7,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,7,7ZM21.6,9a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9Z"/></svg>',
                ),
                array(
                    'keys' => '16-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2Zm3.6,4a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9ZM7,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,7,7Zm4,2v6a3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V14a3,3,0,0,0-3-3H13V9a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H14A3,3,0,0,0,11,9Zm4,4a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1H14a1,1,0,0,1-1-1V13Z"/></svg>',
                ),
                array(
                    'keys' => '17-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,7V9a1,1,0,0,0,2,0V8h2.78L14,16.8A1,1,0,0,0,14.8,18l.2,0a1,1,0,0,0,1-.8l2-10a1,1,0,0,0-.21-.83A1,1,0,0,0,17,6H12A1,1,0,0,0,11,7Zm7-2h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM7,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,7,7ZM21.6,9a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9Z"/></svg>',
                ),
                array(
                    'keys' => '18-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM7,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,7,7ZM21.6,9a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9ZM11,9v1a3,3,0,0,0,.78,2A3,3,0,0,0,11,14v1a3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V14a3,3,0,0,0-.78-2A3,3,0,0,0,18,10V9a3,3,0,0,0-3-3H14A3,3,0,0,0,11,9Zm5,6a1,1,0,0,1-1,1H14a1,1,0,0,1-1-1V14a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1Zm0-6v1a1,1,0,0,1-1,1H14a1,1,0,0,1-1-1V9a1,1,0,0,1,1-1h1A1,1,0,0,1,16,9Z"/></svg>',
                ),
                array(
                    'keys' => '21-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,18a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0V17A1,1,0,0,0,17,18ZM18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2Zm3.6,4a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9ZM10,13h1a3,3,0,0,0,3-3V9a3,3,0,0,0-3-3H10A3,3,0,0,0,7,9,1,1,0,0,0,9,9a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1H10a3,3,0,0,0-3,3v3a1,1,0,0,0,1,1h5a1,1,0,0,0,0-2H9V14A1,1,0,0,1,10,13Z"/></svg>',
                ),
                array(
                    'keys' => '3-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM15.5,9a3,3,0,0,0-3-3h-1a3,3,0,0,0-3,3,1,1,0,0,0,2,0,1,1,0,0,1,1-1h1a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1H12a1,1,0,0,0,0,2h.5a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1h-1a1,1,0,0,1-1-1,1,1,0,0,0-2,0,3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V14a3,3,0,0,0-.78-2,3,3,0,0,0,.78-2Zm6.1,0a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9Z"/></svg>',
                ),
                array(
                    'keys' => '500px',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7,15.14a1.41,1.41,0,0,0,.17.44,6.28,6.28,0,0,0,1.39,2.08,6.67,6.67,0,0,0,2.09,1.4,6.21,6.21,0,0,0,2.54.52,6.29,6.29,0,0,0,2.55-.52,6.63,6.63,0,0,0,2.08-1.4,6.39,6.39,0,0,0,1.41-2.08A6.55,6.55,0,0,0,19.69,13a6.76,6.76,0,0,0-.51-2.56,6.35,6.35,0,0,0-1.41-2.07,6.46,6.46,0,0,0-4.63-1.92A6.63,6.63,0,0,0,10.56,7a7.09,7.09,0,0,0-1.2.68,7.14,7.14,0,0,0-1.14.94h0V3.23h9.05c.22,0,.34-.21.34-.62S17.48,2,17.26,2H7.47a.37.37,0,0,0-.3.13.4.4,0,0,0-.12.29V10a.39.39,0,0,0,.17.3,1.09,1.09,0,0,0,.41.18.73.73,0,0,0,.43,0,.92.92,0,0,0,.24-.11,1,1,0,0,0,.14-.17l0,0a6.9,6.9,0,0,1,.86-1,5.15,5.15,0,0,1,3.79-1.56A5.15,5.15,0,0,1,16.9,9.25,5.17,5.17,0,0,1,18.48,13a5.31,5.31,0,0,1-.41,2A5.36,5.36,0,0,1,15.17,18a5.4,5.4,0,0,1-2.06.4,5.09,5.09,0,0,1-2.7-.75V13a2.66,2.66,0,0,1,.71-1.79,2.53,2.53,0,0,1,2-.89,2.65,2.65,0,0,1,2,.79A2.55,2.55,0,0,1,15.87,13a2.73,2.73,0,0,1-2.77,2.74l-.34,0-.37-.07-.15,0c-.21-.06-.37.1-.49.48s-.07.6.14.68a4.34,4.34,0,0,0,1.25.18,3.84,3.84,0,0,0,2.8-1.16A3.81,3.81,0,0,0,17.1,13a3.73,3.73,0,0,0-1.16-2.78,3.8,3.8,0,0,0-2.8-1.15,3.86,3.86,0,0,0-2.82,1.15,3.57,3.57,0,0,0-1.14,2.59v3.8h0a5.63,5.63,0,0,1-1.08-1.86c-.08-.21-.3-.25-.67-.13s-.55.29-.48.49Zm6.25-11a8.16,8.16,0,0,0-3.34.64A.25.25,0,0,0,9.68,5a1.26,1.26,0,0,0,.09.43c.14.35.3.48.5.41a8.09,8.09,0,0,1,2.93-.55,7.54,7.54,0,0,1,3.08.63A8.67,8.67,0,0,1,18.59,7.4a.25.25,0,0,0,.18.08c.09,0,.24-.1.43-.29L19.39,7a.37.37,0,0,0,.06-.21.3.3,0,0,0-.1-.2,8.62,8.62,0,0,0-2.62-1.69A9,9,0,0,0,13.2,4.14Zm-1.61,9.91a.46.46,0,0,0,.2.33l0,0a.52.52,0,0,0,.35.18.24.24,0,0,0,.17-.06l.73-.73.7.68a.28.28,0,0,0,.21.11.58.58,0,0,0,.36-.19c.2-.21.23-.39.07-.55l-.7-.7.74-.74c.12-.12.08-.29-.13-.49s-.4-.27-.53-.14l-.73.72-.72-.74a.3.3,0,0,0-.15-.05.56.56,0,0,0-.34.2c-.23.22-.28.38-.16.5l.74.74-.74.72A.35.35,0,0,0,11.59,14.05Zm7.93,4.57a1.24,1.24,0,0,0-.37-.25.28.28,0,0,0-.28.07l-.07.07a8,8,0,0,1-2.51,1.69,7.94,7.94,0,0,1-8.68-1.69A7.48,7.48,0,0,1,5.91,16a9.33,9.33,0,0,1-.51-1.77.1.1,0,0,0,0,0c0-.21-.25-.29-.63-.23s-.56.2-.53.4a8.52,8.52,0,0,0,.6,2.11,8.84,8.84,0,0,0,2,2.88,9,9,0,0,0,2.89,2,9.13,9.13,0,0,0,3.54.71,9.28,9.28,0,0,0,3.54-.71,9,9,0,0,0,2.89-2l.06-.06C19.85,19.11,19.78,18.89,19.52,18.62Z"/></svg>',
                ),
                array(
                    'keys' => '6-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,5h1V6a1,1,0,0,0,2,0V5h1a1,1,0,0,0,0-2H21V2a1,1,0,0,0-2,0V3H18a1,1,0,0,0,0,2ZM11.5,8h1a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3h-1a3,3,0,0,0-3,3v6a3,3,0,0,0,3,3h1a3,3,0,0,0,3-3V14a3,3,0,0,0-3-3h-2V9A1,1,0,0,1,11.5,8Zm1,5a1,1,0,0,1,1,1v1a1,1,0,0,1-1,1h-1a1,1,0,0,1-1-1V13Zm9.1-4a1,1,0,0,0-.78,1.18,9,9,0,1,1-7-7,1,1,0,1,0,.4-2A10.8,10.8,0,0,0,12,1,11,11,0,1,0,23,12a10.8,10.8,0,0,0-.22-2.2A1,1,0,0,0,21.6,9Z"/></svg>',
                ),
                array(
                    'keys' => 'abacus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,2a1,1,0,0,0-1,1V6H16V5a1,1,0,0,0-2,0V6H12V5a1,1,0,0,0-2,0V6H8V5A1,1,0,0,0,6,5V6H4V3A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V3A1,1,0,0,0,21,2ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V16H6v1a1,1,0,0,0,2,0V16h2v1a1,1,0,0,0,2,0V16h4v1a1,1,0,0,0,2,0V16h2Zm0-5H18V13a1,1,0,0,0-2,0v1H12V13a1,1,0,0,0-2,0v1H8V13a1,1,0,0,0-2,0v1H4V8H6V9A1,1,0,0,0,8,9V8h2V9a1,1,0,0,0,2,0V8h2V9a1,1,0,0,0,2,0V8h4Z"/></svg>',
                ),
                array(
                    'keys' => 'accessible-icon-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,7a2,2,0,1,0-2-2A2,2,0,0,0,16,7ZM12.7,18.4A4,4,0,1,1,9.05,12a1,1,0,1,0-.22-2A6,6,0,0,0,9.5,22a6,6,0,0,0,4.8-2.4,1,1,0,0,0-1.6-1.2ZM19.5,20h-1V15a1,1,0,0,0-1-1H12.93l1.69-4.66s0-.07,0-.11l0-.2a1.1,1.1,0,0,0,0-.18,1.06,1.06,0,0,0,0-.19,1.4,1.4,0,0,0-.09-.17.72.72,0,0,0-.11-.15.64.64,0,0,0-.15-.13s0-.06-.08-.08L9.71,5.55l-.12,0a1.06,1.06,0,0,0-.19-.06H9a.8.8,0,0,0-.2.07l-.11,0L6,7.13A1,1,0,0,0,6.48,9,1,1,0,0,0,7,8.87l2.23-1.3,3.24,1.88-1.89,5.21a.88.88,0,0,0,0,.16.58.58,0,0,0,0,.18,0,0,0,0,0,0,0,3,3,0,0,0,.08.38l.11.15a.57.57,0,0,0,.11.16.67.67,0,0,0,.14.09,1.22,1.22,0,0,0,.19.12h0a1,1,0,0,0,.34.06h5v5a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'adjust-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.83,7.32h0a.2.2,0,0,0,0-.08,10,10,0,0,0-3.38-3.65l0,0h0A9.89,9.89,0,0,0,12,2a1,1,0,0,0-1,1V21a1,1,0,0,0,1,1h.28A10,10,0,0,0,20.83,7.32ZM13,4.06a8,8,0,0,1,2.49.74L13,9.12Zm0,9.06L17.17,5.9a7.89,7.89,0,0,1,1.58,1.83L13,17.69Zm1.16,6.57L19.75,10A8.36,8.36,0,0,1,20,12,7.94,7.94,0,0,1,14.16,19.69Z"/></svg>',
                ),
                array(
                    'keys' => 'adjust-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,7A7.74,7.74,0,1,0,7,17,7.74,7.74,0,1,0,17,7Zm-1.6,1.6a6.12,6.12,0,0,1,.11,1.14,5.92,5.92,0,0,1-.16,1.34L12.91,8.66a5.92,5.92,0,0,1,1.34-.16A6.12,6.12,0,0,1,15.39,8.61ZM14.46,13A6,6,0,0,1,13,14.46L9.54,11A6,6,0,0,1,11,9.54Zm-8,1.46a5.75,5.75,0,1,1,8-8h-.25A7.76,7.76,0,0,0,6.5,14.25C6.5,14.33,6.51,14.42,6.51,14.5Zm2.1.89a6.12,6.12,0,0,1-.11-1.14,5.92,5.92,0,0,1,.16-1.34l2.43,2.43a5.92,5.92,0,0,1-1.34.16A6.12,6.12,0,0,1,8.61,15.39ZM14.25,20A5.77,5.77,0,0,1,9.5,17.49h.25A7.76,7.76,0,0,0,17.5,9.75c0-.08,0-.17,0-.25A5.75,5.75,0,0,1,14.25,20Z"/></svg>',
                ),
                array(
                    'keys' => 'adjust-half',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.83,7.32h0a10.11,10.11,0,0,0-3.44-3.73l0,0h0A10,10,0,1,0,12,22h.29A10,10,0,0,0,20.83,7.32ZM11,19.93A8,8,0,0,1,11,4.07ZM13,4.07a8.07,8.07,0,0,1,2.49.74L13,9.12Zm0,9L17.17,5.9a8.14,8.14,0,0,1,1.58,1.83L13,17.69Zm1.15,6.58L19.74,10A8.16,8.16,0,0,1,20,12,8,8,0,0,1,14.15,19.7Z"/></svg>',
                ),
                array(
                    'keys' => 'adjust',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM11,19.93A8,8,0,0,1,11,4.07Zm2,0V4.07a8,8,0,0,1,0,15.86Z"/></svg>',
                ),
                array(
                    'keys' => 'adobe-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.24707,2.40278a.99893.99893,0,0,0-.83057-.44336H1.9917a.99974.99974,0,0,0-1,1v18.082a1.00015,1.00015,0,0,0,1.92529.37989l7.42481-18.082A1.00042,1.00042,0,0,0,10.24707,2.40278ZM2.9917,15.97309V3.95942H7.9248Zm19-14.01367H14.47412a1,1,0,0,0-.92139,1.3877l7.51758,17.84961a.99894.99894,0,0,0,.9209.6123,1.04879,1.04879,0,0,0,.19824-.01953,1.001,1.001,0,0,0,.80225-.98047V2.95942A.99974.99974,0,0,0,21.9917,1.95942Zm-1,13.89844L15.98047,3.95942H20.9917ZM12.94922,9.52a.99993.99993,0,0,0-.92578-.64648h-.00977a.99988.99988,0,0,0-.92822.62793L8.02637,17.13227a1,1,0,0,0,.92822,1.37207H11.209l1.52247,2.99024a.999.999,0,0,0,.89111.54687h2.61279a1.00015,1.00015,0,0,0,.93555-1.35351Zm1.28662,10.52148-1.52246-2.99023a.99905.99905,0,0,0-.89111-.54688H10.43262l1.55371-3.875,2.80176,7.41211Z"/></svg>',
                ),
                array(
                    'keys' => 'adobe',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.07,17.28h2.78l1.75,3.44h2.54L12,9.87ZM2,3V21L9.42,3ZM14.48,3,22,20.81V3Z"/></svg>',
                ),
                array(
                    'keys' => 'airplay',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.83,13.45a1,1,0,0,0-1.66,0l-4,6a1,1,0,0,0,0,1A1,1,0,0,0,8,21h8a1,1,0,0,0,.88-.53,1,1,0,0,0-.05-1ZM9.87,19,12,15.8,14.13,19ZM19,3H5A3,3,0,0,0,2,6v9a3,3,0,0,0,3,3h.85a1,1,0,1,0,0-2H5a1,1,0,0,1-1-1V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1v9a1,1,0,0,1-1,1h-.85a1,1,0,0,0,0,2H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Z"/></svg>',
                ),
                array(
                    'keys' => 'align-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,11H3a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2Zm0,8H3a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2ZM14,5h7a1,1,0,0,0,0-2H14a1,1,0,0,0,0,2ZM10,7H3A1,1,0,0,0,3,9h7a1,1,0,0,0,0-2Zm0,8H3a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2ZM10,3H7A1,1,0,0,0,7,5h3a1,1,0,0,0,0-2ZM21,7H14a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2Zm0,4H14a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2Zm-4,8H14a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Zm4-4H14a1,1,0,0,0,0,2h7a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-center-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,8H19a1,1,0,0,0,0-2H5A1,1,0,0,0,5,8Zm16,3H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-2,5H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-center-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,11.62a1,1,0,0,0-.21-.33l-2.5-2.5a1,1,0,0,0-1.42,1.42l.8.79H16a1,1,0,0,0,0,2h2.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33A1,1,0,0,0,21.92,11.62ZM8,11H5.41l.8-.79A1,1,0,0,0,4.79,8.79l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H8a1,1,0,0,0,0-2Zm4-4a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V8A1,1,0,0,0,12,7Z"/></svg>',
                ),
                array(
                    'keys' => 'align-center-justify',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,15H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3,5H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,5ZM17,19H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2ZM21,7H3A1,1,0,0,0,3,9H21a1,1,0,0,0,0-2Zm0,4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-center-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.21,6.21l.79-.8V8a1,1,0,0,0,2,0V5.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42ZM16,11H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm-2.21,6.79-.79.8V16a1,1,0,0,0-2,0v2.59l-.79-.8a1,1,0,0,0-1.42,1.42l2.5,2.5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'align-center',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7ZM7,9a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm14,4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-justify',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7ZM21,17H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-left-justify',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,5H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,5ZM15,19H3a1,1,0,0,0,0,2H15a1,1,0,0,0,0-2Zm6-8H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-4H3A1,1,0,0,0,3,9H21a1,1,0,0,0,0-2Zm0,8H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7Zm0,4H17a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Zm18,2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-4,4H3a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-letter-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,4H21a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM21,6H3A1,1,0,0,0,3,8H21a1,1,0,0,0,0-2Zm0,10H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-6H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-right-justify',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,5H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,5ZM21,19H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-8H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0,4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-8H3A1,1,0,0,0,3,9H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7ZM21,17H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-8H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0,4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'align',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,15H13a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Zm0-4H13a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2ZM3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7ZM21,17H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM19.64,9.57a1,1,0,1,0-1.28,1.53l1.08.9-1.08.9a1,1,0,0,0-.13,1.41,1,1,0,0,0,.77.36,1,1,0,0,0,.64-.24l2-1.66a1,1,0,0,0,0-1.54Z"/></svg>',
                ),
                array(
                    'keys' => 'amazon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M1.04,17.52q.1-.16.32-.02a21.3078,21.3078,0,0,0,10.88,2.9,21.52431,21.52431,0,0,0,7.74-1.46q.1-.04.29-.12t.27-.12a.35611.35611,0,0,1,.47.12q.17.24-.11.44-.36.26-.92.6a14.99023,14.99023,0,0,1-3.84,1.58A16.1749,16.1749,0,0,1,12,22a16.01714,16.01714,0,0,1-5.9-1.09,16.24638,16.24638,0,0,1-4.98-3.07.273.273,0,0,1-.12-.2A.215.215,0,0,1,1.04,17.52Zm6.02-5.7a4.03628,4.03628,0,0,1,.68-2.36A4.19676,4.19676,0,0,1,9.6,7.98a10.06288,10.06288,0,0,1,2.66-.66q.54-.06,1.76-.16V6.82a3.56151,3.56151,0,0,0-.28-1.72,1.49917,1.49917,0,0,0-1.32-.6h-.16a2.18852,2.18852,0,0,0-1.14.42,1.63936,1.63936,0,0,0-.62,1,.50779.50779,0,0,1-.4.46L7.8,6.1q-.34-.08-.34-.36a.58734.58734,0,0,1,.02-.14A3.83352,3.83352,0,0,1,9.15,2.96,6.26811,6.26811,0,0,1,12.26,2h.5a5.05441,5.05441,0,0,1,3.56,1.18,3.81,3.81,0,0,1,.37.43,3.8746,3.8746,0,0,1,.27.41,2.09844,2.09844,0,0,1,.18.52q.08.34.12.47a2.85611,2.85611,0,0,1,.06.56q.02.43.02.51v4.84a2.86841,2.86841,0,0,0,.15.95,2.47465,2.47465,0,0,0,.29.62q.14.19.46.61a.59856.59856,0,0,1,.12.32.346.346,0,0,1-.16.28q-1.66,1.44-1.8,1.56a.557.557,0,0,1-.58.04q-.28-.24-.49-.46t-.3-.32a4.46629,4.46629,0,0,1-.29-.39q-.2-.29-.28-.39a4.91083,4.91083,0,0,1-2.2,1.52,6.03757,6.03757,0,0,1-1.68.2,3.50454,3.50454,0,0,1-2.53-.95A3.553,3.553,0,0,1,7.06,11.82Zm3.44-.4a1.89505,1.89505,0,0,0,.39,1.25,1.29375,1.29375,0,0,0,1.05.47,1.022,1.022,0,0,0,.17-.02,1.02168,1.02168,0,0,1,.15-.02,2.03262,2.03262,0,0,0,1.3-1.08,3.13045,3.13045,0,0,0,.33-.83,3.80062,3.80062,0,0,0,.12-.73q.01-.28.01-.92v-.5a7.28689,7.28689,0,0,0-1.76.16A2.1441,2.1441,0,0,0,10.5,11.42Zm8.4,6.44a.62647.62647,0,0,1,.12-.16,3.13921,3.13921,0,0,1,.96-.46,6.52032,6.52032,0,0,1,1.48-.22,1.19457,1.19457,0,0,1,.38.02q.9.08,1.08.3a.65471.65471,0,0,1,.08.36v.14a4.55955,4.55955,0,0,1-.38,1.65,3.84046,3.84046,0,0,1-1.06,1.53.302.302,0,0,1-.18.08.17736.17736,0,0,1-.08-.02q-.12-.06-.06-.22a7.63215,7.63215,0,0,0,.74-2.42.51274.51274,0,0,0-.08-.32q-.2-.24-1.12-.24-.34,0-.8.04-.5.06-.92.12A.23166.23166,0,0,1,18.9,18a.06531.06531,0,0,1-.02-.08A.15332.15332,0,0,1,18.9,17.86Z"/></svg>',
                ),
                array(
                    'keys' => 'ambulance',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.5,9.5h-1v-1a1,1,0,0,0-2,0v1h-1a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm12.43,2.15-.06-.11a.61.61,0,0,0-.07-.14L20.4,8.2A3,3,0,0,0,18,7H16V6a3,3,0,0,0-3-3H4A3,3,0,0,0,1,6V17a1,1,0,0,0,1,1H3a3,3,0,0,0,6,0h6a3,3,0,0,0,6,0h1a1,1,0,0,0,1-1V12A1,1,0,0,0,22.93,11.65ZM6,19a1,1,0,1,1,1-1A1,1,0,0,1,6,19Zm8-3H8.22a3,3,0,0,0-4.44,0H3V6A1,1,0,0,1,4,5h9a1,1,0,0,1,1,1Zm2-7h2a1,1,0,0,1,.8.4L20,11H16Zm2,10a1,1,0,1,1,1-1A1,1,0,0,1,18,19Zm3-3h-.78A3,3,0,0,0,16,15.78V13h5Z"/></svg>',
                ),
                array(
                    'keys' => 'analysis',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,7.29a1,1,0,0,0-1.42,0L14,13.59,9.71,9.29a1,1,0,0,0-1.42,0l-6,6a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L9,11.41l4.29,4.3a1,1,0,0,0,1.42,0l7-7A1,1,0,0,0,21.71,7.29Z"/></svg>',
                ),
                array(
                    'keys' => 'analytics',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,12a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V13A1,1,0,0,0,5,12ZM10,2A1,1,0,0,0,9,3V21a1,1,0,0,0,2,0V3A1,1,0,0,0,10,2ZM20,16a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V17A1,1,0,0,0,20,16ZM15,8a1,1,0,0,0-1,1V21a1,1,0,0,0,2,0V9A1,1,0,0,0,15,8Z"/></svg>',
                ),
                array(
                    'keys' => 'anchor',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,13H17a1,1,0,0,0,0,2h.91A6,6,0,0,1,13,19.91V11h1a1,1,0,0,0,0-2H13V7.82a3,3,0,1,0-2,0V9H10a1,1,0,0,0,0,2h1v8.91A6,6,0,0,1,6.09,15H7a1,1,0,0,0,0-2H5a1,1,0,0,0-1,1,8,8,0,0,0,16,0A1,1,0,0,0,19,13ZM12,6a1,1,0,1,1,1-1A1,1,0,0,1,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'android-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M2.9917,9.00044a.99973.99973,0,0,0-1,1v4a1,1,0,0,0,2,0v-4A.99973.99973,0,0,0,2.9917,9.00044Zm18,0a.99973.99973,0,0,0-1,1v4a1,1,0,0,0,2,0v-4A.99973.99973,0,0,0,20.9917,9.00044Zm-4.13428-5.5a.99974.99974,0,1,0-1.73144-1l-.61414,1.06238a5.92782,5.92782,0,0,0-5.04028,0L8.85742,2.50044a.99974.99974,0,1,0-1.73144,1l.6925,1.19794A5.97889,5.97889,0,0,0,5.9917,9.00044v8a.99974.99974,0,0,0,1,1h2v3a1,1,0,0,0,2,0v-3h2v3a1,1,0,0,0,2,0v-3h2a.99974.99974,0,0,0,1-1v-8a5.97889,5.97889,0,0,0-1.82678-4.30206Zm-.86572,12.5h-8v-5h8Zm-8-7a4,4,0,0,1,8,0Z"/></svg>',
                ),
                array(
                    'keys' => 'android-phone-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.29,17.71a1,1,0,0,0,1.42,0,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76,1.15,1.15,0,0,0-.21-.33,1,1,0,0,0-1.42,0,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76A1.15,1.15,0,0,0,11.29,17.71ZM8.66,4H16a1,1,0,0,1,1,1v7.34a1,1,0,0,0,2,0V5a3,3,0,0,0-3-3H8.66a1,1,0,0,0,0,2ZM21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71L5,6.41V19a3,3,0,0,0,3,3h8a3,3,0,0,0,2.76-1.83l1.53,1.54a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM17,19a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8.41l10,10Z"/></svg>',
                ),
                array(
                    'keys' => 'android',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.97535,3.01886l.95982-1.73159a.19342.19342,0,0,0-.33833-.18756l-.97045,1.75078a6.54141,6.54141,0,0,0-5.25275,0L8.40316,1.09971a.19342.19342,0,0,0-.33833.18756l.95985,1.7316A5.54614,5.54614,0,0,0,5.93152,7.89522h12.137A5.54615,5.54615,0,0,0,14.97535,3.01886ZM9.19911,5.67446a.5068.5068,0,1,1,.5068-.5068A.50737.50737,0,0,1,9.19911,5.67446Zm5.60178,0a.5068.5068,0,1,1,.5068-.5068A.50737.50737,0,0,1,14.80089,5.67446Zm-8.86946,11.497a1.46713,1.46713,0,0,0,1.46713,1.46713h.9736v3.00095a1.36046,1.36046,0,1,0,2.72091,0V18.63859h1.81386v3.00095a1.36046,1.36046,0,1,0,2.72091,0V18.63859h.97364a1.46713,1.46713,0,0,0,1.46713-1.46713V8.37532H5.93143ZM4.06415,8.14191A1.362,1.362,0,0,0,2.7037,9.50237v5.66846a1.36046,1.36046,0,1,0,2.72091,0V9.50237A1.362,1.362,0,0,0,4.06415,8.14191Zm15.8717,0a1.362,1.362,0,0,0-1.36046,1.36046v5.66846a1.36046,1.36046,0,1,0,2.72091,0V9.50237A1.362,1.362,0,0,0,19.93585,8.14191Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-double-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,11.46a1,1,0,0,0,1.42,0l3-3A1,1,0,1,0,14.29,7L12,9.34,9.71,7A1,1,0,1,0,8.29,8.46Zm3,1.08L12,14.84l-2.29-2.3A1,1,0,0,0,8.29,14l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-double-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.46,8.29a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.16,12l2.3-2.29A1,1,0,0,0,11.46,8.29ZM14.66,12,17,9.71a1,1,0,0,0-1.42-1.42l-3,3a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-double-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.46,8.29A1,1,0,1,0,7,9.71L9.34,12,7,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,0-1.42Zm8.5,3-3-3a1,1,0,0,0-1.42,1.42L14.84,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3A1,1,0,0,0,17,11.29Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-double-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,12.54a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,17L12,14.66,14.29,17a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-3-1.08L12,9.16l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-left-b',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,12.8l5.7,5.6c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0c0.4-0.4,0.4-1,0-1.4l-4.9-5l4.9-5c0.4-0.4,0.4-1,0-1.4c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.5,0.1-0.7,0.3l-5.7,5.6C8.1,11.7,8.1,12.3,8.5,12.8C8.5,12.7,8.5,12.7,8.5,12.8z"/></svg>',
                ),
                array(
                    'keys' => 'angle-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,12l3.54-3.54a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L9.17,11.29a1,1,0,0,0,0,1.42L13.41,17a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-right-b',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.54,11.29,9.88,5.64a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.95,5L8.46,17a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l5.66-5.65A1,1,0,0,0,15.54,11.29Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.83,11.29,10.59,7.05a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41L12.71,12,9.17,15.54a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l4.24-4.24A1,1,0,0,0,14.83,11.29Z"/></svg>',
                ),
                array(
                    'keys' => 'angle-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/></svg>',
                ),
                array(
                    'keys' => 'angry',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10,11a1,1,0,0,0,.89-.55,1,1,0,0,0-.44-1.34l-2-1a1,1,0,1,0-.9,1.78l2,1A.93.93,0,0,0,10,11Zm2-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM8.36,15.33a1,1,0,0,0-.13,1.4,1,1,0,0,0,1.41.13,3.76,3.76,0,0,1,4.72,0,1,1,0,0,0,.64.23,1,1,0,0,0,.64-1.76A5.81,5.81,0,0,0,8.36,15.33Zm7.19-7.22-2,1a1,1,0,0,0-.44,1.34A1,1,0,0,0,14,11a.93.93,0,0,0,.45-.11l2-1a1,1,0,0,0-.9-1.78Z"/></svg>',
                ),
                array(
                    'keys' => 'ankh',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,12H14.91A7.23,7.23,0,0,0,17,7,5,5,0,0,0,7,7a7.23,7.23,0,0,0,2.09,5H6a1,1,0,0,0,0,2h5v7a1,1,0,0,0,2,0V14h5a1,1,0,0,0,0-2Zm-6-.16C11.07,11.22,9,9.58,9,7a3,3,0,0,1,6,0C15,9.58,12.93,11.23,12,11.84Z"/></svg>',
                ),
                array(
                    'keys' => 'annoyed-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.66,13.56l-4.19,1.5A1,1,0,0,0,10.8,17a1,1,0,0,0,.34-.06l4.2-1.5a1,1,0,1,0-.68-1.88Zm-4-5a1,1,0,0,0-1.41,0,1,1,0,0,1-1.42,0,1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42,3,3,0,0,0,4.24,0A1,1,0,0,0,10.62,8.54Zm7,0a1,1,0,0,0-1.41,0,1,1,0,0,1-1.42,0,1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42,3,3,0,0,0,4.24,0A1,1,0,0,0,17.62,8.54ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'annoyed',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,9a1,1,0,1,0,1,1A1,1,0,0,0,9,9Zm6,4a5,5,0,0,0-4.37,2.57A1,1,0,0,0,11,16.93a1,1,0,0,0,.49.13,1,1,0,0,0,.87-.51A3,3,0,0,1,15,15a1,1,0,0,0,0-2Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'apple-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.50439,15.7436a3.38641,3.38641,0,0,1-2.05468-3.127,3.49747,3.49747,0,0,1,1.6875-2.94629.99994.99994,0,0,0,.2998-1.415A5.57386,5.57386,0,0,0,16.4209,5.86958,6.422,6.422,0,0,0,17.38574,1.893a.98411.98411,0,0,0-1.0332-.8916,6.69083,6.69083,0,0,0-4.44336,2.26074,6.84216,6.84216,0,0,0-1.47949,2.89941,5.2637,5.2637,0,0,0-1.62012-.27734A5.92528,5.92528,0,0,0,3.81885,8.892c-1.8877,3.27734-.73291,8.18848,1.312,11.14453.82031,1.18457,2.05127,2.96289,3.9082,2.96289.03662,0,.07373,0,.11084-.002a4.74,4.74,0,0,0,1.79248-.46387,3.274,3.274,0,0,1,1.44532-.35351,3.04472,3.04472,0,0,1,1.35742.33789,4.75244,4.75244,0,0,0,1.96191.45605c1.91309-.03613,3.043-1.68652,3.86817-2.89258a12.04214,12.04214,0,0,0,1.51269-3.1084A1.00325,1.00325,0,0,0,20.50439,15.7436ZM13.42334,4.56782a4.94131,4.94131,0,0,1,1.91943-1.32226,4.85545,4.85545,0,0,1-1.03662,2.15136A4.39075,4.39075,0,0,1,13.042,6.437l-.00293.001c-.02832.01172-.05664.02246-.085.03418-.18652.07324-.417.16406-.59472.22265A4.825,4.825,0,0,1,13.42334,4.56782ZM17.9248,18.95259c-.80371,1.17383-1.436,2.00683-2.25439,2.02148a2.36658,2.36658,0,0,1-1.13135-.292,4.96942,4.96942,0,0,0-2.15136-.502,5.21424,5.21424,0,0,0-2.22852.51269,2.88493,2.88493,0,0,1-1.08594.30664H9.04346c-.813,0-1.6875-1.26269-2.26807-2.10156-1.45264-2.09961-2.79248-6.2832-1.22314-9.00781A3.917,3.917,0,0,1,8.84277,7.88423l.03369-.001a4.75808,4.75808,0,0,1,1.64112.44434c.13135.05175.26074.10351.38916.15136.03271.01368.0664.02637.10058.03711a3.31547,3.31547,0,0,0,1.11719.23731,4.436,4.436,0,0,0,1.564-.4209,4.95643,4.95643,0,0,1,2.22265-.49707,3.787,3.787,0,0,1,2.25049.85352,5.31025,5.31025,0,0,0-1.71191,3.94531v.001a5.30031,5.30031,0,0,0,2.45117,4.50293A10.19829,10.19829,0,0,1,17.9248,18.95259Z"/></svg>',
                ),
                array(
                    'keys' => 'apple',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.94,5.19A4.38,4.38,0,0,0,16,2,4.44,4.44,0,0,0,13,3.52,4.17,4.17,0,0,0,12,6.61,3.69,3.69,0,0,0,14.94,5.19Zm2.52,7.44a4.51,4.51,0,0,1,2.16-3.81,4.66,4.66,0,0,0-3.66-2c-1.56-.16-3,.91-3.83.91s-2-.89-3.3-.87A4.92,4.92,0,0,0,4.69,9.39C2.93,12.45,4.24,17,6,19.47,6.8,20.68,7.8,22.05,9.12,22s1.75-.82,3.28-.82,2,.82,3.3.79,2.22-1.24,3.06-2.45a11,11,0,0,0,1.38-2.85A4.41,4.41,0,0,1,17.46,12.63Z"/></svg>',
                ),
                array(
                    'keys' => 'apps',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/></svg>',
                ),
                array(
                    'keys' => 'archive-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,13h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2ZM19,3H5A3,3,0,0,0,4,8.82V18a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V8.82A3,3,0,0,0,19,3ZM18,18a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V9H18ZM19,7H5A1,1,0,0,1,5,5H19a1,1,0,0,1,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'archive',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,14h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2ZM19,3H5A3,3,0,0,0,2,6V9a1,1,0,0,0,1,1H4v8a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V10h1a1,1,0,0,0,1-1V6A3,3,0,0,0,19,3ZM18,18a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V10H18ZM20,8H4V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'archway',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,20H21V8h1a1,1,0,0,0,0-2H21V3a1,1,0,0,0-1-1H4A1,1,0,0,0,3,3V6H2A1,1,0,0,0,2,8H3V20H2a1,1,0,0,0,0,2H22a1,1,0,0,0,0-2Zm-7,0H9V16.47a6.21,6.21,0,0,1,3-5.33,6.21,6.21,0,0,1,3,5.33Zm4,0H17V16.47a8.17,8.17,0,0,0-4.55-7.36,1,1,0,0,0-.9,0A8.17,8.17,0,0,0,7,16.47V20H5V8H19ZM19,6H5V4H19Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-break',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,11H17a1,1,0,0,0,0-2H13V5.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42l.79-.8V9H7a1,1,0,0,0,0,2Zm10,2H7a1,1,0,0,0,0,2h4v3.59l-.79-.8a1,1,0,0,0-1.42,1.42l2.5,2.5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,0,0-1.42-1.42l-.79.8V15h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-circle-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,15.71a1,1,0,0,0,.33.21,1,1,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3a1,1,0,0,0-1.42-1.42L13,12.59V9a1,1,0,0,0-2,0v3.59l-1.29-1.3a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.42ZM12,22A10,10,0,1,0,2,12,10,10,0,0,0,12,22ZM12,4a8,8,0,1,1-8,8A8,8,0,0,1,12,4Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-circle-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29,11.29a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42-1.42L11.41,13H15a1,1,0,0,0,0-2H11.41l1.3-1.29a1,1,0,0,0,0-1.42,1,1,0,0,0-1.42,0ZM2,12A10,10,0,1,0,12,2,10,10,0,0,0,2,12Zm18,0a8,8,0,1,1-8-8A8,8,0,0,1,20,12Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-circle-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.71,12.71a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L12.59,11H9a1,1,0,0,0,0,2h3.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0ZM22,12A10,10,0,1,0,12,22,10,10,0,0,0,22,12ZM4,12a8,8,0,1,1,8,8A8,8,0,0,1,4,12Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-circle-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,8.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L11,11.41V15a1,1,0,0,0,2,0V11.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-compress-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,5a1,1,0,0,0-1,1V18a1,1,0,0,0,2,0V6A1,1,0,0,0,12,5Zm-1.29,6.29-2.5-2.5a1,1,0,1,0-1.42,1.42l.8.79H3a1,1,0,0,0,0,2H7.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,10.71,11.29ZM21,11H16.41l.8-.79a1,1,0,0,0-1.42-1.42l-2.5,2.5a1,1,0,0,0,0,1.42l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.8-.79H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-down-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,16H9.41l8.3-8.29a1,1,0,1,0-1.42-1.42L8,14.59V7A1,1,0,0,0,6,7V17a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,7,18H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-down-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,6a1,1,0,0,0-1,1v7.59L7.71,6.29A1,1,0,0,0,6.29,7.71L14.59,16H7a1,1,0,0,0,0,2H17a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,18,17V7A1,1,0,0,0,17,6Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.71,11.29a1,1,0,0,0-1.42,0L13,14.59V7a1,1,0,0,0-2,0v7.59l-3.29-3.3a1,1,0,0,0-1.42,1.42l5,5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l5-5A1,1,0,0,0,17.71,11.29Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-from-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,4A1,1,0,0,0,2,5V19a1,1,0,0,0,2,0V5A1,1,0,0,0,3,4Zm18.92,7.62a1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L18.59,11H7a1,1,0,0,0,0,2H18.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33A1,1,0,0,0,21.92,11.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-from-top',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.29,16.29,13,18.59V7a1,1,0,0,0-2,0V18.59l-2.29-2.3a1,1,0,1,0-1.42,1.42l4,4a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42ZM19,2H5A1,1,0,0,0,5,4H19a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-growth',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,6.62a1,1,0,0,0-.54-.54A1,1,0,0,0,21,6H16a1,1,0,0,0,0,2h2.59L13,13.59l-3.29-3.3a1,1,0,0,0-1.42,0l-6,6a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L9,12.41l3.29,3.3a1,1,0,0,0,1.42,0L20,9.41V12a1,1,0,0,0,2,0V7A1,1,0,0,0,21.92,6.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-random',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.7,10a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41L3.84,2.29A1,1,0,0,0,2.42,3.71ZM21,14a1,1,0,0,0-1,1v3.59L15.44,14A1,1,0,0,0,14,15.44L18.59,20H15a1,1,0,0,0,0,2h6a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V15A1,1,0,0,0,21,14Zm.92-11.38a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L2.29,20.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-resize-diagonal',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,2.62a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L4,18.59V15a1,1,0,0,0-2,0v6a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H9a1,1,0,0,0,0-2H5.41L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-to-bottom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,20H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Zm-7.71-2.29a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,0,0-2,0V14.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-to-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.71,11.29l-4-4a1,1,0,1,0-1.42,1.42L14.59,11H3a1,1,0,0,0,0,2H14.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76A1,1,0,0,0,17.71,11.29ZM21,4a1,1,0,0,0-1,1V19a1,1,0,0,0,2,0V5A1,1,0,0,0,21,4Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-up-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.41,8H17a1,1,0,0,0,0-2H7a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,6,7V17a1,1,0,0,0,2,0V9.41l8.29,8.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-up-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.92,6.62a1,1,0,0,0-.54-.54A1,1,0,0,0,17,6H7A1,1,0,0,0,7,8h7.59l-8.3,8.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L16,9.41V17a1,1,0,0,0,2,0V7A1,1,0,0,0,17.92,6.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.71,11.29l-5-5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-5,5a1,1,0,0,0,1.42,1.42L11,9.41V17a1,1,0,0,0,2,0V9.41l3.29,3.3a1,1,0,0,0,1.42,0A1,1,0,0,0,17.71,11.29Z"/></svg>',
                ),
                array(
                    'keys' => 'arrow',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.71,6.29a1,1,0,0,0-1.42,0l-5,5a1,1,0,0,0,0,1.42l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,12l4.3-4.29A1,1,0,0,0,9.71,6.29Zm11,5-5-5a1,1,0,0,0-1.42,1.42L18.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5A1,1,0,0,0,20.71,11.29Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-h-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,11.62a1,1,0,0,0-.21-.33l-2.5-2.5a1,1,0,0,0-1.42,1.42l.8.79H14a1,1,0,0,0,0,2h4.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33A1,1,0,0,0,21.92,11.62ZM10,11H5.41l.8-.79A1,1,0,0,0,4.79,8.79l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H10a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,11.62a1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L18.59,11H5.41l2.3-2.29A1,1,0,1,0,6.29,7.29l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H18.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33A1,1,0,0,0,21.92,11.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-left-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,16.29a1,1,0,0,0-1.42,0L18,18.59V9a3,3,0,0,0-3-3H5.41l2.3-2.29A1,1,0,0,0,6.29,2.29l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,8H15a1,1,0,0,1,1,1v9.59l-2.29-2.3a1,1,0,0,0-1.42,1.42l4,4a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4A1,1,0,0,0,21.71,16.29Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-maximize',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14a1,1,0,0,0-1,1v3.59L5.41,4H9A1,1,0,0,0,9,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V9A1,1,0,0,0,4,9V5.41L18.59,20H15a1,1,0,0,0,0,2h6a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V15A1,1,0,0,0,21,14Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-merge',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.71,11.29l-2.5-2.5a1,1,0,1,0-1.42,1.42l.8.79H4V7A1,1,0,0,0,2,7V17a1,1,0,0,0,2,0V13H7.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76A1,1,0,0,0,10.71,11.29ZM21,6a1,1,0,0,0-1,1v4H16.41l.8-.79a1,1,0,0,0-1.42-1.42l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.8-.79H20v4a1,1,0,0,0,2,0V7A1,1,0,0,0,21,6Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-resize-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,6A1,1,0,0,0,9,7v4H5.41l.8-.79A1,1,0,0,0,4.79,8.79l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H9v4a1,1,0,0,0,2,0V7A1,1,0,0,0,10,6Zm11.92,5.62a1,1,0,0,0-.21-.33l-2.5-2.5a1,1,0,0,0-1.42,1.42l.8.79H15V7a1,1,0,0,0-2,0V17a1,1,0,0,0,2,0V13h3.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33A1,1,0,0,0,21.92,11.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-resize-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,11H13V5.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42l.79-.8V11H8a1,1,0,0,0,0,2h3v5.59l-.79-.8a1,1,0,0,0-1.42,1.42l2.5,2.5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,0,0-1.42-1.42l-.79.8V13h3a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-resize',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,11.62a1,1,0,0,0-.21-.33l-2.5-2.5a1,1,0,0,0-1.42,1.42l.8.79H13V8a1,1,0,0,0-2,0v3H5.41l.8-.79A1,1,0,0,0,4.79,8.79l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H11v3a1,1,0,0,0,2,0V13h5.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33A1,1,0,0,0,21.92,11.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-right-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.92,6.62a1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L17.59,6H9A3,3,0,0,0,6,9v8.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3a1,1,0,0,0-1.42-1.42L8,17.59V9A1,1,0,0,1,9,8h8.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,.21-.33A1,1,0,0,0,20.92,6.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-shrink-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.71,11.29l-2.5-2.5a1,1,0,0,0-1.42,1.42l.8.79H9.41l.8-.79A1,1,0,0,0,8.79,8.79l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13h5.18l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76A1,1,0,0,0,17.71,11.29ZM3,6A1,1,0,0,0,2,7V17a1,1,0,0,0,2,0V7A1,1,0,0,0,3,6ZM21,6a1,1,0,0,0-1,1V17a1,1,0,0,0,2,0V7A1,1,0,0,0,21,6Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-shrink-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.79,10.21a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42l.79-.8v5.18l-.79-.8a1,1,0,0,0-1.42,1.42l2.5,2.5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,0,0-1.42-1.42l-.79.8V9.41ZM7,4H17a1,1,0,0,0,0-2H7A1,1,0,0,0,7,4ZM17,20H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-up-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.92,16.62a1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L17.59,16H9a1,1,0,0,1-1-1V6.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3A1,1,0,0,0,4.71,7.71L6,6.41V15a3,3,0,0,0,3,3h8.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,.21-.33A1,1,0,0,0,20.92,16.62Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-v-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.21,6.21l.79-.8V10a1,1,0,0,0,2,0V5.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42Zm3.58,11.58-.79.8V14a1,1,0,0,0-2,0v4.59l-.79-.8a1,1,0,0,0-1.42,1.42l2.5,2.5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'arrows-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.29,16.29,13,18.59V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71L11,5.41V18.59l-2.29-2.3a1,1,0,1,0-1.42,1.42l4,4a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'assistive-listening-systems',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,3a7,7,0,0,0-7,7,1,1,0,0,0,2,0,5,5,0,0,1,10,0,5.07,5.07,0,0,1-.71,2.57L11.73,20A2,2,0,0,1,10,21a2,2,0,0,1-2-2,1,1,0,0,0-2,0,4,4,0,0,0,4,4,4,4,0,0,0,3.5-2.07l3.56-7.43A6.93,6.93,0,0,0,18,10,7,7,0,0,0,11,3ZM4,15a1,1,0,1,0,1,1A1,1,0,0,0,4,15ZM17.59,1.2a1,1,0,1,0-1.2,1.6A9,9,0,0,1,20,10a1,1,0,0,0,2,0A11.06,11.06,0,0,0,17.59,1.2ZM11,9a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-6,0,3,3,0,0,0,.51,1.68,3.5,3.5,0,0,0,.47.54l.2.22a1,1,0,0,1,0,1.11,1,1,0,0,0,.25,1.39,1,1,0,0,0,.57.18,1,1,0,0,0,.82-.43,3,3,0,0,0,0-3.39,3.39,3.39,0,0,0-.35-.42l-.14-.14a1.37,1.37,0,0,1-.16-.18A1,1,0,0,1,10,10,1,1,0,0,1,11,9ZM7,15a1,1,0,1,0-1-1A1,1,0,0,0,7,15Z"/></svg>',
                ),
                array(
                    'keys' => 'asterisk',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.562,14.63379,14.00031,12,18.562,9.36621a1.00016,1.00016,0,0,0-1-1.73242L13,10.26776V5a1,1,0,0,0-2,0v5.26776l-4.562-2.634a1.00016,1.00016,0,0,0-1,1.73242L9.99969,12,5.438,14.63379a1.00016,1.00016,0,0,0,1,1.73242L11,13.73224V19a1,1,0,0,0,2,0V13.73224l4.562,2.634a1.00016,1.00016,0,0,0,1-1.73242Z"/></svg>',
                ),
                array(
                    'keys' => 'at',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2a10,10,0,1,0,5,18.66,1,1,0,1,0-1-1.73A8,8,0,1,1,20,12v.75a1.75,1.75,0,0,1-3.5,0V8.5a1,1,0,0,0-1-1,1,1,0,0,0-1,.79A4.45,4.45,0,0,0,12,7.5,4.5,4.5,0,1,0,15.3,15,3.74,3.74,0,0,0,22,12.75V12A10,10,0,0,0,12,2Zm0,12.5A2.5,2.5,0,1,1,14.5,12,2.5,2.5,0,0,1,12,14.5Z"/></svg>',
                ),
                array(
                    'keys' => 'atom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,11a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm7.62,1,.11-.14C21.08,10,21.4,8.29,20.66,7S18.26,5.14,16,5.37l-.18,0C14.91,3.3,13.56,2,12,2S9.09,3.3,8.19,5.4L8,5.37C5.74,5.14,4.08,5.71,3.34,7s-.42,3,.93,4.86l.11.14-.11.14C2.92,14,2.6,15.71,3.34,17,4,18.1,5.27,18.68,7,18.68c.31,0,.63,0,1-.05l.18,0C9.09,20.7,10.44,22,12,22s2.91-1.3,3.81-3.4l.18,0c.34,0,.66.05,1,.05,1.77,0,3.07-.58,3.7-1.68.74-1.29.42-3-.93-4.86ZM5.07,8c.25-.44,1-.68,2-.68l.49,0a14.78,14.78,0,0,0-.35,1.87,15,15,0,0,0-1.45,1.25C5,9.44,4.78,8.5,5.07,8Zm0,8c-.29-.5,0-1.44.67-2.47a15,15,0,0,0,1.45,1.25,14.94,14.94,0,0,0,.35,1.88C6.3,16.74,5.36,16.5,5.07,16ZM12,4c.56,0,1.23.66,1.8,1.83a17.6,17.6,0,0,0-1.8.63,17.6,17.6,0,0,0-1.8-.63C10.77,4.66,11.44,4,12,4Zm0,16c-.56,0-1.23-.66-1.8-1.83a17.6,17.6,0,0,0,1.8-.63,17.6,17.6,0,0,0,1.8.63C13.23,19.34,12.56,20,12,20Zm2.93-6.31c-.46.32-.93.62-1.43.91s-1,.55-1.5.78q-.75-.35-1.5-.78c-.5-.29-1-.59-1.43-.91C9,13.15,9,12.59,9,12s0-1.15.07-1.69c.46-.32.93-.62,1.43-.91s1-.55,1.5-.78q.75.35,1.5.78c.5.29,1,.59,1.43.91,0,.54.07,1.1.07,1.69S15,13.15,14.93,13.69Zm4,2.31c-.29.5-1.23.75-2.47.66a14.94,14.94,0,0,0,.35-1.88,15,15,0,0,0,1.45-1.25C19,14.56,19.22,15.5,18.93,16Zm-.67-5.53a15,15,0,0,0-1.45-1.25,14.78,14.78,0,0,0-.35-1.87l.49,0c1,0,1.73.24,2,.68S19,9.44,18.26,10.47Z"/></svg>',
                ),
                array(
                    'keys' => 'auto-flash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.87,8.6A1,1,0,0,0,17,8H12.42l1.27-4.74a1,1,0,0,0-.17-.87,1,1,0,0,0-.8-.39h-7a1,1,0,0,0-1,.74l-2.68,10a1,1,0,0,0,1,1.26H6.89L5.08,20.74a1,1,0,0,0,1.71.93l10.9-12A1,1,0,0,0,17.87,8.6ZM8.08,17.28l1.08-4A1,1,0,0,0,9,12.39,1,1,0,0,0,8.19,12H4.35L6.49,4h4.93L10.15,8.74a1,1,0,0,0,1,1.26h3.57ZM19,13H18a3,3,0,0,0-3,3v5a1,1,0,0,0,2,0V19h3v2a1,1,0,0,0,2,0V16A3,3,0,0,0,19,13Zm1,4H17V16a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'award-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,1A7,7,0,0,0,7,12.89V22a1,1,0,0,0,1.45.89L12,21.12l3.55,1.77A1,1,0,0,0,16,23a1,1,0,0,0,.53-.15A1,1,0,0,0,17,22V12.89A7,7,0,0,0,12,1Zm3,19.38-2.55-1.27a1,1,0,0,0-.9,0L9,20.38V14.32a7,7,0,0,0,2,.6V16a1,1,0,0,0,2,0V14.92a7,7,0,0,0,2-.6ZM12,13a5,5,0,1,1,5-5A5,5,0,0,1,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'award',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.87,17.25l-2.71-4.68A6.9,6.9,0,0,0,19,9.25a7,7,0,0,0-14,0,6.9,6.9,0,0,0,.84,3.32L3.13,17.25A1,1,0,0,0,4,18.75l2.87,0,1.46,2.46a1,1,0,0,0,.18.22,1,1,0,0,0,.69.28h.14a1,1,0,0,0,.73-.49L12,17.9l1.93,3.35a1,1,0,0,0,.73.48h.14a1,1,0,0,0,.7-.28.87.87,0,0,0,.17-.21l1.46-2.46,2.87,0a1,1,0,0,0,.87-.5A1,1,0,0,0,20.87,17.25ZM9.19,18.78,8.3,17.29a1,1,0,0,0-.85-.49l-1.73,0,1.43-2.48a7,7,0,0,0,3.57,1.84ZM12,14.25a5,5,0,1,1,5-5A5,5,0,0,1,12,14.25Zm4.55,2.55a1,1,0,0,0-.85.49l-.89,1.49-1.52-2.65a7.06,7.06,0,0,0,3.56-1.84l1.43,2.48Z"/></svg>',
                ),
                array(
                    'keys' => 'baby-carriage',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,16a3,3,0,1,0,3,3A3,3,0,0,0,19,16Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,19,20ZM9,16a3,3,0,1,0,3,3A3,3,0,0,0,9,16Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,9,20ZM22,8.5A6.51,6.51,0,0,0,15.5,2H15a1,1,0,0,0-1,1V8H7.52L6.27,4.65A1,1,0,0,0,5.33,4H3A1,1,0,0,0,3,6H4.64L5.89,9.37l0,0,.51,1.37,0,.09A6.44,6.44,0,0,0,12.5,15h3A6.49,6.49,0,0,0,22,8.5Zm-3.32,3.18A4.47,4.47,0,0,1,15.5,13h-3a4.47,4.47,0,0,1-4.16-2.8.14.14,0,0,1,0-.06L8.26,10H19.74A4.32,4.32,0,0,1,18.68,11.68ZM16,8V4A4.49,4.49,0,0,1,20,8Z"/></svg>',
                ),
                array(
                    'keys' => 'backpack',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,10H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm5,0a4,4,0,0,0-3-3.86V5A3,3,0,0,0,9,5V6.14A4,4,0,0,0,6,10a4,4,0,0,0-4,4v3a3,3,0,0,0,3,3H6.18A3,3,0,0,0,9,22h6a3,3,0,0,0,2.82-2H19a3,3,0,0,0,3-3V14A4,4,0,0,0,18,10ZM6,18H5a1,1,0,0,1-1-1V14a2,2,0,0,1,2-2ZM11,5a1,1,0,0,1,2,0V6H11Zm5,14a1,1,0,0,1-1,1H9a1,1,0,0,1-1-1V18a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2Zm0-4.44A3.91,3.91,0,0,0,14,14H10a3.91,3.91,0,0,0-2,.56V10a2,2,0,0,1,2-2h4a2,2,0,0,1,2,2ZM20,17a1,1,0,0,1-1,1H18V12a2,2,0,0,1,2,2Z"/></svg>',
                ),
                array(
                    'keys' => 'backspace',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,5H9.83a3,3,0,0,0-2.12.88L2.29,11.29a1,1,0,0,0,0,1.42l5.42,5.41A3,3,0,0,0,9.83,19H19a3,3,0,0,0,3-3V8A3,3,0,0,0,19,5Zm1,11a1,1,0,0,1-1,1H9.83a1.05,1.05,0,0,1-.71-.29L4.41,12,9.12,7.29A1.05,1.05,0,0,1,9.83,7H19a1,1,0,0,1,1,1ZM16.71,9.29a1,1,0,0,0-1.42,0L14,10.59l-1.29-1.3a1,1,0,0,0-1.42,1.42L12.59,12l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L14,13.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L15.41,12l1.3-1.29A1,1,0,0,0,16.71,9.29Z"/></svg>',
                ),
                array(
                    'keys' => 'backward',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.67,5.85a2.63,2.63,0,0,0-2.67,0L14,8.15h0a2.67,2.67,0,0,0-4-2.31L3.33,9.69a2.67,2.67,0,0,0,0,4.62L10,18.16a2.66,2.66,0,0,0,2.67,0A2.65,2.65,0,0,0,14,15.85h0l4,2.31a2.69,2.69,0,0,0,1.33.36,2.61,2.61,0,0,0,1.34-.37A2.63,2.63,0,0,0,22,15.85V8.15A2.63,2.63,0,0,0,20.67,5.85ZM12,15.85a.66.66,0,0,1-.33.58.69.69,0,0,1-.67,0L4.33,12.58a.67.67,0,0,1,0-1.16L11,7.57a.67.67,0,0,1,.67,0,.66.66,0,0,1,.33.58Zm8,0a.67.67,0,0,1-1,.57l-5-2.88V10.46l5-2.88a.67.67,0,0,1,1,.57Z"/></svg>',
                ),
                array(
                    'keys' => 'bag-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6.5H16v-1a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v1H5a3,3,0,0,0-3,3v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-9A3,3,0,0,0,19,6.5Zm-9-1a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v1H10Zm10,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13a21.71,21.71,0,0,0,8,1.53A21.75,21.75,0,0,0,20,13Zm0-7.69a19.89,19.89,0,0,1-16,0V9.5a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'bag-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,6H16V5a2,2,0,0,0-2-2H10a1.86,1.86,0,0,0-.61.1,1,1,0,0,0-.64,1.27A1,1,0,0,0,10,5h4V6H12.66a1,1,0,0,0,0,2H19a1,1,0,0,1,1,1v1.28l-2.57.86a1,1,0,0,0-.63,1.27,1,1,0,0,0,.95.68,1.19,1.19,0,0,0,.32-.05L20,12.39v2.95a1,1,0,1,0,2,0V9A3,3,0,0,0,19,6ZM3.71,2.29A1,1,0,0,0,2.29,3.71L4.62,6A3,3,0,0,0,2,9v9a3,3,0,0,0,3,3H19a3.07,3.07,0,0,0,.53-.06l.76.77a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM4,9A1,1,0,0,1,5,8H6.59l4,4H9.16L4,10.28ZM5,19a1,1,0,0,1-1-1V12.39L8.68,14A1.19,1.19,0,0,0,9,14h3.59l5,5Z"/></svg>',
                ),
                array(
                    'keys' => 'bag',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6H16V5a2,2,0,0,0-2-2H10A2,2,0,0,0,8,5V6H5A3,3,0,0,0,2,9v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A3,3,0,0,0,19,6ZM10,5h4V6H10ZM20,18a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12.39L8.68,14A1.19,1.19,0,0,0,9,14h6a1.19,1.19,0,0,0,.32-.05L20,12.39Zm0-7.72L14.84,12H9.16L4,10.28V9A1,1,0,0,1,5,8H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'balance-scale',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.96423,13.82263a.94762.94762,0,0,0-.02819-.17419L20.63135,7.51135A2.99558,2.99558,0,0,0,22,5a1,1,0,0,0-2,0,1.00037,1.00037,0,0,1-1.88184.47266A2.8934,2.8934,0,0,0,15.54,4H13V3a1,1,0,0,0-2,0V4H8.46A2.8934,2.8934,0,0,0,5.88184,5.47266,1.00037,1.00037,0,0,1,4,5,1,1,0,0,0,2,5,2.99558,2.99558,0,0,0,3.36865,7.51135L1.064,13.64844a.94762.94762,0,0,0-.02819.17419A.94855.94855,0,0,0,1,14c0,.00928.00269.01782.00275.0271.0003.01318.003.02533.0039.03845a3.99379,3.99379,0,0,0,7.9867,0c.00085-.01312.0036-.02527.0039-.03845C8.99731,14.01782,9,14.00928,9,14a.94855.94855,0,0,0-.03577-.17737.94762.94762,0,0,0-.02819-.17419L6.62866,7.50421A2.98961,2.98961,0,0,0,7.64258,6.41992.917.917,0,0,1,8.46,6H11V20H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2H13V6h2.54a.917.917,0,0,1,.81738.41992,2.98961,2.98961,0,0,0,1.01392,1.08429L15.064,13.64844a.94762.94762,0,0,0-.02819.17419A.94855.94855,0,0,0,15,14c0,.00928.00269.01782.00275.0271.0003.01318.003.02533.0039.03845a3.99379,3.99379,0,0,0,7.9867,0c.00085-.01312.0036-.02527.0039-.03845C22.99731,14.01782,23,14.00928,23,14A.94855.94855,0,0,0,22.96423,13.82263ZM5,8.85553,6.5564,13H3.4436ZM6.72266,15A2.02306,2.02306,0,0,1,5,16a2.00023,2.00023,0,0,1-1.73145-1ZM19,8.85553,20.5564,13H17.4436ZM19,16a2.00023,2.00023,0,0,1-1.73145-1h3.45411A2.02306,2.02306,0,0,1,19,16Z"/></svg>',
                ),
                array(
                    'keys' => 'ban',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-8-8A7.92,7.92,0,0,1,5.69,7.1L16.9,18.31A7.92,7.92,0,0,1,12,20Zm6.31-3.1L7.1,5.69A7.92,7.92,0,0,1,12,4a8,8,0,0,1,8,8A7.92,7.92,0,0,1,18.31,16.9Z"/></svg>',
                ),
                array(
                    'keys' => 'band-aid',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.82,11.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.42A1,1,0,0,0,8.82,11.29Zm2.47,2.48a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41A1,1,0,0,0,11.29,13.77Zm9-10A6,6,0,0,0,12,3.55a6,6,0,0,0-8.24.2h0A6,6,0,0,0,3.57,12,6,6,0,0,0,8,22a5.92,5.92,0,0,0,4-1.55,6,6,0,0,0,8.25-.2A6,6,0,0,0,20.43,12,6,6,0,0,0,20.25,3.75ZM18.83,5.17A4,4,0,0,1,19,10.56L13.44,5A4.07,4.07,0,0,1,18.83,5.17ZM5.17,18.83A4,4,0,0,1,5,13.44l5.6,5.6A4.08,4.08,0,0,1,5.17,18.83Zm13.66,0a4.08,4.08,0,0,1-5.64,0l-8-8a4,4,0,0,1,0-5.64h0a4,4,0,0,1,5.64,0l8,8A4,4,0,0,1,18.83,18.83Zm-5.06-7.54a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.42A1,1,0,0,0,13.77,11.29ZM11.29,8.82a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41A1,1,0,0,0,11.29,8.82Z"/></svg>',
                ),
                array(
                    'keys' => 'bars',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,8H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,8Zm18,8H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-5H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'baseball-ball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.92188,6.44043a1.00009,1.00009,0,0,0-1.70313,1.04883q.26514.4292.56543.84375a.99994.99994,0,0,0,1.61914-1.17383Q14.147,6.80616,13.92188,6.44043Zm-2.7295,9.22168A1,1,0,1,0,9.583,16.84961c.16992.22949.32715.4668.47558.709a1.0004,1.0004,0,1,0,1.70508-1.04687C11.58594,16.22266,11.39551,15.93848,11.19238,15.66211Zm-3.707-3.42871a.99989.99989,0,0,0-1.04492,1.70508q.36329.22264.71289.47851A1.00029,1.00029,0,1,0,8.33105,12.7998Q7.91651,12.498,7.48535,12.2334Zm10.06055-2.167q-.36475-.22413-.71582-.4795a1.0003,1.0003,0,0,0-1.17774,1.61719q.41456.30176.84668.56738a1.0004,1.0004,0,1,0,1.04688-1.70507ZM18.99219,5.001a9.90088,9.90088,0,1,0,0,14.001A9.91268,9.91268,0,0,0,18.99219,5.001ZM17.71875,17.72852a8.02918,8.02918,0,0,1-4.51563,2.27374.97071.97071,0,0,0-1.74633.07324,8.0616,8.0616,0,0,1-7.535-7.53155.97507.97507,0,0,0,.07282-1.74714,8.0395,8.0395,0,0,1,6.78479-6.79174.99669.99669,0,0,0,.85632.49786,1.02809,1.02809,0,0,0,.22949-.02637.98194.98194,0,0,0,.65912-.54583,8.05437,8.05437,0,0,1,7.53772,7.53869.97244.97244,0,0,0-.07385,1.74085A8.046,8.046,0,0,1,17.71875,17.72852Z"/></svg>',
                ),
                array(
                    'keys' => 'basketball-hoop',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,10H6a1,1,0,0,0,0,2H7v9a1,1,0,0,0,2,0V20h2v1a1,1,0,0,0,2,0V20h2v1a1,1,0,0,0,2,0V12h1a1,1,0,0,0,0-2Zm-7,8H9V16h2Zm0-4H9V12h2Zm4,4H13V16h2Zm0-4H13V12h2ZM20,2H4A3,3,0,0,0,1,5v8a3,3,0,0,0,3,3,1,1,0,0,0,0-2,1,1,0,0,1-1-1V5A1,1,0,0,1,4,4H20a1,1,0,0,1,1,1v8a1,1,0,0,1-1,1,1,1,0,0,0,0,2,3,3,0,0,0,3-3V5A3,3,0,0,0,20,2ZM14,8a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'basketball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,3.6,6.59l0,0A10,10,0,0,0,18.26,19.79l0,0A10,10,0,0,0,12,2Zm2,2.26A8,8,0,0,1,19.74,10,9.78,9.78,0,0,0,15,11.38a15.7,15.7,0,0,0-2.4-2.21A10.06,10.06,0,0,0,14,4.26ZM12,4a7.9,7.9,0,0,1-1.14,4.07c-.15-.08-.29-.17-.44-.24A15.52,15.52,0,0,0,6.33,6.36,8,8,0,0,1,12,4ZM5,8.16A13.75,13.75,0,0,1,9.49,9.6l.13.08A7.93,7.93,0,0,1,4,12,8,8,0,0,1,5,8.16Zm5,11.58A8,8,0,0,1,4.26,14a9.9,9.9,0,0,0,7.08-3.21,14,14,0,0,1,2,1.8A10,10,0,0,0,10,19.74ZM12,20a8,8,0,0,1,2.56-5.85c.06.08.12.15.17.23a14,14,0,0,1,1.84,4.18A7.93,7.93,0,0,1,12,20Zm6.21-3a16,16,0,0,0-1.8-3.75L16.2,13A7.93,7.93,0,0,1,20,12,8,8,0,0,1,18.21,17Z"/></svg>',
                ),
                array(
                    'keys' => 'bath',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,12H5V6.41016A1.97474,1.97474,0,0,1,6.04,4.65137a1.99474,1.99474,0,0,1,1.14764-.2312,3.49114,3.49114,0,0,0,.83771,3.55444L9.08594,9.03516a.99965.99965,0,0,0,1.41406,0L14.03516,5.5a.99964.99964,0,0,0,0-1.41406L12.97461,3.02539a3.494,3.494,0,0,0-4.52972-.34253A3.99247,3.99247,0,0,0,3,6.41016V12H2a1,1,0,0,0,0,2H3v3a2.995,2.995,0,0,0,2,2.81567V21a1,1,0,0,0,2,0V20H17v1a1,1,0,0,0,2,0V19.81573A2.99507,2.99507,0,0,0,21,17V14h1a1,1,0,0,0,0-2ZM9.43945,4.43945a1.50184,1.50184,0,0,1,2.1211,0l.35351.35352L9.793,6.91406l-.35352-.35351A1.50123,1.50123,0,0,1,9.43945,4.43945ZM19,17a1.00067,1.00067,0,0,1-1,1H6a1.00067,1.00067,0,0,1-1-1V14H19Z"/></svg>',
                ),
                array(
                    'keys' => 'battery-bolt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.69,15H4V9H6.31a1,1,0,0,0,0-2H4A2,2,0,0,0,2,9v6a2,2,0,0,0,2,2H6.69a1,1,0,1,0,0-2Zm7.2-2.56a1.27,1.27,0,0,0,.06-.18,1.42,1.42,0,0,0,0-.2s0,0,0-.06,0-.08,0-.12a.65.65,0,0,0-.05-.2.89.89,0,0,0-.08-.17.86.86,0,0,0-.1-.16l-.16-.13-.09-.09-.06,0-.18-.06-.2,0H9.73l1.45-2.5a1,1,0,1,0-1.74-1l-2.31,4s0,0,0,.06a1.27,1.27,0,0,0-.06.18,1.42,1.42,0,0,0,0,.2S7,12,7,12s0,.08,0,.12a.65.65,0,0,0,.05.2.89.89,0,0,0,.08.17.86.86,0,0,0,.1.16l.16.13a.76.76,0,0,0,.09.09l.07,0,.09,0A1,1,0,0,0,8,13h3.27L9.82,15.5a1,1,0,0,0,1.74,1l2.31-4S13.88,12.46,13.89,12.44ZM21,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,21,10ZM17,7H14.31a1,1,0,0,0,0,2H17v6H14.69a1,1,0,1,0,0,2H17a2,2,0,0,0,2-2V9A2,2,0,0,0,17,7Z"/></svg>',
                ),
                array(
                    'keys' => 'battery-empty',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,7H4A2,2,0,0,0,2,9v6a2,2,0,0,0,2,2H17a2,2,0,0,0,2-2V9A2,2,0,0,0,17,7Zm0,8H4V9H17Zm4-5a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,21,10Z"/></svg>',
                ),
                array(
                    'keys' => 'bed-double',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,3.5H4a3,3,0,0,0-3,3v13a1,1,0,0,0,1,1H6a1,1,0,0,0,.83-.45L8.54,17.5h6.92l1.71,2.55a1,1,0,0,0,.83.45h4a1,1,0,0,0,1-1V6.5A3,3,0,0,0,20,3.5Zm1,15H18.54L16.83,16A1,1,0,0,0,16,15.5H8a1,1,0,0,0-.83.45L5.46,18.5H3v-5H21Zm-14-7v-1a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v1Zm6,0v-1a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v1Zm8,0H19v-1a3,3,0,0,0-3-3H14a3,3,0,0,0-2,.78,3,3,0,0,0-2-.78H8a3,3,0,0,0-3,3v1H3v-5a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'bed',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,12.5a3,3,0,1,0-3-3A3,3,0,0,0,7,12.5Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,7,8.5Zm13-2H12a1,1,0,0,0-1,1v6H3v-8a1,1,0,0,0-2,0v13a1,1,0,0,0,2,0v-3H21v3a1,1,0,0,0,2,0v-9A3,3,0,0,0,20,6.5Zm1,7H13v-5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'behance-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.1084,15.03169a.99748.99748,0,0,0-1.21582.72265,2.99839,2.99839,0,0,1-5.90088-.7539v-1h7a.99974.99974,0,0,0,1-1,5,5,0,1,0-10,0v2a4.99837,4.99837,0,0,0,9.83935,1.24609A.999.999,0,0,0,22.1084,15.03169Zm-4.1167-5.03125a3.01119,3.01119,0,0,1,2.11816.87207,3.04438,3.04438,0,0,1,.69867,1.12793H15.176A2.99509,2.99509,0,0,1,17.9917,10.00044Zm-2-3h4a1,1,0,0,0,0-2h-4a1,1,0,0,0,0,2Zm-6.082,4.71716a3.98653,3.98653,0,0,0-2.918-6.71716h-5a.99973.99973,0,0,0-1,1v13a.99974.99974,0,0,0,1,1h5.5a4.492,4.492,0,0,0,2.418-8.28284ZM2.9917,7.00044h4a2,2,0,1,1,0,4h-4Zm4.5,11h-4.5v-5h4.5a2.5,2.5,0,0,1,0,5Z"/></svg>',
                ),
                array(
                    'keys' => 'behance',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.07,6.35H15V7.76h5.09ZM19,16.05a2.23,2.23,0,0,1-1.3.37A2.23,2.23,0,0,1,16,15.88a2.49,2.49,0,0,1-.62-1.76H22a6.47,6.47,0,0,0-.17-2,5.08,5.08,0,0,0-.8-1.73,4.17,4.17,0,0,0-1.42-1.21,4.37,4.37,0,0,0-2-.45,4.88,4.88,0,0,0-1.9.37,4.51,4.51,0,0,0-1.47,1,4.4,4.4,0,0,0-.95,1.52,5.4,5.4,0,0,0-.33,1.91,5.52,5.52,0,0,0,.32,1.94A4.46,4.46,0,0,0,14.16,17a4,4,0,0,0,1.46,1,5.2,5.2,0,0,0,1.94.34,4.77,4.77,0,0,0,2.64-.7,4.21,4.21,0,0,0,1.63-2.35H19.62A1.54,1.54,0,0,1,19,16.05Zm-3.43-4.12a1.87,1.87,0,0,1,1-1.14,2.28,2.28,0,0,1,1-.2,1.73,1.73,0,0,1,1.36.49,2.91,2.91,0,0,1,.63,1.45H15.41A3,3,0,0,1,15.52,11.93Zm-5.29-.48a3.06,3.06,0,0,0,1.28-1,2.72,2.72,0,0,0,.43-1.58,3.28,3.28,0,0,0-.29-1.48,2.4,2.4,0,0,0-.82-1,3.24,3.24,0,0,0-1.27-.52,7.54,7.54,0,0,0-1.64-.16H2V18.29H8.1a6.55,6.55,0,0,0,1.65-.21,4.55,4.55,0,0,0,1.43-.65,3.13,3.13,0,0,0,1-1.14,3.41,3.41,0,0,0,.37-1.65,3.47,3.47,0,0,0-.57-2A3,3,0,0,0,10.23,11.45ZM4.77,7.86H7.36a4.17,4.17,0,0,1,.71.06,1.64,1.64,0,0,1,.61.22,1.05,1.05,0,0,1,.42.44,1.42,1.42,0,0,1,.16.72,1.36,1.36,0,0,1-.47,1.15,2,2,0,0,1-1.22.35H4.77ZM9.61,15.3a1.28,1.28,0,0,1-.45.5,2,2,0,0,1-.65.26,3.33,3.33,0,0,1-.78.08h-3V12.69h3a2.4,2.4,0,0,1,1.45.41,1.65,1.65,0,0,1,.54,1.39A1.77,1.77,0,0,1,9.61,15.3Z"/></svg>',
                ),
                array(
                    'keys' => 'bell-school',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,8a2,2,0,1,0-2.27,2,4.49,4.49,0,0,1-3,5.85,3,3,0,0,0-1.3-1.43,7,7,0,1,0-10.9,0A3,3,0,0,0,2,17v1a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3v-.19a6.47,6.47,0,0,0,4.58-8.59A2,2,0,0,0,21,8ZM14,18a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h.41a6.94,6.94,0,0,0,7.18,0H13a1,1,0,0,1,1,1ZM9,15a5,5,0,1,1,5-5A5,5,0,0,1,9,15ZM9,9a1,1,0,1,0,1,1A1,1,0,0,0,9,9Z"/></svg>',
                ),
                array(
                    'keys' => 'bell-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.07,6.12A3.48,3.48,0,0,1,12,6a4,4,0,0,1,4,4v1.34a1,1,0,0,0,2,0V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.1l-.45.08a1,1,0,0,0,.52,1.94ZM21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71L6.41,7.82A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0h1.73l2.7,2.71a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM8,10a3.31,3.31,0,0,1,0-.55L11.59,13H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20ZM6,17V16a1,1,0,0,1,1-1h6.59l2,2Z"/></svg>',
                ),
                array(
                    'keys' => 'bell',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'bill',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.5,10.5H12a1,1,0,0,0,0-2H11V8A1,1,0,0,0,9,8v.55a2.5,2.5,0,0,0,.5,4.95h1a.5.5,0,0,1,0,1H8a1,1,0,0,0,0,2H9V17a1,1,0,0,0,2,0v-.55a2.5,2.5,0,0,0-.5-4.95h-1a.5.5,0,0,1,0-1ZM21,12H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Z"/></svg>',
                ),
                array(
                    'keys' => 'bing',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.1,8.6l1.7,4.3l2.8,1.3L9,17.5V3.4L5,2v17.8L9,22l10-5.8v-4.5L10.1,8.6z"/></svg>',
                ),
                array(
                    'keys' => 'bitcoin-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.30426,11.24115A3.99779,3.99779,0,0,0,12.9917,5.002v-1a1,1,0,1,0-2,0v1h-2v-1a1,1,0,1,0-2,0v1h-1a1,1,0,0,0,0,2h1v10h-1a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h2v1a1,1,0,0,0,2,0v-1h2a3.98966,3.98966,0,0,0,1.31256-7.7608ZM8.9917,7.002h4a2,2,0,0,1,0,4h-4Zm6,10h-6v-4h6a2,2,0,1,1,0,4Z"/></svg>',
                ),
                array(
                    'keys' => 'bitcoin-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21ZM14,7V6a1,1,0,0,0-2,0V7H11V6A1,1,0,0,0,9,6V7H8A1,1,0,0,0,8,9H9v6H8a1,1,0,0,0,0,2H9v1a1,1,0,0,0,2,0V17h1v1a1,1,0,0,0,2,0V17a3,3,0,0,0,3-3,3,3,0,0,0-.77-2A3,3,0,0,0,17,10,3,3,0,0,0,14,7Zm0,8H11V13h3a1,1,0,0,1,0,2Zm0-4H11V9h3a1,1,0,0,1,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'bitcoin-sign',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,9a4,4,0,0,0-4-4V3a1,1,0,0,0-2,0V5H11V3A1,1,0,0,0,9,3V5H6A1,1,0,0,0,6,7H7V17H6a1,1,0,0,0,0,2H9v2a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V19a4,4,0,0,0,2.62-7A4,4,0,0,0,19,9Zm-4,8H9V13h6a2,2,0,0,1,0,4Zm0-6H9V7h6a2,2,0,0,1,0,4Z"/></svg>',
                ),
                array(
                    'keys' => 'bitcoin',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><title>Artboard 5 copy 21</title><g id="Archway"><path d="M11.136,12.11664l-.59577,2.41528c.73542.18469,3.00373.92127,3.33893-.44122C14.22961,12.66974,11.8714,12.30225,11.136,12.11664Zm.81262-3.29621-.5401,2.19056c.61243.15442,2.5003.78405,2.80621-.45526C14.53339,9.26294,12.5611,8.97479,11.94867,8.82043ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm4.358,8.57538a1.74286,1.74286,0,0,1-1.38525,1.611,1.93285,1.93285,0,0,1,.99682,2.66089c-.58551,1.69214-1.97662,1.835-3.82653,1.48089l-.449,1.81971-1.08484-.27344.44312-1.79529c-.28119-.07062-.56855-.14563-.86457-.22687L9.7431,17.65594l-1.08362-.27343.449-1.82312c-.25342-.06562-.5108-.13532-.77344-.20185l-1.41174-.35595.53857-1.25592s.79932.215.78852.19909a.39446.39446,0,0,0,.49719-.26062L9.965,8.74634a.583.583,0,0,0-.5055-.63812c.017-.01154-.788-.19812-.788-.19812l.28863-1.17188,1.4961.37781L10.455,7.1217c.22491.05652.45666.11029.69275.16468l.44464-1.80188,1.08423.27343L12.241,7.52448c.29107.06719.584.135.8692.2069l.43255-1.755,1.0849.27344-.44433,1.80249C15.553,8.52948,16.55475,9.24481,16.358,10.57538Z"/></g></svg>',
                ),
                array(
                    'keys' => 'black-berry',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2ZM7.19,13.35H5.27l.52-2.41H7.63c1.2,0,1.48.58,1.48,1.05C9.11,12.64,8.68,13.35,7.19,13.35Zm.66-3.64H5.94L6.46,7.3H8.3c1.19,0,1.47.59,1.47,1C9.77,9,9.35,9.71,7.85,9.71Zm3.75,7.43H9.68l.53-2.42h1.84c1.19,0,1.47.59,1.47,1.06C13.52,16.43,13.1,17.14,11.6,17.14Zm.71-3.79H10.4l.52-2.41h1.84c1.19,0,1.47.58,1.47,1.05C14.23,12.64,13.81,13.35,12.31,13.35ZM13,9.71H11.06l.52-2.41h1.84c1.2,0,1.48.59,1.48,1C14.9,9,14.47,9.71,13,9.71Zm3.74,5.61H14.81l.52-2.42h1.84c1.19,0,1.48.59,1.48,1.06C18.65,14.61,18.22,15.32,16.72,15.32Zm.72-3.44H15.52L16,9.46h1.84c1.2,0,1.48.59,1.48,1C19.36,11.17,18.93,11.88,17.44,11.88Z"/></svg>',
                ),
                array(
                    'keys' => 'blogger-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.99121,13.00044h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-2h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm6-1.001v-.999a4.004,4.004,0,0,0-4-4h-2a5.00589,5.00589,0,0,0-5,5v4a5.00589,5.00589,0,0,0,5,5h4a5.00589,5.00589,0,0,0,5-5v-1A3.00474,3.00474,0,0,0,15.99121,9.99946Zm0,.001v.001l-1-.001Zm1,4a3.00328,3.00328,0,0,1-3,3h-4a3.00328,3.00328,0,0,1-3-3v-4a3.00328,3.00328,0,0,1,3-3h2a2.0026,2.0026,0,0,1,2,2v1a2.0026,2.0026,0,0,0,2,2,1.00067,1.00067,0,0,1,1,1Zm3-13h-16a3.00328,3.00328,0,0,0-3,3v16a3.00328,3.00328,0,0,0,3,3h16a3.00328,3.00328,0,0,0,3-3v-16A3.00328,3.00328,0,0,0,19.99121,1.00044Zm1,19a1.00067,1.00067,0,0,1-1,1h-16a1.00067,1.00067,0,0,1-1-1v-16a1.00067,1.00067,0,0,1,1-1h16a1.00067,1.00067,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'blogger',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.71008,10.46008h2.23883a.77084.77084,0,1,0,0-1.54168H9.71008a.77084.77084,0,1,0,0,1.54168Zm9.71826-8.45837H4.555A2.57277,2.57277,0,0,0,1.9917,4.56506V19.43829A2.57278,2.57278,0,0,0,4.555,22.00171H19.42822a2.57268,2.57268,0,0,0,2.56348-2.56329V4.56506A2.57267,2.57267,0,0,0,19.42834,2.00171ZM18.35577,11.6795l-.01965,2.67542a4.0515,4.0515,0,0,1-4.03857,4.02179h-4.639a4.04922,4.04922,0,0,1-4.04181-4.0249V9.65747A4.05258,4.05258,0,0,1,9.65851,5.62671h2.82373a4.45954,4.45954,0,0,1,3.1203,2.19971,3.15646,3.15646,0,0,1,.36182,1.36767c.06738.50556.10284.88123.33007,1.08942.31934.28949,1.50727.09448,1.74219.27844l.17883.13983.10889.22168.036.17755Zm-4.097,1.8639H9.71008a.75035.75035,0,1,0,0,1.5h4.54871a.75024.75024,0,1,0,0-1.5Z"/></svg>',
                ),
                array(
                    'keys' => 'bluetooth-b',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.41,12l3.8-3.79a1,1,0,0,0,0-1.42l-4.5-4.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.54.54A1,1,0,0,0,11,3V9.59L8.21,6.79A1,1,0,1,0,6.79,8.21L10.59,12l-3.8,3.79a1,1,0,1,0,1.42,1.42L11,14.41V21a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4.5-4.5a1,1,0,0,0,0-1.42ZM13,5.41,15.09,7.5,13,9.59Zm0,13.18V14.41l2.09,2.09Z"/></svg>',
                ),
                array(
                    'keys' => 'bold',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.5,9.5A3.5,3.5,0,0,0,13,6H8.5a1,1,0,0,0-1,1V17a1,1,0,0,0,1,1H13a3.49,3.49,0,0,0,2.44-6A3.5,3.5,0,0,0,16.5,9.5ZM13,16H9.5V13H13a1.5,1.5,0,0,1,0,3Zm0-5H9.5V8H13a1.5,1.5,0,0,1,0,3Z"/></svg>',
                ),
                array(
                    'keys' => 'bolt-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.89,9.55A1,1,0,0,0,19,9H14V3a1,1,0,0,0-.69-1,1,1,0,0,0-1.12.36l-8,11a1,1,0,0,0-.08,1A1,1,0,0,0,5,15h5v6a1,1,0,0,0,.69.95A1.12,1.12,0,0,0,11,22a1,1,0,0,0,.81-.41l8-11A1,1,0,0,0,19.89,9.55ZM12,17.92V14a1,1,0,0,0-1-1H7l5-6.92V10a1,1,0,0,0,1,1h4Z"/></svg>',
                ),
                array(
                    'keys' => 'bolt-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.67,4.23A1,1,0,0,0,9.6,4h5.1L13.43,8.74a1,1,0,0,0,.17.87,1,1,0,0,0,.79.39H18l-1.13,1.24a1,1,0,0,0,.07,1.41,1,1,0,0,0,.67.26,1,1,0,0,0,.74-.33L21,9.67A1,1,0,0,0,20.23,8H15.69L17,3.26a1,1,0,0,0-.18-.87A1,1,0,0,0,16,2H9a1,1,0,0,0-1,.74L8,3A1,1,0,0,0,8.67,4.23Zm13,16.06-18-18A1,1,0,0,0,2.29,3.71L6.61,8,5.35,12.74a1,1,0,0,0,.18.87,1,1,0,0,0,.79.39h3.84L8.35,20.74a1,1,0,0,0,.49,1.14,1,1,0,0,0,.48.12,1,1,0,0,0,.74-.33l4.85-5.34,5.38,5.38a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM7.62,12l.63-2.34L10.59,12Zm3.73,5.28,1-3.56,1.2,1.19Z"/></svg>',
                ),
                array(
                    'keys' => 'bolt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.87,8.6A1,1,0,0,0,19,8H14.42l1.27-4.74a1,1,0,0,0-.17-.87A1,1,0,0,0,14.73,2h-7a1,1,0,0,0-1,.74l-2.68,10a1,1,0,0,0,.17.87,1,1,0,0,0,.8.39H8.89L7.08,20.74a1,1,0,0,0,1.71.93l10.9-12A1,1,0,0,0,19.87,8.6Zm-9.79,8.68,1.07-4a1,1,0,0,0-.17-.87,1,1,0,0,0-.79-.39H6.35L8.49,4h4.93L12.15,8.74a1,1,0,0,0,1,1.26h3.57Z"/></svg>',
                ),
                array(
                    'keys' => 'book-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,2H8A4,4,0,0,0,4,6V18a4,4,0,0,0,4,4H18a2,2,0,0,0,2-2V4A2,2,0,0,0,18,2ZM6,6A2,2,0,0,1,8,4H18V14H8a3.91,3.91,0,0,0-2,.56ZM8,20a2,2,0,0,1,0-4H18v4ZM10,8h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'book-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,9H11V7A1,1,0,0,0,9,7V9H7a1,1,0,0,0,0,2H9v2a1,1,0,0,0,2,0V11h2a1,1,0,0,0,0-2Zm5,6V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H15A3,3,0,0,0,18,15ZM4,15V5A1,1,0,0,1,5,4H15a1,1,0,0,1,1,1V15a1,1,0,0,1-1,1H5A1,1,0,0,1,4,15ZM21,6a1,1,0,0,0-1,1V17a3,3,0,0,1-3,3H7a1,1,0,0,0,0,2H17a5,5,0,0,0,5-5V7A1,1,0,0,0,21,6Z"/></svg>',
                ),
                array(
                    'keys' => 'book-open',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.17,2.06A13.1,13.1,0,0,0,19,1.87a12.94,12.94,0,0,0-7,2.05,12.94,12.94,0,0,0-7-2,13.1,13.1,0,0,0-2.17.19,1,1,0,0,0-.83,1v12a1,1,0,0,0,1.17,1,10.9,10.9,0,0,1,8.25,1.91l.12.07.11,0a.91.91,0,0,0,.7,0l.11,0,.12-.07A10.9,10.9,0,0,1,20.83,16a1,1,0,0,0,1.17-1v-12A1,1,0,0,0,21.17,2.06ZM11,15.35a12.87,12.87,0,0,0-6-1.48c-.33,0-.66,0-1,0v-10a8.69,8.69,0,0,1,1,0,10.86,10.86,0,0,1,6,1.8Zm9-1.44c-.34,0-.67,0-1,0a12.87,12.87,0,0,0-6,1.48V5.67a10.86,10.86,0,0,1,6-1.8,8.69,8.69,0,0,1,1,0Zm1.17,4.15A13.1,13.1,0,0,0,19,17.87a12.94,12.94,0,0,0-7,2.05,12.94,12.94,0,0,0-7-2.05,13.1,13.1,0,0,0-2.17.19A1,1,0,0,0,2,19.21,1,1,0,0,0,3.17,20a10.9,10.9,0,0,1,8.25,1.91,1,1,0,0,0,1.16,0A10.9,10.9,0,0,1,20.83,20,1,1,0,0,0,22,19.21,1,1,0,0,0,21.17,18.06Z"/></svg>',
                ),
                array(
                    'keys' => 'book-reader',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.18,10.19A11.9,11.9,0,0,0,18,10c-.42,0-.83,0-1.24.08a5.91,5.91,0,0,0-1.91-1.65,3.81,3.81,0,0,0,1-2.57,3.86,3.86,0,0,0-7.72,0,3.81,3.81,0,0,0,1,2.57,6.11,6.11,0,0,0-1.91,1.64C6.83,10,6.42,10,6,10a11.9,11.9,0,0,0-2.18.21,1,1,0,0,0-.82,1v8.25a1,1,0,0,0,.36.77,1,1,0,0,0,.82.22A9.75,9.75,0,0,1,6,20.23a9.89,9.89,0,0,1,5.45,1.63h0l0,0,.13.05h0A1.09,1.09,0,0,0,12,22a.87.87,0,0,0,.28-.05l.07,0,.13-.05,0,0h0A9.89,9.89,0,0,1,18,20.23a9.75,9.75,0,0,1,1.82.18,1,1,0,0,0,.82-.22,1,1,0,0,0,.36-.77V11.17A1,1,0,0,0,20.18,10.19ZM12,4a1.86,1.86,0,0,1,0,3.71h0A1.86,1.86,0,0,1,12,4ZM11,19.33a11.92,11.92,0,0,0-5-1.1c-.33,0-.66,0-1,.05V12a9.63,9.63,0,0,1,2.52.05l.11,0A10,10,0,0,1,11,13.33Zm1-7.73a11.77,11.77,0,0,0-1.38-.68l-.06,0c-.33-.13-.66-.26-1-.36A4,4,0,0,1,12,9.69h0a4,4,0,0,1,2.44.85A12.43,12.43,0,0,0,12,11.6Zm7,6.68a11.6,11.6,0,0,0-6,1v-6a9.76,9.76,0,0,1,3.37-1.22l.2,0A9.39,9.39,0,0,1,19,12Z"/></svg>',
                ),
                array(
                    'keys' => 'book',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,6H9A1,1,0,0,0,8,7v4a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V7A1,1,0,0,0,15,6Zm-1,4H10V8h4Zm3-8H5A1,1,0,0,0,4,3V21a1,1,0,0,0,1,1H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Zm1,17a1,1,0,0,1-1,1H6V4H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'bookmark-full',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,2H6A1,1,0,0,0,5,3V21a1,1,0,0,0,1.65.76L12,17.27l5.29,4.44A1,1,0,0,0,18,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,19,21V3A1,1,0,0,0,18,2ZM17,18.86,12.64,15.2a1,1,0,0,0-1.28,0L7,18.86V4H17Z"/></svg>',
                ),
                array(
                    'keys' => 'bookmark',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'books',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22.47,18.82l-1-3.86h0L18.32,3.37a1,1,0,0,0-1.22-.71l-3.87,1a1,1,0,0,0-.73-.33H2.5a1,1,0,0,0-1,1v16a1,1,0,0,0,1,1h10a1,1,0,0,0,1-1v-8l2.2,8.22a1,1,0,0,0,1,.74,1.15,1.15,0,0,0,.26,0l4.83-1.29a1,1,0,0,0,.61-.47A1.05,1.05,0,0,0,22.47,18.82Zm-16,.55h-3v-2h3Zm0-4h-3v-6h3Zm0-8h-3v-2h3Zm5,12h-3v-2h3Zm0-4h-3v-6h3Zm0-8h-3v-2h3Zm2.25-1.74,2.9-.78.52,1.93-2.9.78Zm2.59,9.66-1.55-5.8,2.9-.78,1.55,5.8Zm1,3.86-.52-1.93,2.9-.78.52,1.93Z"/></svg>',
                ),
                array(
                    'keys' => 'boombox',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Zm1,17a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1Zm-3.62-8.2A3,3,0,0,0,15,9,3,3,0,0,0,9,9a3,3,0,0,0,.62,1.8,4,4,0,1,0,4.76,0ZM12,8a1,1,0,1,1-1,1A1,1,0,0,1,12,8Zm0,8a2,2,0,1,1,2-2A2,2,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'border-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.5,18.5a1,1,0,1,0,1,1A1,1,0,0,0,11.5,18.5Zm9-15a1,1,0,0,0-1-1H3.5a1,1,0,0,0-1,1v16a1,1,0,0,0,2,0V4.5h15A1,1,0,0,0,20.5,3.5Zm-5,15a1,1,0,1,0,1,1A1,1,0,0,0,15.5,18.5Zm-8,0a1,1,0,1,0,1,1A1,1,0,0,0,7.5,18.5Zm12-12a1,1,0,1,0,1,1A1,1,0,0,0,19.5,6.5Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,19.5,10.5Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,19.5,14.5Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,19.5,18.5Z"/></svg>',
                ),
                array(
                    'keys' => 'border-bottom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,13.5a1,1,0,1,0-1-1A1,1,0,0,0,12,13.5Zm0,4a1,1,0,1,0-1-1A1,1,0,0,0,12,17.5Zm0-8a1,1,0,1,0-1-1A1,1,0,0,0,12,9.5Zm-4-4a1,1,0,1,0-1-1A1,1,0,0,0,8,5.5Zm0,8a1,1,0,1,0-1-1A1,1,0,0,0,8,13.5Zm12-8a1,1,0,1,0-1-1A1,1,0,0,0,20,5.5Zm-4,8a1,1,0,1,0-1-1A1,1,0,0,0,16,13.5Zm-4-8a1,1,0,1,0-1-1A1,1,0,0,0,12,5.5Zm4,0a1,1,0,1,0-1-1A1,1,0,0,0,16,5.5Zm4,10a1,1,0,1,0,1,1A1,1,0,0,0,20,15.5Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,20,11.5Zm0,8H4a1,1,0,0,0,0,2H20a1,1,0,0,0,0-2Zm0-12a1,1,0,1,0,1,1A1,1,0,0,0,20,7.5Zm-16,6a1,1,0,1,0-1-1A1,1,0,0,0,4,13.5Zm0-4a1,1,0,1,0-1-1A1,1,0,0,0,4,9.5Zm0,8a1,1,0,1,0-1-1A1,1,0,0,0,4,17.5Zm0-12a1,1,0,1,0-1-1A1,1,0,0,0,4,5.5Z"/></svg>',
                ),
                array(
                    'keys' => 'border-clear',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,8,19Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,19ZM4,3A1,1,0,1,0,5,4,1,1,0,0,0,4,3Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,4,11ZM20,5a1,1,0,1,0-1-1A1,1,0,0,0,20,5ZM4,19a1,1,0,1,0,1,1A1,1,0,0,0,4,19Zm8-4a1,1,0,1,0,1,1A1,1,0,0,0,12,15ZM4,15a1,1,0,1,0,1,1A1,1,0,0,0,4,15ZM4,7A1,1,0,1,0,5,8,1,1,0,0,0,4,7ZM8,3A1,1,0,1,0,9,4,1,1,0,0,0,8,3ZM20,15a1,1,0,1,0,1,1A1,1,0,0,0,20,15Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,20,19ZM20,7a1,1,0,1,0,1,1A1,1,0,0,0,20,7Zm-8,4a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm8,0a1,1,0,1,0,1,1A1,1,0,0,0,20,11ZM16,3a1,1,0,1,0,1,1A1,1,0,0,0,16,3ZM12,3a1,1,0,1,0,1,1A1,1,0,0,0,12,3Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,12,7Zm4,12a1,1,0,1,0,1,1A1,1,0,0,0,16,19Zm0-8a1,1,0,1,0,1,1A1,1,0,0,0,16,11Z"/></svg>',
                ),
                array(
                    'keys' => 'border-horizontal',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,5A1,1,0,1,0,7,4,1,1,0,0,0,8,5ZM4,9A1,1,0,1,0,3,8,1,1,0,0,0,4,9Zm8,0a1,1,0,1,0-1-1A1,1,0,0,0,12,9ZM4,5A1,1,0,1,0,3,4,1,1,0,0,0,4,5ZM16,5a1,1,0,1,0-1-1A1,1,0,0,0,16,5ZM12,5a1,1,0,1,0-1-1A1,1,0,0,0,12,5Zm8,0a1,1,0,1,0-1-1A1,1,0,0,0,20,5ZM4,19a1,1,0,1,0,1,1A1,1,0,0,0,4,19Zm16,0a1,1,0,1,0,1,1A1,1,0,0,0,20,19Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,20,15Zm0-4H4a1,1,0,0,0,0,2H20a1,1,0,0,0,0-2Zm-4,8a1,1,0,1,0,1,1A1,1,0,0,0,16,19ZM4,15a1,1,0,1,0,1,1A1,1,0,0,0,4,15ZM20,7a1,1,0,1,0,1,1A1,1,0,0,0,20,7ZM8,19a1,1,0,1,0,1,1A1,1,0,0,0,8,19Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,19Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,12,15Z"/></svg>',
                ),
                array(
                    'keys' => 'border-inner',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,5A1,1,0,1,0,7,4,1,1,0,0,0,8,5ZM4,9A1,1,0,1,0,3,8,1,1,0,0,0,4,9ZM4,5A1,1,0,1,0,3,4,1,1,0,0,0,4,5ZM4,19a1,1,0,1,0,1,1A1,1,0,0,0,4,19ZM20,5a1,1,0,1,0-1-1A1,1,0,0,0,20,5Zm0,4a1,1,0,1,0-1-1A1,1,0,0,0,20,9ZM16,5a1,1,0,1,0-1-1A1,1,0,0,0,16,5Zm4,14a1,1,0,1,0,1,1A1,1,0,0,0,20,19ZM4,15a1,1,0,1,0,1,1A1,1,0,0,0,4,15Zm16,0a1,1,0,1,0,1,1A1,1,0,0,0,20,15Zm-4,4a1,1,0,1,0,1,1A1,1,0,0,0,16,19Zm5-7a1,1,0,0,0-1-1H13V4a1,1,0,0,0-2,0v7H4a1,1,0,0,0,0,2h7v7a1,1,0,0,0,2,0V13h7A1,1,0,0,0,21,12ZM8,19a1,1,0,1,0,1,1A1,1,0,0,0,8,19Z"/></svg>',
                ),
                array(
                    'keys' => 'border-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.5,19a1,1,0,1,0,1,1A1,1,0,0,0,11.5,19Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,11.5,15Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,11.5,11Zm-8-8a1,1,0,0,0-1,1V20a1,1,0,0,0,2,0V4A1,1,0,0,0,3.5,3Zm16,2a1,1,0,1,0-1-1A1,1,0,0,0,19.5,5Zm-8,2a1,1,0,1,0,1,1A1,1,0,0,0,11.5,7Zm-4,4a1,1,0,1,0,1,1A1,1,0,0,0,7.5,11Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,7.5,19Zm0-16a1,1,0,1,0,1,1A1,1,0,0,0,7.5,3Zm12,8a1,1,0,1,0,1,1A1,1,0,0,0,19.5,11Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,19.5,15Zm-8-12a1,1,0,1,0,1,1A1,1,0,0,0,11.5,3Zm8,16a1,1,0,1,0,1,1A1,1,0,0,0,19.5,19Zm0-12a1,1,0,1,0,1,1A1,1,0,0,0,19.5,7Zm-4-4a1,1,0,1,0,1,1A1,1,0,0,0,15.5,3Zm0,16a1,1,0,1,0,1,1A1,1,0,0,0,15.5,19Zm0-8a1,1,0,1,0,1,1A1,1,0,0,0,15.5,11Z"/></svg>',
                ),
                array(
                    'keys' => 'border-out',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,9a1,1,0,1,0-1-1A1,1,0,0,0,12,9Zm0,4a1,1,0,1,0-1-1A1,1,0,0,0,12,13Zm4,0a1,1,0,1,0-1-1A1,1,0,0,0,16,13Zm-4,4a1,1,0,1,0-1-1A1,1,0,0,0,12,17ZM20,3H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V4A1,1,0,0,0,20,3ZM19,19H5V5H19ZM8,13a1,1,0,1,0-1-1A1,1,0,0,0,8,13Z"/></svg>',
                ),
                array(
                    'keys' => 'border-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4.5,7a1,1,0,1,0,1,1A1,1,0,0,0,4.5,7Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,4.5,3Zm4,16a1,1,0,1,0,1,1A1,1,0,0,0,8.5,19Zm-4,0a1,1,0,1,0,1,1A1,1,0,0,0,4.5,19Zm4-8a1,1,0,1,0,1,1A1,1,0,0,0,8.5,11Zm0-8a1,1,0,1,0,1,1A1,1,0,0,0,8.5,3Zm-4,8a1,1,0,1,0,1,1A1,1,0,0,0,4.5,11Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,4.5,15Zm12-12a1,1,0,1,0,1,1A1,1,0,0,0,16.5,3Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,16.5,11Zm-4,8a1,1,0,1,0,1,1A1,1,0,0,0,12.5,19Zm0-16a1,1,0,1,0,1,1A1,1,0,0,0,12.5,3Zm8,0a1,1,0,0,0-1,1V20a1,1,0,0,0,2,0V4A1,1,0,0,0,20.5,3Zm-4,16a1,1,0,1,0,1,1A1,1,0,0,0,16.5,19Zm-4-12a1,1,0,1,0,1,1A1,1,0,0,0,12.5,7Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,12.5,15Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,12.5,11Z"/></svg>',
                ),
                array(
                    'keys' => 'border-top',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,18.5a1,1,0,1,0,1,1A1,1,0,0,0,8,18.5Zm0-8a1,1,0,1,0,1,1A1,1,0,0,0,8,10.5Zm4,8a1,1,0,1,0,1,1A1,1,0,0,0,12,18.5ZM4,6.5a1,1,0,1,0,1,1A1,1,0,0,0,4,6.5Zm0,12a1,1,0,1,0,1,1A1,1,0,0,0,4,18.5Zm0-14H20a1,1,0,0,0,0-2H4a1,1,0,0,0,0,2Zm0,10a1,1,0,1,0,1,1A1,1,0,0,0,4,14.5Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,4,10.5Zm8-4a1,1,0,1,0,1,1A1,1,0,0,0,12,6.5Zm8,8a1,1,0,1,0,1,1A1,1,0,0,0,20,14.5Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,20,18.5Zm-8-4a1,1,0,1,0,1,1A1,1,0,0,0,12,14.5Zm8-8a1,1,0,1,0,1,1A1,1,0,0,0,20,6.5Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,20,10.5Zm-8,0a1,1,0,1,0,1,1A1,1,0,0,0,12,10.5Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,10.5Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,16,18.5Z"/></svg>',
                ),
                array(
                    'keys' => 'border-vertical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,3A1,1,0,1,0,4,4,1,1,0,0,0,3,3ZM3,7A1,1,0,1,0,4,8,1,1,0,0,0,3,7ZM19,5a1,1,0,1,0-1-1A1,1,0,0,0,19,5ZM7,11a1,1,0,1,0,1,1A1,1,0,0,0,7,11Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,7,19ZM7,3A1,1,0,1,0,8,4,1,1,0,0,0,7,3ZM3,15a1,1,0,1,0,1,1A1,1,0,0,0,3,15Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,3,11Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,3,19Zm16-4a1,1,0,1,0,1,1A1,1,0,0,0,19,15Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,19,11Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,19,19ZM19,7a1,1,0,1,0,1,1A1,1,0,0,0,19,7ZM15,3a1,1,0,1,0,1,1A1,1,0,0,0,15,3ZM11,3a1,1,0,0,0-1,1V20a1,1,0,0,0,2,0V4A1,1,0,0,0,11,3Zm4,16a1,1,0,1,0,1,1A1,1,0,0,0,15,19Zm0-8a1,1,0,1,0,1,1A1,1,0,0,0,15,11Z"/></svg>',
                ),
                array(
                    'keys' => 'bowling-ball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7.9917,8.00171a1,1,0,1,0,1,1A1,1,0,0,0,7.9917,8.00171ZM11.99121,2.002a10,10,0,1,0,10,10A10.01177,10.01177,0,0,0,11.99121,2.002Zm0,18a8,8,0,1,1,8-8A8.00916,8.00916,0,0,1,11.99121,20.002ZM10.9917,10.00171a1,1,0,1,0,1,1A1,1,0,0,0,10.9917,10.00171Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,10.9917,6.00171Z"/></svg>',
                ),
                array(
                    'keys' => 'box',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.49,7.52a.19.19,0,0,1,0-.08.17.17,0,0,1,0-.07l0-.09-.06-.15,0,0h0l0,0,0,0a.48.48,0,0,0-.09-.11l-.09-.08h0l-.05,0,0,0L16.26,4.45h0l-3.72-2.3A.85.85,0,0,0,12.25,2h-.08a.82.82,0,0,0-.27,0h-.1a1.13,1.13,0,0,0-.33.13L4,6.78l-.09.07-.09.08L3.72,7l-.05.06,0,0-.06.15,0,.09v.06a.69.69,0,0,0,0,.2v8.73a1,1,0,0,0,.47.85l7.5,4.64h0l0,0,.15.06.08,0a.86.86,0,0,0,.52,0l.08,0,.15-.06,0,0h0L20,17.21a1,1,0,0,0,.47-.85V7.63S20.49,7.56,20.49,7.52ZM12,4.17l1.78,1.1L8.19,8.73,6.4,7.63Zm-1,15L5.5,15.81V9.42l5.5,3.4Zm1-8.11L10.09,9.91l5.59-3.47L17.6,7.63Zm6.5,4.72L13,19.2V12.82l5.5-3.4Z"/></svg>',
                ),
                array(
                    'keys' => 'brackets-curly',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6,6A2,2,0,0,1,8,4,1,1,0,0,0,8,2,4,4,0,0,0,4,6V9a2,2,0,0,1-2,2,1,1,0,0,0,0,2,2,2,0,0,1,2,2v3a4,4,0,0,0,4,4,1,1,0,0,0,0-2,2,2,0,0,1-2-2V15a4,4,0,0,0-1.38-3A4,4,0,0,0,6,9Zm16,5a2,2,0,0,1-2-2V6a4,4,0,0,0-4-4,1,1,0,0,0,0,2,2,2,0,0,1,2,2V9a4,4,0,0,0,1.38,3A4,4,0,0,0,18,15v3a2,2,0,0,1-2,2,1,1,0,0,0,0,2,4,4,0,0,0,4-4V15a2,2,0,0,1,2-2,1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'brain',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,11A4,4,0,0,0,20,7.52,3,3,0,0,0,20,7a3,3,0,0,0-3-3l-.18,0A3,3,0,0,0,12,2.78,3,3,0,0,0,7.18,4L7,4A3,3,0,0,0,4,7a3,3,0,0,0,0,.52,4,4,0,0,0-.55,6.59A4,4,0,0,0,7,20l.18,0A3,3,0,0,0,12,21.22,3,3,0,0,0,16.82,20L17,20a4,4,0,0,0,3.5-5.89A4,4,0,0,0,22,11ZM11,8.55a4.72,4.72,0,0,0-.68-.32,1,1,0,0,0-.64,1.9A2,2,0,0,1,11,12v1.55a4.72,4.72,0,0,0-.68-.32,1,1,0,0,0-.64,1.9A2,2,0,0,1,11,17v2a1,1,0,0,1-1,1,1,1,0,0,1-.91-.6,4.07,4.07,0,0,0,.48-.33,1,1,0,1,0-1.28-1.54A2,2,0,0,1,7,18a2,2,0,0,1-2-2,2,2,0,0,1,.32-1.06A3.82,3.82,0,0,0,6,15a1,1,0,0,0,0-2,1.84,1.84,0,0,1-.69-.13A2,2,0,0,1,5,9.25a3.1,3.1,0,0,0,.46.35,1,1,0,1,0,1-1.74.9.9,0,0,1-.34-.33A.92.92,0,0,1,6,7,1,1,0,0,1,7,6a.76.76,0,0,1,.21,0,3.85,3.85,0,0,0,.19.47,1,1,0,0,0,1.37.37A1,1,0,0,0,9.13,5.5,1.06,1.06,0,0,1,9,5a1,1,0,0,1,2,0Zm7.69,4.32A1.84,1.84,0,0,1,18,13a1,1,0,0,0,0,2,3.82,3.82,0,0,0,.68-.06A2,2,0,0,1,19,16a2,2,0,0,1-2,2,2,2,0,0,1-1.29-.47,1,1,0,0,0-1.28,1.54,4.07,4.07,0,0,0,.48.33A1,1,0,0,1,14,20a1,1,0,0,1-1-1V17a2,2,0,0,1,1.32-1.87,1,1,0,0,0-.64-1.9,4.72,4.72,0,0,0-.68.32V12a2,2,0,0,1,1.32-1.87,1,1,0,0,0-.64-1.9,4.72,4.72,0,0,0-.68.32V5a1,1,0,0,1,2,0,1.06,1.06,0,0,1-.13.5,1,1,0,0,0,.36,1.37A1,1,0,0,0,16.6,6.5,3.85,3.85,0,0,0,16.79,6,.76.76,0,0,1,17,6a1,1,0,0,1,1,1,1,1,0,0,1-.17.55.9.9,0,0,1-.33.31,1,1,0,0,0,1,1.74A2.66,2.66,0,0,0,19,9.25a2,2,0,0,1-.27,3.62Z"/></svg>',
                ),
                array(
                    'keys' => 'briefcase-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6.5H16v-1a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v1H5a3,3,0,0,0-3,3v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-9A3,3,0,0,0,19,6.5Zm-9-1a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v1H10Zm10,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13a21.27,21.27,0,0,0,3,.94v.59a1,1,0,0,0,2,0v-.21a23,23,0,0,0,3,.21,23,23,0,0,0,3-.21v.21a1,1,0,0,0,2,0v-.59A21.27,21.27,0,0,0,20,13Zm0-7.69a20.39,20.39,0,0,1-3,1V11.5a1,1,0,0,0-2,0v.74a20.11,20.11,0,0,1-6,0V11.5a1,1,0,0,0-2,0v.33a20.39,20.39,0,0,1-3-1V9.5a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'briefcase',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,6H17V5a3,3,0,0,0-3-3H10A3,3,0,0,0,7,5V6H3A1,1,0,0,0,2,7v4a3,3,0,0,0,1,2.22V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V13.22A3,3,0,0,0,22,11V7A1,1,0,0,0,21,6ZM9,5a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V6H9ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V14H7v1a1,1,0,0,0,2,0V14h6v1a1,1,0,0,0,2,0V14h2Zm1-8a1,1,0,0,1-1,1H17V11a1,1,0,0,0-2,0v1H9V11a1,1,0,0,0-2,0v1H5a1,1,0,0,1-1-1V8H20Z"/></svg>',
                ),
                array(
                    'keys' => 'bright',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Zm9.71-2.71L19.36,9V5.64a1,1,0,0,0-1-1H15.05L12.71,2.29a1,1,0,0,0-1.42,0L9,4.64H5.64a1,1,0,0,0-1,1V9L2.29,11.29a1,1,0,0,0,0,1.42l2.35,2.34v3.31a1,1,0,0,0,1,1H9l2.34,2.35a1,1,0,0,0,1.42,0l2.34-2.35h3.31a1,1,0,0,0,1-1V15.05l2.35-2.34A1,1,0,0,0,21.71,11.29Zm-4.05,2.64a1,1,0,0,0-.3.71v2.72H14.64a1,1,0,0,0-.71.3L12,19.59l-1.93-1.93a1,1,0,0,0-.71-.3H6.64V14.64a1,1,0,0,0-.3-.71L4.41,12l1.93-1.93a1,1,0,0,0,.3-.71V6.64H9.36a1,1,0,0,0,.71-.3L12,4.41l1.93,1.93a1,1,0,0,0,.71.3h2.72V9.36a1,1,0,0,0,.3.71L19.59,12Z"/></svg>',
                ),
                array(
                    'keys' => 'brightness-empty',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,11.29,19.36,9V5.64a1,1,0,0,0-1-1H15.05L12.71,2.29a1,1,0,0,0-1.42,0L9,4.64H5.64a1,1,0,0,0-1,1V9L2.29,11.29a1,1,0,0,0,0,1.42l2.35,2.34v3.31a1,1,0,0,0,1,1H9l2.34,2.35a1,1,0,0,0,1.42,0l2.34-2.35h3.31a1,1,0,0,0,1-1V15.05l2.35-2.34A1,1,0,0,0,21.71,11.29Zm-4.05,2.64a1,1,0,0,0-.3.71v2.72H14.64a1,1,0,0,0-.71.3L12,19.59l-1.93-1.93a1,1,0,0,0-.71-.3H6.64V14.64a1,1,0,0,0-.3-.71L4.41,12l1.93-1.93a1,1,0,0,0,.3-.71V6.64H9.36a1,1,0,0,0,.71-.3L12,4.41l1.93,1.93a1,1,0,0,0,.71.3h2.72V9.36a1,1,0,0,0,.3.71L19.59,12Z"/></svg>',
                ),
                array(
                    'keys' => 'brightness-half',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,8a1,1,0,0,0,0,2,2,2,0,0,1,0,4,1,1,0,0,0,0,2,4,4,0,0,0,0-8Zm9.71,3.29L19.36,9V5.64a1,1,0,0,0-1-1H15.05L12.71,2.29a1,1,0,0,0-1.42,0L9,4.64H5.64a1,1,0,0,0-1,1V9L2.29,11.29a1,1,0,0,0,0,1.42l2.35,2.34v3.31a1,1,0,0,0,1,1H9l2.34,2.35a1,1,0,0,0,1.42,0l2.34-2.35h3.31a1,1,0,0,0,1-1V15.05l2.35-2.34A1,1,0,0,0,21.71,11.29Zm-4.05,2.64a1,1,0,0,0-.3.71v2.72H14.64a1,1,0,0,0-.71.3L12,19.59l-1.93-1.93a1,1,0,0,0-.71-.3H6.64V14.64a1,1,0,0,0-.3-.71L4.41,12l1.93-1.93a1,1,0,0,0,.3-.71V6.64H9.36a1,1,0,0,0,.71-.3L12,4.41l1.93,1.93a1,1,0,0,0,.71.3h2.72V9.36a1,1,0,0,0,.3.71L19.59,12Z"/></svg>',
                ),
                array(
                    'keys' => 'brightness-low',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,11a1,1,0,1,0,1,1A1,1,0,0,0,3,11Zm1.93,6.66a1,1,0,1,0,1.41,0A1,1,0,0,0,4.93,17.66ZM6.34,6.34a1,1,0,1,0-1.41,0A1,1,0,0,0,6.34,6.34ZM12,4a1,1,0,1,0-1-1A1,1,0,0,0,12,4Zm5.66,13.66a1,1,0,1,0,1.41,0A1,1,0,0,0,17.66,17.66ZM21,11a1,1,0,1,0,1,1A1,1,0,0,0,21,11ZM17.66,4.93a1,1,0,1,0,1.41,0A1,1,0,0,0,17.66,4.93ZM12,20a1,1,0,1,0,1,1A1,1,0,0,0,12,20ZM12,6a6,6,0,1,0,6,6A6,6,0,0,0,12,6Zm0,10a4,4,0,1,1,4-4A4,4,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'brightness-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,11H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm7.71.29L19.36,9V5.64a1,1,0,0,0-1-1H15.05L12.71,2.29a1,1,0,0,0-1.42,0L9,4.64H5.64a1,1,0,0,0-1,1V9L2.29,11.29a1,1,0,0,0,0,1.42l2.35,2.34v3.31a1,1,0,0,0,1,1H9l2.34,2.35a1,1,0,0,0,1.42,0l2.34-2.35h3.31a1,1,0,0,0,1-1V15.05l2.35-2.34A1,1,0,0,0,21.71,11.29Zm-4.05,2.64a1,1,0,0,0-.3.71v2.72H14.64a1,1,0,0,0-.71.3L12,19.59l-1.93-1.93a1,1,0,0,0-.71-.3H6.64V14.64a1,1,0,0,0-.3-.71L4.41,12l1.93-1.93a1,1,0,0,0,.3-.71V6.64H9.36a1,1,0,0,0,.71-.3L12,4.41l1.93,1.93a1,1,0,0,0,.71.3h2.72V9.36a1,1,0,0,0,.3.71L19.59,12Z"/></svg>',
                ),
                array(
                    'keys' => 'brightness-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,11H13V10a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V13h1a1,1,0,0,0,0-2Zm7.71.29L19.36,9V5.64a1,1,0,0,0-1-1H15.05L12.71,2.29a1,1,0,0,0-1.42,0L9,4.64H5.64a1,1,0,0,0-1,1V9L2.29,11.29a1,1,0,0,0,0,1.42l2.35,2.34v3.31a1,1,0,0,0,1,1H9l2.34,2.35a1,1,0,0,0,1.42,0l2.34-2.35h3.31a1,1,0,0,0,1-1V15.05l2.35-2.34A1,1,0,0,0,21.71,11.29Zm-4.05,2.64a1,1,0,0,0-.3.71v2.72H14.64a1,1,0,0,0-.71.3L12,19.59l-1.93-1.93a1,1,0,0,0-.71-.3H6.64V14.64a1,1,0,0,0-.3-.71L4.41,12l1.93-1.93a1,1,0,0,0,.3-.71V6.64H9.36a1,1,0,0,0,.71-.3L12,4.41l1.93,1.93a1,1,0,0,0,.71.3h2.72V9.36a1,1,0,0,0,.3.71L19.59,12Z"/></svg>',
                ),
                array(
                    'keys' => 'brightness',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12ZM5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM12,5a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5Zm5.66,2.34a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34Zm-12-.29a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5ZM12,19a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19Z"/></svg>',
                ),
                array(
                    'keys' => 'bring-bottom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14H19a1,1,0,1,0,0,2h1v4H4V16h7a1,1,0,0,0,0-2H10V9A1,1,0,0,0,9,8H3A1,1,0,0,0,2,9v6H2v6a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V15A1,1,0,0,0,21,14ZM4,10H8v4H4ZM12.71,6.7,14,5.41V17a1,1,0,1,0,2,0V5.41L17.29,6.7A1,1,0,0,0,18,7a1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,0,1.41A1,1,0,0,0,12.71,6.7Z"/></svg>',
                ),
                array(
                    'keys' => 'bring-front',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,17.3,10,18.59V7A1,1,0,0,0,8,7v11.6L6.71,17.3a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,0-1.41A1,1,0,0,0,11.29,17.3ZM22,3a1,1,0,0,0-1-1H3A1,1,0,0,0,2,3V9a1,1,0,0,0,1,1H5A1,1,0,0,0,5,8H4V4H20V8H13a1,1,0,0,0,0,2h1v5a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V9h0ZM20,14H16V10h4Z"/></svg>',
                ),
                array(
                    'keys' => 'browser',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H9A3,3,0,0,0,6,5V6H5A3,3,0,0,0,2,9V19a3,3,0,0,0,3,3H15a3,3,0,0,0,3-3V18h1a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM16,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H16Zm0-9H4V9A1,1,0,0,1,5,8H15a1,1,0,0,1,1,1Zm4,5a1,1,0,0,1-1,1H18V9a3,3,0,0,0-.18-1H20Zm0-9H8V5A1,1,0,0,1,9,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'brush-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,18a1,1,0,1,0,1,1A1,1,0,0,0,12,18ZM18,1H6A1,1,0,0,0,5,2v9a3,3,0,0,0,3,3H9v2.37a4,4,0,1,0,6,0V14h1a3,3,0,0,0,3-3V2A1,1,0,0,0,18,1ZM12,21a2,2,0,0,1-1.33-3.48,1,1,0,0,0,.33-.74V14h2v2.78a1,1,0,0,0,.33.74A2,2,0,0,1,12,21Zm5-10a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V10H17Zm0-3H7V3H17Z"/></svg>',
                ),
                array(
                    'keys' => 'bug',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,14h2a1,1,0,0,0,0-2H19V11a5.15,5.15,0,0,0-.21-1.36A5,5,0,0,0,22,5a1,1,0,0,0-2,0,3,3,0,0,1-2.14,2.87A5,5,0,0,0,16,6.4,2.58,2.58,0,0,0,16,6,4,4,0,0,0,8,6a2.58,2.58,0,0,0,0,.4,5,5,0,0,0-1.9,1.47A3,3,0,0,1,4,5,1,1,0,0,0,2,5,5,5,0,0,0,5.21,9.64,5.15,5.15,0,0,0,5,11v1H3a1,1,0,0,0,0,2H5v1a7,7,0,0,0,.14,1.38A5,5,0,0,0,2,21a1,1,0,0,0,2,0,3,3,0,0,1,1.81-2.74,7,7,0,0,0,12.38,0A3,3,0,0,1,20,21a1,1,0,0,0,2,0,5,5,0,0,0-3.14-4.62A7,7,0,0,0,19,15Zm-8,5.9A5,5,0,0,1,7,15V11a3,3,0,0,1,3-3h1ZM10,6a2,2,0,0,1,4,0Zm7,9a5,5,0,0,1-4,4.9V8h1a3,3,0,0,1,3,3Z"/></svg>',
                ),
                array(
                    'keys' => 'building',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,8h1a1,1,0,0,0,0-2H14a1,1,0,0,0,0,2Zm0,4h1a1,1,0,0,0,0-2H14a1,1,0,0,0,0,2ZM9,8h1a1,1,0,0,0,0-2H9A1,1,0,0,0,9,8Zm0,4h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,8H20V3a1,1,0,0,0-1-1H5A1,1,0,0,0,4,3V20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-8,0H11V16h2Zm5,0H15V15a1,1,0,0,0-1-1H10a1,1,0,0,0-1,1v5H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'bullseye',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,5a7,7,0,1,0,7,7A7,7,0,0,0,12,5Zm0,12a5,5,0,1,1,5-5A5,5,0,0,1,12,17Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,12,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,13ZM12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>',
                ),
                array(
                    'keys' => 'bus-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.5,2H6.5a3,3,0,0,0-3,3V17a3,3,0,0,0,2,2.82V21a1,1,0,0,0,2,0V20h10v1a1,1,0,0,0,2,0V19.82a3,3,0,0,0,2-2.82V5A3,3,0,0,0,18.5,2ZM5.5,8h6v4h-6Zm14,9a1,1,0,0,1-1,1H6.5a1,1,0,0,1-1-1V14h14Zm0-5h-6V8h6Zm0-6H5.5V5a1,1,0,0,1,1-1h12a1,1,0,0,1,1,1ZM16.12,16.92a1,1,0,0,0,.38.08,1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.76.76,0,0,0-.09-.18,1.58,1.58,0,0,0-.12-.15l-.15-.12a.76.76,0,0,0-.18-.09A.64.64,0,0,0,16.7,15a1,1,0,0,0-.91.27,1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,.29.7A1,1,0,0,0,16.12,16.92Zm-8,0A1,1,0,0,0,8.5,17a1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.76.76,0,0,0-.09-.18,1.58,1.58,0,0,0-.12-.15l-.15-.12-.18-.09L8.7,15a1,1,0,0,0-.91.27,1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,.29.7A1,1,0,0,0,8.12,16.92Z"/></svg>',
                ),
                array(
                    'keys' => 'bus-school',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M1,12.5v4a1,1,0,0,0,1,1H3a3,3,0,0,0,6,0h6a3,3,0,0,0,6,0h1a1,1,0,0,0,1-1V6.5a3,3,0,0,0-3-3H8.44A3,3,0,0,0,5.6,5.55L4.16,9.86,1.45,11.67A1,1,0,0,0,1,12.5Zm20-3H19v-4h1a1,1,0,0,1,1,1Zm-4,8a1,1,0,1,1,1,1A1,1,0,0,1,17,17.5Zm-2-6h6v4h-.78a3,3,0,0,0-4.44,0H15Zm0-6h2v4H15Zm-4,6h2v4H11Zm0-6h2v4H11Zm-2,4H6.39l1.1-3.32a1,1,0,0,1,.95-.68H9Zm-4,8a1,1,0,1,1,1,1A1,1,0,0,1,5,17.5ZM3,13,5.3,11.5H9v4H8.22a3,3,0,0,0-4.44,0H3Z"/></svg>',
                ),
                array(
                    'keys' => 'bus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.5,17a1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.76.76,0,0,0-.09-.18l-.12-.15a1,1,0,0,0-.33-.21A1,1,0,0,0,8.3,15l-.18.06-.18.09a1.58,1.58,0,0,0-.15.12l-.12.15a.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,1,1Zm8,0a1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.76.76,0,0,0-.09-.18l-.12-.15a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-.76,0,1.15,1.15,0,0,0-.33.21l-.12.15a.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,.29.7A1,1,0,0,0,16.5,17Zm-3-12h-2a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm5-3H6.5a3,3,0,0,0-3,3V17a3,3,0,0,0,2,2.82V21a1,1,0,0,0,2,0V20h10v1a1,1,0,0,0,2,0V19.82a3,3,0,0,0,2-2.82V5A3,3,0,0,0,18.5,2Zm1,15a1,1,0,0,1-1,1H6.5a1,1,0,0,1-1-1V14h14Zm0-5H5.5V5a1,1,0,0,1,1-1h12a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'calculator-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5.5,8H6v.5a1,1,0,0,0,2,0V8h.5a1,1,0,0,0,0-2H8V5.5a1,1,0,0,0-2,0V6H5.5a1,1,0,0,0,0,2ZM4.88,19.12a1,1,0,0,0,1.41,0L7,18.41l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41L8.41,17l.71-.71a1,1,0,0,0-1.41-1.41L7,15.59l-.71-.71a1,1,0,0,0-1.41,1.41l.71.71-.71.71A1,1,0,0,0,4.88,19.12ZM20,1H4A3,3,0,0,0,1,4V20a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V4A3,3,0,0,0,20,1ZM11,21H4a1,1,0,0,1-1-1V13h8Zm0-10H3V4A1,1,0,0,1,4,3h7Zm10,9a1,1,0,0,1-1,1H13V13h8Zm0-9H13V3h7a1,1,0,0,1,1,1Zm-5.5,5.5h3a1,1,0,0,0,0-2h-3a1,1,0,0,0,0,2ZM18.5,6h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Zm-3,13.5h3a1,1,0,0,0,0-2h-3a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'calculator',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12.71,17.29a1,1,0,0,0-.16-.12.56.56,0,0,0-.17-.09.6.6,0,0,0-.19-.06.93.93,0,0,0-.57.06.9.9,0,0,0-.54.54A.84.84,0,0,0,11,18a1,1,0,0,0,.07.38,1.46,1.46,0,0,0,.22.33A1,1,0,0,0,12,19a.84.84,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,13,18a1,1,0,0,0-.08-.38A1,1,0,0,0,12.71,17.29ZM8.55,13.17a.56.56,0,0,0-.17-.09A.6.6,0,0,0,8.19,13a.86.86,0,0,0-.39,0l-.18.06-.18.09-.15.12A1.05,1.05,0,0,0,7,14a1,1,0,0,0,.29.71,1.15,1.15,0,0,0,.33.21A1,1,0,0,0,9,14a1.05,1.05,0,0,0-.29-.71Zm.16,4.12a1,1,0,0,0-.33-.21A1,1,0,0,0,7.8,17l-.18.06a.76.76,0,0,0-.18.09,1.58,1.58,0,0,0-.15.12,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,8,19a.84.84,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,8.71,17.29Zm2.91-4.21a1,1,0,0,0-.33.21A1.05,1.05,0,0,0,11,14a1,1,0,0,0,1.38.92,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,13,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,11.62,13.08Zm5.09,4.21a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,16,19a.84.84,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,16.71,17.29ZM16,5H8A1,1,0,0,0,7,6v4a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V6A1,1,0,0,0,16,5ZM15,9H9V7h6Zm3-8H6A3,3,0,0,0,3,4V20a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V4A3,3,0,0,0,18,1Zm1,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V4A1,1,0,0,1,6,3H18a1,1,0,0,1,1,1Zm-2.45-6.83a.56.56,0,0,0-.17-.09.6.6,0,0,0-.19-.06.86.86,0,0,0-.39,0l-.18.06-.18.09-.15.12A1.05,1.05,0,0,0,15,14a1,1,0,0,0,1.38.92,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,17,14a1.05,1.05,0,0,0-.29-.71Z"/></svg>',
                ),
                array(
                    'keys' => 'calendar-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,19a1,1,0,1,0-1-1A1,1,0,0,0,12,19Zm5,0a1,1,0,1,0-1-1A1,1,0,0,0,17,19Zm0-4a1,1,0,1,0-1-1A1,1,0,0,0,17,15Zm-5,0a1,1,0,1,0-1-1A1,1,0,0,0,12,15ZM19,3H18V2a1,1,0,0,0-2,0V3H8V2A1,1,0,0,0,6,2V3H5A3,3,0,0,0,2,6V20a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V11H20ZM20,9H4V6A1,1,0,0,1,5,5H6V6A1,1,0,0,0,8,6V5h8V6a1,1,0,0,0,2,0V5h1a1,1,0,0,1,1,1ZM7,15a1,1,0,1,0-1-1A1,1,0,0,0,7,15Zm0,4a1,1,0,1,0-1-1A1,1,0,0,0,7,19Z"/></svg>',
                ),
                array(
                    'keys' => 'calendar-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.66,7H15V8a1,1,0,0,0,2,0V7h1a1,1,0,0,1,1,1v3H17.66a1,1,0,0,0,0,2H19v1.34a1,1,0,1,0,2,0V8a3,3,0,0,0-3-3H17V4a1,1,0,0,0-2,0V5H11.66a1,1,0,0,0,0,2ZM21.71,20.29l-1.6-1.6h0L3.71,2.29A1,1,0,0,0,2.29,3.71L4.2,5.61A3,3,0,0,0,3,8V18a3,3,0,0,0,3,3H18a3,3,0,0,0,1.29-.3l1,1a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM5,8a1,1,0,0,1,.66-.93L9.59,11H5ZM6,19a1,1,0,0,1-1-1V13h6.59l6,6Z"/></svg>',
                ),
                array(
                    'keys' => 'calender',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'calling',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.47,9a1,1,0,1,0-1-1A1,1,0,0,0,20.47,9Zm-3,0a1,1,0,1,0-1-1A1,1,0,0,0,17.47,9Zm-3,0a1,1,0,1,0-1-1A1,1,0,0,0,14.47,9ZM18.91,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.48,12.48,0,0,1-2.67-2,12.83,12.83,0,0,1-2-2.66L10,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.23-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-2.24,1,3,3,0,0,0-.73,2.39A19,19,0,0,0,18,21.91a2.56,2.56,0,0,0,.39,0,3,3,0,0,0,3-3v-3A3,3,0,0,0,18.91,13Zm.49,6a1,1,0,0,1-1.15,1,17.12,17.12,0,0,1-9.87-4.85A17.14,17.14,0,0,1,3.54,5.22a1,1,0,0,1,.25-.82,1,1,0,0,1,.74-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.56-.52l.63-1.4a13.69,13.69,0,0,0,1.58.46c.26.06.54.11.81.15a1,1,0,0,1,.78,1Z"/></svg>',
                ),
                array(
                    'keys' => 'camera-change',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12.29,5.21l1.5,1.5a1,1,0,0,0,1.42,0,1,1,0,0,0,.13-1.21H19a1,1,0,0,0,0-2H15.34a1,1,0,0,0-.13-1.21,1,1,0,0,0-1.42,0l-1.5,1.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76A1,1,0,0,0,12.29,5.21ZM22.92,9.12a1,1,0,0,0-.21-.33l-1.5-1.5a1,1,0,0,0-1.42,0,1,1,0,0,0-.13,1.21H16a1,1,0,0,0,0,2h3.66a1,1,0,0,0,.13,1.21,1,1,0,0,0,1.42,0l1.5-1.5a1,1,0,0,0,.21-.33A1,1,0,0,0,22.92,9.12ZM11,10a4,4,0,1,0,4,4A4,4,0,0,0,11,10Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,11,16Zm9-3a1,1,0,0,0-1,1v5a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H6a1,1,0,0,0,1-.69l.54-1.62A1,1,0,0,1,8.44,7H10a1,1,0,0,0,0-2H8.44A3,3,0,0,0,5.59,7.06L5.28,8H4a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V14A1,1,0,0,0,20,13Z"/></svg>',
                ),
                array(
                    'keys' => 'camera-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,10.5a1,1,0,0,0-1,1v7a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1v-8a1,1,0,0,1,1-1H6a1,1,0,0,0,1-.68l.54-1.64a1,1,0,0,1,.95-.68H14a1,1,0,0,0,0-2H8.44A3,3,0,0,0,5.6,6.55l-.32,1H4a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3v-7A1,1,0,0,0,20,10.5Zm-9-1a4,4,0,1,0,4,4A4,4,0,0,0,11,9.5Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,11,15.5Zm11-11H21v-1a1,1,0,0,0-2,0v1H18a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'camera-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M3.71,2.29A1,1,0,0,0,2.29,3.71L5.09,6.5H5a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H19.08l1.21,1.22a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.49,9.33,2.68,2.68a2,2,0,0,1-.88.2,2,2,0,0,1-2-2A2,2,0,0,1,10.2,11.62ZM5,18.5a1,1,0,0,1-1-1v-8a1,1,0,0,1,1-1H7.07l1.7,1.69A3.92,3.92,0,0,0,8,12.5a4,4,0,0,0,4,4,3.92,3.92,0,0,0,2.32-.77l2.77,2.77Zm14-12H17.72l-.31-1a3,3,0,0,0-2.85-2h-4.4a1,1,0,0,0,0,2h4.4a1,1,0,0,1,.95.68l.54,1.63A1,1,0,0,0,17,8.5h2a1,1,0,0,1,1,1v5.84a1,1,0,1,0,2,0V9.5A3,3,0,0,0,19,6.5Z"/></svg>',
                ),
                array(
                    'keys' => 'camera',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6.5H17.72l-.32-1a3,3,0,0,0-2.84-2H9.44A3,3,0,0,0,6.6,5.55l-.32,1H5a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-8A3,3,0,0,0,19,6.5Zm1,11a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1v-8a1,1,0,0,1,1-1H7a1,1,0,0,0,1-.68l.54-1.64a1,1,0,0,1,.95-.68h5.12a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,17,8.5h2a1,1,0,0,1,1,1Zm-8-9a4,4,0,1,0,4,4A4,4,0,0,0,12,8.5Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14.5Z"/></svg>',
                ),
                array(
                    'keys' => 'cancel',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.77,11.36l-5-6A1,1,0,0,0,16,5H5A3,3,0,0,0,2,8v8a3,3,0,0,0,3,3H16a1,1,0,0,0,.77-.36l5-6A1,1,0,0,0,21.77,11.36ZM15.53,17H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7H15.53l4.17,5ZM12.71,9.29a1,1,0,0,0-1.42,0L10,10.59,8.71,9.29a1,1,0,1,0-1.42,1.42L8.59,12l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L10,13.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,12l1.3-1.29A1,1,0,0,0,12.71,9.29Z"/></svg>',
                ),
                array(
                    'keys' => 'capsule',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.5,4.5a5.12,5.12,0,0,0-7.24,0L4.5,12.26a5.12,5.12,0,1,0,7.24,7.24l7.76-7.76A5.12,5.12,0,0,0,19.5,4.5ZM10.32,18.09a3.21,3.21,0,0,1-4.41,0,3.13,3.13,0,0,1,0-4.41L9.09,10.5l4.41,4.41Zm7.77-7.77L14.91,13.5,10.5,9.09l3.18-3.18a3.12,3.12,0,0,1,4.41,4.41Z"/></svg>',
                ),
                array(
                    'keys' => 'capture',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,9A1,1,0,0,0,4,8V5A1,1,0,0,1,5,4H8A1,1,0,0,0,8,2H5A3,3,0,0,0,2,5V8A1,1,0,0,0,3,9ZM8,20H5a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14ZM19,2H16a1,1,0,0,0,0,2h3a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,19,2Zm2,13a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h3a3,3,0,0,0,3-3V16A1,1,0,0,0,21,15Z"/></svg>',
                ),
                array(
                    'keys' => 'car-sideview',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,9.5h-.32L17.43,6.38A3,3,0,0,0,14.65,4.5h-6A3,3,0,0,0,5.7,6.91L5.18,9.5H5a3,3,0,0,0-3,3v3a1,1,0,0,0,1,1H4a3,3,0,0,0,6,0h4a3,3,0,0,0,6,0h1a1,1,0,0,0,1-1v-3A3,3,0,0,0,19,9.5Zm-6-3h1.65a1,1,0,0,1,.92.63l.95,2.37H13Zm-5.34.8a1,1,0,0,1,1-.8H11v3H7.22ZM7,17.5a1,1,0,1,1,1-1A1,1,0,0,1,7,17.5Zm10,0a1,1,0,1,1,1-1A1,1,0,0,1,17,17.5Zm3-3h-.78a3,3,0,0,0-4.44,0H9.22a3,3,0,0,0-4.44,0H4v-2a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'car-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7,13a1,1,0,1,0,1,1A1,1,0,0,0,7,13ZM19.76,9.11,18.41,5.05a3,3,0,0,0-2.85-2H9.66a1,1,0,0,0,0,2h5.9a1,1,0,0,1,1,.69L17.61,9H15.66a1,1,0,0,0,0,2H19a1,1,0,0,1,1,1v3.34a1,1,0,1,0,2,0V12A3,3,0,0,0,19.76,9.11Zm-16-6.82A1,1,0,0,0,2.29,3.71L5.11,6.52,4.24,9.11A3,3,0,0,0,2,12v4a3,3,0,0,0,2,2.82V20a1,1,0,0,0,2,0V19H17.59l.41.41V20a1,1,0,0,0,1,1,.91.91,0,0,0,.46-.13l.83.84a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm3,5.81.9.9H6.39ZM5,17a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H9.59l2,2H11a1,1,0,0,0,0,2h2a.91.91,0,0,0,.46-.13L15.59,17Z"/></svg>',
                ),
                array(
                    'keys' => 'car-wash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7.5,4a1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,7.79,1.29l-1,1a1,1,0,0,0,0,1.42A1,1,0,0,0,7.5,4Zm4,0a1,1,0,0,0,.71-.29l1-1a1,1,0,1,0-1.42-1.42l-1,1a1,1,0,0,0,0,1.42A1,1,0,0,0,11.5,4Zm4,0a1,1,0,0,0,.71-.29l1-1a1,1,0,1,0-1.42-1.42l-1,1a1,1,0,0,0,0,1.42A1,1,0,0,0,15.5,4Zm2.42,11.62a.76.76,0,0,0-.09-.18l-.12-.15-.15-.12a.76.76,0,0,0-.18-.09.6.6,0,0,0-.19-.06,1,1,0,0,0-.9.27,1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,.29.7.91.91,0,0,0,.33.22A1,1,0,0,0,17,17a1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2A.64.64,0,0,0,17.92,15.62Zm1.84-4.51L18.4,7.05a3,3,0,0,0-2.84-2H8.44A3,3,0,0,0,5.6,7.05L4.24,11.11A3,3,0,0,0,2,14v4a3,3,0,0,0,2,2.82V22a1,1,0,0,0,2,0V21H18v1a1,1,0,0,0,2,0V20.82A3,3,0,0,0,22,18V14A3,3,0,0,0,19.76,11.11ZM7.49,7.68A1,1,0,0,1,8.44,7h7.12a1,1,0,0,1,1,.68L17.61,11H6.39ZM20,18a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V14a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-7-3H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm-5.08.62a.76.76,0,0,0-.09-.18l-.12-.15a1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21,1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18A.64.64,0,0,0,6,15.8,1.36,1.36,0,0,0,6,16a1,1,0,0,0,1.71.7A1,1,0,0,0,8,16a1.36,1.36,0,0,0,0-.2A.64.64,0,0,0,7.92,15.62Z"/></svg>',
                ),
                array(
                    'keys' => 'car',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62,13.08a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,8,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,6.62,13.08Zm13.14-4L18.4,5.05a3,3,0,0,0-2.84-2H8.44A3,3,0,0,0,5.6,5.05L4.24,9.11A3,3,0,0,0,2,12v4a3,3,0,0,0,2,2.82V20a1,1,0,0,0,2,0V19H18v1a1,1,0,0,0,2,0V18.82A3,3,0,0,0,22,16V12A3,3,0,0,0,19.76,9.11ZM7.49,5.68A1,1,0,0,1,8.44,5h7.12a1,1,0,0,1,1,.68L17.61,9H6.39ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-3.38-2.92a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3.9.9,0,0,0,.54-.54A.84.84,0,0,0,18,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,16.62,13.08ZM13,13H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'card-atm',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,4.5H5a3,3,0,0,0-3,3v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-9A3,3,0,0,0,19,4.5Zm1,12a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1v-9a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-4-6a3,3,0,0,0-1.51.42,3,3,0,1,0,0,5.16A3,3,0,1,0,16,10.5Zm-2.83,4a1,1,0,0,1-.17,0,1,1,0,0,1,0-2,1,1,0,0,1,.17,0,2.8,2.8,0,0,0,0,1.92Zm2.83,0a1,1,0,1,1,1-1A1,1,0,0,1,16,14.5Z"/></svg>',
                ),
                array(
                    'keys' => 'caret-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.5,11.13,5.5,3.05a1,1,0,0,0-1,0,1,1,0,0,0-.5.87V20.08a1,1,0,0,0,.5.87,1,1,0,0,0,1,0l14-8.08a1,1,0,0,0,0-1.74ZM6,18.35V5.65L17,12Z"/></svg>',
                ),
                array(
                    'keys' => 'cell',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.49,4.73,17,2.17a1,1,0,0,0-1,0L12,4.45,8,2.17a1,1,0,0,0-1,0L2.51,4.73A1,1,0,0,0,2,5.6v5.12a1,1,0,0,0,.51.87l4,2.27V18.4a1,1,0,0,0,.51.87l4.5,2.56a1,1,0,0,0,1,0L17,19.27a1,1,0,0,0,.51-.87V13.86l4-2.27a1,1,0,0,0,.51-.87V5.6A1,1,0,0,0,21.49,4.73ZM4,10.14v-4l3.5-2,3.5,2v4l-3.5,2Zm11.5,7.68-3.5,2-3.5-2v-4l3.5-2,3.5,2ZM20,10.14l-3.5,2-3.5-2v-4l3.5-2,3.5,2Z"/></svg>',
                ),
                array(
                    'keys' => 'celsius',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,19H15a3,3,0,0,1-3-3V8a3,3,0,0,1,3-3h6a1,1,0,0,0,0-2H15a5,5,0,0,0-5,5v8a5,5,0,0,0,5,5h6a1,1,0,0,0,0-2ZM5,3A3,3,0,1,0,8,6,3,3,0,0,0,5,3ZM5,7A1,1,0,1,1,6,6,1,1,0,0,1,5,7Z"/></svg>',
                ),
                array(
                    'keys' => 'channel-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,7h1V8a1,1,0,0,0,2,0V7h1a1,1,0,0,0,0-2H21V4a1,1,0,0,0-2,0V5H18a1,1,0,0,0,0,2Zm2,9a3,3,0,0,0-1.73.56l-2.45-1.45A3.74,3.74,0,0,0,16,14a4,4,0,0,0-3-3.86V7.82a3,3,0,1,0-2,0v2.32A4,4,0,0,0,8,14a3.74,3.74,0,0,0,.18,1.11L5.73,16.56A3,3,0,0,0,4,16a3,3,0,1,0,3,3,3,3,0,0,0-.12-.8l2.3-1.37a4,4,0,0,0,5.64,0l2.3,1.37A3,3,0,1,0,20,16ZM4,20a1,1,0,1,1,1-1A1,1,0,0,1,4,20ZM12,4a1,1,0,1,1-1,1A1,1,0,0,1,12,4Zm0,12a2,2,0,1,1,2-2A2,2,0,0,1,12,16Zm8,4a1,1,0,1,1,1-1A1,1,0,0,1,20,20Z"/></svg>',
                ),
                array(
                    'keys' => 'channel',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,16a3,3,0,0,0-1.73.56l-2.45-1.45A3.74,3.74,0,0,0,16,14a4,4,0,0,0-3-3.86V7.82a3,3,0,1,0-2,0v2.32A4,4,0,0,0,8,14a3.74,3.74,0,0,0,.18,1.11L5.73,16.56A3,3,0,0,0,4,16a3,3,0,1,0,3,3,3,3,0,0,0-.12-.8l2.3-1.37a4,4,0,0,0,5.64,0l2.3,1.37A3,3,0,1,0,20,16ZM4,20a1,1,0,1,1,1-1A1,1,0,0,1,4,20ZM12,4a1,1,0,1,1-1,1A1,1,0,0,1,12,4Zm0,12a2,2,0,1,1,2-2A2,2,0,0,1,12,16Zm8,4a1,1,0,1,1,1-1A1,1,0,0,1,20,20Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-bar-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,20H4V18H7a1,1,0,0,0,0-2H4V14H15a1,1,0,0,0,0-2H4V10h7a1,1,0,0,0,0-2H4V6H19a1,1,0,0,0,0-2H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-bar',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,20H20V5a1,1,0,0,0-2,0V20H16V13a1,1,0,0,0-2,0v7H12V9a1,1,0,0,0-2,0V20H8V17a1,1,0,0,0-2,0v3H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1v2.59l-6.29-6.3a1,1,0,0,0-1.42,0L9,11.59,3.71,6.29A1,1,0,0,0,2.29,7.71l6,6a1,1,0,0,0,1.42,0L13,10.41,18.59,16H16a1,1,0,0,0,0,2h5a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,17V12A1,1,0,0,0,21,11Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-growth-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,20H4V18H7a1,1,0,0,0,0-2H4V14h7a1,1,0,0,0,0-2H4V10H15a1,1,0,0,0,0-2H4V6H19a1,1,0,0,0,0-2H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-growth',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,20H20V5a1,1,0,0,0-2,0V20H16V9a1,1,0,0,0-2,0V20H12V13a1,1,0,0,0-2,0v7H8V17a1,1,0,0,0-2,0v3H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-line',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,16a1.5,1.5,0,0,0,1.5-1.5.77.77,0,0,0,0-.15l2.79-2.79.23,0,.23,0,1.61,1.61s0,.05,0,.08a1.5,1.5,0,1,0,3,0v-.08L20,9.5h0A1.5,1.5,0,1,0,18.5,8a.77.77,0,0,0,0,.15l-3.61,3.61h-.16L13,10a1.49,1.49,0,0,0-3,0L7,13H7a1.5,1.5,0,0,0,0,3Zm13.5,4H3.5V3a1,1,0,0,0-2,0V21a1,1,0,0,0,1,1h18a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'chart-pie-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z"/></svg>',
                ),
                array(
                    'keys' => 'chart-pie',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2a10,10,0,1,0,4.93,18.69l.07,0,.05,0A10,10,0,0,0,12,2Zm1,2.07A8,8,0,0,1,19.93,11H13ZM12,20A8,8,0,0,1,11,4.07V12a1.09,1.09,0,0,0,.07.35l0,.08,0,.07,4,6.87A7.81,7.81,0,0,1,12,20Zm4.83-1.64L13.73,13h6.2A8,8,0,0,1,16.83,18.36Z"/></svg>',
                ),
                array(
                    'keys' => 'chart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,6a1,1,0,0,0-1,1V17a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6ZM7,12a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V13A1,1,0,0,0,7,12Zm10-2a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V11A1,1,0,0,0,17,10Zm2-8H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'chat-bubble-user',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.58,11.3a3.24,3.24,0,0,0,.71-2,3.29,3.29,0,0,0-6.58,0,3.24,3.24,0,0,0,.71,2,5,5,0,0,0-2,2.31,1,1,0,1,0,1.84.78A3,3,0,0,1,12,12.57h0a3,3,0,0,1,2.75,1.82,1,1,0,0,0,.92.61,1.09,1.09,0,0,0,.39-.08,1,1,0,0,0,.53-1.31A5,5,0,0,0,14.58,11.3ZM12,10.57h0a1.29,1.29,0,1,1,1.29-1.28A1.29,1.29,0,0,1,12,10.57ZM18,2H6A3,3,0,0,0,3,5V16a3,3,0,0,0,3,3H8.59l2.7,2.71A1,1,0,0,0,12,22a1,1,0,0,0,.65-.24L15.87,19H18a3,3,0,0,0,3-3V5A3,3,0,0,0,18,2Zm1,14a1,1,0,0,1-1,1H15.5a1,1,0,0,0-.65.24l-2.8,2.4L9.71,17.29A1,1,0,0,0,9,17H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4H18a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'chat-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.29,3.71a1,1,0,0,0,1.42,0,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,21,3a1,1,0,0,0-.29-.71l-.15-.12a.76.76,0,0,0-.18-.09,1,1,0,0,0-1.09.21A1,1,0,0,0,19,3a1,1,0,0,0,.08.38A1.15,1.15,0,0,0,19.29,3.71ZM20,5a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V6A1,1,0,0,0,20,5Zm.06,8a1,1,0,0,0-1.11.87A7,7,0,0,1,12,20H6.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,12,6a6.91,6.91,0,0,1,3.49.94,1,1,0,0,0,1-1.72A8.84,8.84,0,0,0,12,4,9,9,0,0,0,5,18.62L3.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,4,22h8a9,9,0,0,0,8.93-7.88A1,1,0,0,0,20.06,13Z"/></svg>',
                ),
                array(
                    'keys' => 'chat',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,2H6A3,3,0,0,0,3,5V16a3,3,0,0,0,3,3H8.59l2.7,2.71A1,1,0,0,0,12,22a1,1,0,0,0,.65-.24L15.87,19H18a3,3,0,0,0,3-3V5A3,3,0,0,0,18,2Zm1,14a1,1,0,0,1-1,1H15.5a1,1,0,0,0-.65.24l-2.8,2.4L9.71,17.29A1,1,0,0,0,9,17H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4H18a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'check-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'check-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.21,14.75a1,1,0,0,0,1.42,0l4.08-4.08a1,1,0,0,0-1.42-1.42l-3.37,3.38L9.71,11.41a1,1,0,0,0-1.42,1.42ZM21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.71,7.21a1,1,0,0,0-1.42,0L9.84,14.67,6.71,11.53A1,1,0,1,0,5.29,13l3.84,3.84a1,1,0,0,0,1.42,0l8.16-8.16A1,1,0,0,0,18.71,7.21Z"/></svg>',
                ),
                array(
                    'keys' => 'circle-layer',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,2A7,7,0,0,0,8.12,7.74,6,6,0,0,0,5,12.41,5,5,0,1,0,11.59,19a6,6,0,0,0,4.67-3.09A7,7,0,0,0,15,2ZM10,17.43c0,.1,0,.2-.07.31h0a3,3,0,1,1-3.64-3.64h0L6.57,14A2.94,2.94,0,0,1,10,17.43Zm5-3.67a1.8,1.8,0,0,1-.05.19,3.74,3.74,0,0,1-.17.54,4,4,0,0,1-2.7,2.4c0-.18,0-.35-.06-.53s0-.27,0-.4-.12-.38-.18-.57-.07-.24-.12-.36a4.21,4.21,0,0,0-.3-.55c0-.09-.09-.19-.15-.28a5.3,5.3,0,0,0-.6-.73l-.2-.17a5.52,5.52,0,0,0-.53-.43,2.9,2.9,0,0,0-.34-.19,4,4,0,0,0-.5-.27,2.34,2.34,0,0,0-.4-.13,3.13,3.13,0,0,0-.52-.16c-.14,0-.29,0-.44-.06L7.13,12A4,4,0,0,1,9.52,9.3a3.27,3.27,0,0,1,.53-.17l.2-.05A3.74,3.74,0,0,1,11,9a4,4,0,0,1,4,4A3.84,3.84,0,0,1,14.92,13.76Zm2-.16q0-.3,0-.6a6,6,0,0,0-6-6q-.3,0-.6,0A5,5,0,1,1,17,13.6Z"/></svg>',
                ),
                array(
                    'keys' => 'circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'circuit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,13a1,1,0,1,0,1,1A1,1,0,0,0,10,13Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,10,9Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,14,9Zm7,4a1,1,0,0,0,0-2H19V9h2a1,1,0,0,0,0-2H18.82A3,3,0,0,0,17,5.18V3a1,1,0,0,0-2,0V5H13V3a1,1,0,0,0-2,0V5H9V3A1,1,0,0,0,7,3V5.18A3,3,0,0,0,5.18,7H3A1,1,0,0,0,3,9H5v2H3a1,1,0,0,0,0,2H5v2H3a1,1,0,0,0,0,2H5.18A3,3,0,0,0,7,18.82V21a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V18.82A3,3,0,0,0,18.82,17H21a1,1,0,0,0,0-2H19V13Zm-4,3a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8A1,1,0,0,1,8,7h8a1,1,0,0,1,1,1Zm-3-3a1,1,0,1,0,1,1A1,1,0,0,0,14,13Z"/></svg>',
                ),
                array(
                    'keys' => 'clapper-board',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM16.09,4l-4,4H7.91l4-4ZM4,5A1,1,0,0,1,5,4H9.09l-4,4H4ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V10H20ZM20,8H14.91l4-4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'clinic-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,12v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V15h1a1,1,0,0,0,0-2H13V12a1,1,0,0,0-2,0Zm10.66406-1.74756-9-8a.99893.99893,0,0,0-1.32812,0l-9,8a.99991.99991,0,0,0,1.32812,1.49512L4,11.449V21a.99974.99974,0,0,0,1,1H19a.99974.99974,0,0,0,1-1V11.449l.33594.29859a.99991.99991,0,0,0,1.32812-1.49512ZM18,20H6V9.6712l6-5.33331L18,9.6712Z"/></svg>',
                ),
                array(
                    'keys' => 'clipboard-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,14H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm0-4H11a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm2-6H15.82A3,3,0,0,0,13,2H11A3,3,0,0,0,8.18,4H7A3,3,0,0,0,4,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V7A3,3,0,0,0,17,4ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm8,14a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H8V7A1,1,0,0,0,9,8h6a1,1,0,0,0,1-1V6h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'clipboard-blank',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,4H16a2,2,0,0,0-2-2H10A2,2,0,0,0,8,4H7A3,3,0,0,0,4,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V7A3,3,0,0,0,17,4ZM10,4h4V5h0V6H10V4Zm8,15a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H8a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'clipboard-notes',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,14H9a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2ZM17,4H15.82A3,3,0,0,0,13,2H11A3,3,0,0,0,8.18,4H7A3,3,0,0,0,4,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V7A3,3,0,0,0,17,4ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm8,14a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H8V7A1,1,0,0,0,9,8h6a1,1,0,0,0,1-1V6h1a1,1,0,0,1,1,1Zm-3-9H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'clipboard',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,4H15.82A3,3,0,0,0,13,2H11A3,3,0,0,0,8.18,4H7A3,3,0,0,0,4,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V7A3,3,0,0,0,17,4ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm8,14a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H8V7A1,1,0,0,0,9,8h6a1,1,0,0,0,1-1V6h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-eight',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,6a.99974.99974,0,0,0-1,1v4.38379L8.56934,12.60693a.99968.99968,0,1,0,.89843,1.78614l2.98145-1.5A.99874.99874,0,0,0,13,12V7A.99974.99974,0,0,0,12,6Zm0-4A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-five',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm1-8.251V7a1,1,0,0,0-2,0v5a1.00586,1.00586,0,0,0,.11816.47217l1.5,2.79883a1.00029,1.00029,0,0,0,1.76368-.94434Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-nine',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,6a.99974.99974,0,0,0-1,1v4H9a1,1,0,0,0,0,2h3a.99974.99974,0,0,0,1-1V7A.99974.99974,0,0,0,12,6Zm0-4A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-seven',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM12,6a.99974.99974,0,0,0-1,1v4.749L9.61816,14.32666a1.00029,1.00029,0,0,0,1.76368.94434l1.5-2.79883A1.00586,1.00586,0,0,0,13,12V7A.99974.99974,0,0,0,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-ten',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,6a.99974.99974,0,0,0-1,1v3.26758L9.90234,9.63379a1.00016,1.00016,0,0,0-1,1.73242l2.59766,1.5A1,1,0,0,0,13,12V7A.99974.99974,0,0,0,12,6Zm0-4A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-three',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15,11H13V7a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1h3a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'clock-two',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z"/></svg>',
                ),
                array(
                    'keys' => 'clock',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.09814,12.63379,13,11.42285V7a1,1,0,0,0-2,0v5a.99985.99985,0,0,0,.5.86621l2.59814,1.5a1.00016,1.00016,0,1,0,1-1.73242ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'closed-captioning-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-8-8A7.92,7.92,0,0,1,5.69,7.1L7.2,8.61A3,3,0,0,0,6,11v2a3,3,0,0,0,5.59,1.5,1,1,0,1,0-1.72-1,1,1,0,0,1-1.58.19A.93.93,0,0,1,8,13V11a1,1,0,0,1,.67-.92L12,13.46A3,3,0,0,0,14.54,16l2.36,2.36A7.92,7.92,0,0,1,12,20Zm6.31-3.1-1.52-1.52a2.94,2.94,0,0,0,.8-.88,1,1,0,1,0-1.72-1,1,1,0,0,1-.55.41L14,12.59V11a1,1,0,0,1,1.88-.48,1,1,0,0,0,1.37.34,1,1,0,0,0,.34-1.38,3.08,3.08,0,0,0-.46-.59A3,3,0,0,0,12,10.62l-.35-.35a1,1,0,0,0-.1-.79,3.08,3.08,0,0,0-.46-.59,2.94,2.94,0,0,0-1.67-.84L7.1,5.69A7.92,7.92,0,0,1,12,4a8,8,0,0,1,8,8A7.92,7.92,0,0,1,18.31,16.9Z"/></svg>',
                ),
                array(
                    'keys' => 'closed-captioning',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.24,13.14a1,1,0,0,0-1.37.36,1,1,0,0,1-1.58.19A.93.93,0,0,1,8,13V11a1,1,0,0,1,1.88-.48,1,1,0,0,0,1.37.34,1,1,0,0,0,.34-1.38,3.08,3.08,0,0,0-.46-.59A3,3,0,0,0,9,8a3,3,0,0,0-3,3v2a3,3,0,0,0,5.59,1.5A1,1,0,0,0,11.24,13.14Zm6,0a1,1,0,0,0-1.37.36,1,1,0,0,1-1.58.19A.93.93,0,0,1,14,13V11a1,1,0,0,1,1.88-.48,1,1,0,0,0,1.37.34,1,1,0,0,0,.34-1.38,3.08,3.08,0,0,0-.46-.59A3,3,0,0,0,15,8a3,3,0,0,0-3,3v2a3,3,0,0,0,5.59,1.5A1,1,0,0,0,17.24,13.14ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-block',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,7.72A7,7,0,0,0,5.06,9.61a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,13.5a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,12.5,5,5,0,0,0,18.42,7.72Zm-9.25,6a4,4,0,1,0,5.66,0A4.1,4.1,0,0,0,9.17,13.67ZM10,16.5a2,2,0,0,1,2-2,2.09,2.09,0,0,1,.51.07L10.07,17A2.09,2.09,0,0,1,10,16.5Zm3.41,1.41a2,2,0,0,1-1.91.5L13.93,16a2.09,2.09,0,0,1,.07.51A2,2,0,0,1,13.41,17.91Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-bookmark',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,11H10a1,1,0,0,0-1,1v8a1,1,0,0,0,1.56.83l1.94-1.3,1.89,1.26A1,1,0,0,0,15,21a1,1,0,0,0,.44-.1A1,1,0,0,0,16,20V12A1,1,0,0,0,15,11Zm-1,7.12-.94-.63a1,1,0,0,0-1.12,0l-.94.64V13h3Zm4.42-10.9A7,7,0,0,0,5.06,9.11,4,4,0,0,0,6,17a1,1,0,0,0,0-2,2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,12,5,5,0,0,0,18.42,7.22Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.29,14.19,11,17.48,9.71,16.19a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l2,2a1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,0-1.41A1,1,0,0,0,14.29,14.19Zm4.13-5.87a7,7,0,0,0-13.36,1.9,4,4,0,0,0-.38,7.65A1,1,0,1,0,5.32,16,2,2,0,0,1,4,14.1a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.6,1,1,0,0,0,.78.66A3,3,0,0,1,17.75,16,1,1,0,0,0,18,18l.25,0a5,5,0,0,0,.17-9.62Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-computing',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,20H18a1,1,0,0,1-1-1V16a5,5,0,0,0,1.42-9.78A7,7,0,0,0,5.06,8.11,4,4,0,0,0,6,16H7v3a1,1,0,0,1-1,1H3a1,1,0,0,0,0,2H6a3,3,0,0,0,3-3V16h2v5a1,1,0,0,0,2,0V16h2v3a3,3,0,0,0,3,3h3a1,1,0,0,0,0-2ZM6,14a2,2,0,0,1,0-4A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,11a3,3,0,0,1-3,3Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-data-connection',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,18.5H14.82A3,3,0,0,0,13,16.68V13.5h3.17A4.33,4.33,0,0,0,17.47,5,6,6,0,0,0,6.06,6.63,3.5,3.5,0,0,0,7,13.5h4v3.18A3,3,0,0,0,9.18,18.5H3a1,1,0,0,0,0,2H9.18a3,3,0,0,0,5.64,0H21a1,1,0,0,0,0-2Zm-14-7a1.5,1.5,0,0,1,0-3,1,1,0,0,0,1-1,4,4,0,0,1,7.79-1.29,1,1,0,0,0,.78.67A2.31,2.31,0,0,1,18.5,9.17a2.34,2.34,0,0,1-2.33,2.33Zm5,9a1,1,0,1,1,1-1A1,1,0,0,1,12,20.5Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-database-tree',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.5,14.5a2,2,0,0,0-2-2h-6a2,2,0,0,0-2,2h-3v-3h2.33A3.66,3.66,0,0,0,13,4.37,5,5,0,0,0,3.57,5.65,3,3,0,0,0,4.5,11.5h3v8a1,1,0,0,0,1,1h4a2,2,0,0,0,2,2h6a2,2,0,0,0,2-2v-2a2,2,0,0,0-.28-1,2,2,0,0,0,.28-1Zm-18-5a1,1,0,0,1,0-2,1,1,0,0,0,1-1,3,3,0,0,1,5.84-1,1,1,0,0,0,.78.66A1.65,1.65,0,0,1,13.5,7.83,1.67,1.67,0,0,1,11.83,9.5Zm8,9h-3v-2h3a2,2,0,0,0,.28,1A2,2,0,0,0,12.5,18.5Zm2,2v-2h6v2Zm0-4v-2h6v2Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.29,17.29,13,18.59V13a1,1,0,0,0-2,0v5.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3a1,1,0,0,0-1.42-1.42ZM18.42,6.22A7,7,0,0,0,5.06,8.11,4,4,0,0,0,6,16a1,1,0,0,0,0-2,2,2,0,0,1,0-4A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,.24,5.84,1,1,0,1,0,.5,1.94,5,5,0,0,0,.17-9.62Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-drizzle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,19a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM8,11a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V12A1,1,0,0,0,8,11Zm0,5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V17A1,1,0,0,0,8,16Zm4-2a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V15A1,1,0,0,0,12,14Zm6.42-7.78A7,7,0,0,0,5.06,8.11,4,4,0,0,0,2,12a4,4,0,0,0,1.34,3,1,1,0,1,0,1.32-1.5A2,2,0,0,1,4,12a2,2,0,0,1,2-2A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,11a2.91,2.91,0,0,1-.74,2,1,1,0,0,0,1.48,1.34,5,5,0,0,0-2.32-8.08ZM16,11a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V12A1,1,0,0,0,16,11Zm0,5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V17A1,1,0,0,0,16,16ZM12,9a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V10A1,1,0,0,0,12,9Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,18.79a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.05,1.05,0,0,0-.29.71,1,1,0,0,0,.29.71,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.3-1.3A1,1,0,0,0,12.71,18.79ZM12,12.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,12.5Zm6.42-4.79A7,7,0,0,0,5.06,9.61,4,4,0,0,0,6,17.5H8a1,1,0,0,0,0-2H6a2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.66A3,3,0,0,1,17,15.5H16a1,1,0,0,0,0,2h1a5,5,0,0,0,1.42-9.79Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-hail',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,17a1,1,0,1,0,1,1A1,1,0,0,0,12,17ZM8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,2a1,1,0,1,0,1,1A1,1,0,0,0,12,13ZM8,19a1,1,0,1,0,1,1A1,1,0,0,0,8,19Zm0-4a1,1,0,1,0,1,1A1,1,0,0,0,8,15Zm8,0a1,1,0,1,0,1,1A1,1,0,0,0,16,15ZM12,9a1,1,0,1,0,1,1A1,1,0,0,0,12,9Zm4,2a1,1,0,1,0,1,1A1,1,0,0,0,16,11Zm2.42-4.78A7,7,0,0,0,5.06,8.11,4,4,0,0,0,2,12a4,4,0,0,0,1.34,3,1,1,0,1,0,1.32-1.5A2,2,0,0,1,4,12a2,2,0,0,1,2-2A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,11a2.91,2.91,0,0,1-.74,2,1,1,0,0,0,1.48,1.34,5,5,0,0,0-2.32-8.08ZM16,19a1,1,0,1,0,1,1A1,1,0,0,0,16,19Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,7.72A7,7,0,0,0,5.06,9.61a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,13.5a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,12.5,5,5,0,0,0,18.42,7.72ZM12,12.83a2.94,2.94,0,0,0-3.43.53,2.93,2.93,0,0,0,0,4.13l2.72,2.72a1,1,0,0,0,1.42,0l2.72-2.72a2.93,2.93,0,0,0,0-4.13A2.94,2.94,0,0,0,12,12.83Zm2,3.24-2,2-2-2a.88.88,0,0,1-.27-.65.89.89,0,0,1,.27-.65.92.92,0,0,1,1.3,0,1,1,0,0,0,1.42,0,.94.94,0,0,1,1.3,0,.89.89,0,0,1,.27.65A.88.88,0,0,1,14,16.07Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.29,12.29A1,1,0,0,0,12,14l.19,0a.6.6,0,0,0,.19-.06.56.56,0,0,0,.17-.09l.15-.12a1,1,0,0,0,0-1.42A1,1,0,0,0,11.29,12.29ZM12,15a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V16A1,1,0,0,0,12,15Zm6.42-6.78A7,7,0,0,0,5.06,10.11,4,4,0,0,0,6,18H8a1,1,0,0,0,0-2H6a2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,13a3,3,0,0,1-3,3H16a1,1,0,0,0,0,2h1a5,5,0,0,0,1.42-9.78Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,6.72A7,7,0,0,0,5.06,8.61a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,12.5a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,11.5,5,5,0,0,0,18.42,6.72Zm-3.42,9V14.5a3,3,0,0,0-6,0v1.18a3,3,0,0,0,1,5.82h4a3,3,0,0,0,1-5.82ZM11,14.5a1,1,0,0,1,2,0v1H11Zm3,5H10a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-meatball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.5,15.92h-.77l.39-.67a1,1,0,0,0-1.74-1l-.38.67-.38-.67a1,1,0,0,0-1.74,1l.39.67H9.5a1,1,0,0,0,0,2h.77l-.39.66a1,1,0,0,0,1.74,1l.38-.66.38.66a1,1,0,0,0,1.74-1l-.39-.66h.77a1,1,0,0,0,0-2Zm3.92-7.79A7,7,0,0,0,5.06,10,4,4,0,0,0,2,13.92a4,4,0,0,0,3.34,3.93l.16,0a1,1,0,0,0,.16-2,2,2,0,0,1-1.66-2,2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.66,3,3,0,0,1,.62,5.72,1,1,0,1,0,.74,1.85,5,5,0,0,0-.45-9.41Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-moon-hail',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.21,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33A.84.84,0,0,0,7.5,17a1,1,0,0,0,1.38.92,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1.15,1.15,0,0,0,9.21,16.29Zm0,4a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33,1,1,0,1,0,1.84,0A1.15,1.15,0,0,0,9.21,20.29Zm3.85-6.12-.18-.09L12.7,14a1,1,0,0,0-.58.06.93.93,0,0,0-.33.21,1,1,0,0,0-.29.71,1,1,0,0,0,.29.71,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,13.5,15a1.05,1.05,0,0,0-.29-.71Zm.15,4.12a1,1,0,0,0-1.09-.21.9.9,0,0,0-.54.54,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1.15,1.15,0,0,0,13.21,18.29ZM21.7,7.07a1,1,0,0,0-.94-.26,3,3,0,0,1-.65.08,3,3,0,0,1-3-3,3,3,0,0,1,.08-.65A1,1,0,0,0,16,2a4.93,4.93,0,0,0-3.83,4.21A6.24,6.24,0,0,0,10.5,6a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,14.5,1.5,1.5,0,0,1,5.5,13a1,1,0,0,0,1-1,4,4,0,0,1,4-4,4.06,4.06,0,0,1,2.19.66h0a4,4,0,0,1,1.58,2,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,15.61a1,1,0,0,0,1.1,1.68A4.34,4.34,0,0,0,19,13.67a4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,8,1,1,0,0,0,21.7,7.07ZM17.11,9.89a2.72,2.72,0,0,1-.42,0A4.6,4.6,0,0,0,16,9.54a6.06,6.06,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.23A3,3,0,0,1,17.11,9.89Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-moon-meatball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.7,8a1,1,0,0,0-.94-.26,3,3,0,0,1-.65.08,3,3,0,0,1-3-3,3.05,3.05,0,0,1,.08-.66,1,1,0,0,0-.26-.94A1,1,0,0,0,16,2.94a5,5,0,0,0-3.83,4.22,5.86,5.86,0,0,0-1.67-.24A6,6,0,0,0,4.56,12,3.52,3.52,0,0,0,2,15.42a3.47,3.47,0,0,0,1.41,2.79A1,1,0,1,0,4.59,16.6,1.46,1.46,0,0,1,4,15.42a1.5,1.5,0,0,1,1.5-1.5,1,1,0,0,0,1-1,4,4,0,0,1,6.17-3.35l0,0a3.9,3.9,0,0,1,1.57,2,1,1,0,0,0,.78.66,2.33,2.33,0,0,1,.54,4.44,1,1,0,0,0-.52,1.32,1,1,0,0,0,.92.6,1,1,0,0,0,.4-.09,4.33,4.33,0,0,0,2.6-4,4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,8.92,1,1,0,0,0,21.7,8Zm-4.59,2.82a2.72,2.72,0,0,1-.42,0,4.6,4.6,0,0,0-.72-.31,5.91,5.91,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.22A3,3,0,0,1,17.11,10.81ZM12.5,16.92h-.77l.39-.67a1,1,0,0,0-1.74-1l-.38.67-.38-.67a1,1,0,0,0-1.74,1l.39.67H7.5a1,1,0,0,0,0,2h.77l-.39.66a1,1,0,0,0,1.74,1l.38-.66.38.66a1,1,0,1,0,1.74-1l-.39-.66h.77a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-moon-rain',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.5,14a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V15A1,1,0,0,0,8.5,14Zm0,5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,8.5,19ZM21.7,7.07a1,1,0,0,0-.94-.26,3,3,0,0,1-.65.08,3,3,0,0,1-3-3,3.13,3.13,0,0,1,.08-.66,1,1,0,0,0-.26-.93A1,1,0,0,0,16,2a4.93,4.93,0,0,0-3.83,4.21A6.24,6.24,0,0,0,10.5,6a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,14.5,1.5,1.5,0,0,1,5.5,13a1,1,0,0,0,1-1,4,4,0,0,1,4-4,3.91,3.91,0,0,1,2.17.66l0,0a3.94,3.94,0,0,1,1.57,2,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,15.61a1,1,0,0,0,1.1,1.68A4.32,4.32,0,0,0,19,13.67a4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,8,1,1,0,0,0,21.7,7.07ZM17.11,9.89a2.72,2.72,0,0,1-.42,0A4.6,4.6,0,0,0,16,9.54a6.06,6.06,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.23A3,3,0,0,1,17.11,9.89ZM12.5,13a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V14A1,1,0,0,0,12.5,13Zm0,5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V19A1,1,0,0,0,12.5,18Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-moon-showers',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.5,14a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V15A1,1,0,0,0,8.5,14Zm4-1a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V14A1,1,0,0,0,12.5,13Zm9.2-5.93a1,1,0,0,0-.94-.26,3,3,0,0,1-.65.08,3,3,0,0,1-3-3,3.13,3.13,0,0,1,.08-.66,1,1,0,0,0-.26-.93A1,1,0,0,0,16,2a4.93,4.93,0,0,0-3.83,4.21A6.24,6.24,0,0,0,10.5,6a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,14.5,1.5,1.5,0,0,1,5.5,13a1,1,0,0,0,1-1,4,4,0,0,1,4-4,3.91,3.91,0,0,1,2.17.66l0,0a3.94,3.94,0,0,1,1.57,2,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,15.61a1,1,0,0,0,1.1,1.68A4.32,4.32,0,0,0,19,13.67a4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,8,1,1,0,0,0,21.7,7.07ZM17.11,9.89a2.72,2.72,0,0,1-.42,0A4.6,4.6,0,0,0,16,9.54a6.06,6.06,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.23A3,3,0,0,1,17.11,9.89Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-moon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.7,9.07a1,1,0,0,0-.93-.26,3.13,3.13,0,0,1-.66.08,3,3,0,0,1-3-3,3.13,3.13,0,0,1,.08-.66,1,1,0,0,0-.26-.93A1,1,0,0,0,16,4a4.93,4.93,0,0,0-3.83,4.21A6.24,6.24,0,0,0,10.5,8a6,6,0,0,0-5.94,5.13A3.5,3.5,0,0,0,5.5,20h9.17A4.33,4.33,0,0,0,19,15.67a4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,10,1,1,0,0,0,21.7,9.07Zm-7,8.93H5.5a1.5,1.5,0,0,1,0-3,1,1,0,0,0,1-1,4,4,0,0,1,6.18-3.34l0,0a3.94,3.94,0,0,1,1.57,2,1,1,0,0,0,.78.67A2.33,2.33,0,0,1,14.67,18Zm2.44-6.11a2.61,2.61,0,0,1-.42,0,4.6,4.6,0,0,0-.72-.31,6.06,6.06,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.23A3,3,0,0,1,17.11,11.89Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,8.22A7,7,0,0,0,5.06,10.11,4,4,0,0,0,6,18H8a1,1,0,0,0,0-2H6a2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,13a3,3,0,0,1-3,3,1,1,0,0,0,0,2,5,5,0,0,0,1.42-9.78Zm-5.5,10.4a.56.56,0,0,0-.09-.17l-.12-.16a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-1.09.21l-.12.16a.56.56,0,0,0-.09.17.64.64,0,0,0-.06.18,1.5,1.5,0,0,0,0,.2,1.23,1.23,0,0,0,0,.19.6.6,0,0,0,.06.19.56.56,0,0,0,.09.17l.12.16A1.05,1.05,0,0,0,12,20a1,1,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21l.12-.16a.56.56,0,0,0,.09-.17.6.6,0,0,0,.06-.19A1.23,1.23,0,0,0,13,19a1.5,1.5,0,0,0,0-.2A.64.64,0,0,0,12.92,18.62ZM12,11a3,3,0,0,0-2.6,1.5,1,1,0,0,0,.37,1.37,1,1,0,0,0,1.36-.37A1,1,0,0,1,12,13a1,1,0,0,1,0,2,1,1,0,0,0,0,2,3,3,0,0,0,0-6Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-rain-sun',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,7h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,3.8V3a1,1,0,0,0-2,0v.8a4.1,4.1,0,0,0-1.26.52l-.57-.56a1,1,0,0,0-1.41,1.41l.56.57c-.09.15-.16.32-.24.48A5.85,5.85,0,0,0,10.5,6a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,14.5,1.5,1.5,0,0,1,5.5,13a1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,15.61a1,1,0,0,0,1.1,1.68A4.34,4.34,0,0,0,19,13.67a4.19,4.19,0,0,0-.3-1.55l.13.12a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.56-.56A4.25,4.25,0,0,0,20.2,9H21a1,1,0,0,0,0-2ZM17.66,9.65h0a2.09,2.09,0,0,1-.6.42A4.17,4.17,0,0,0,16,9.54a6.12,6.12,0,0,0-2.09-2.49,2.42,2.42,0,0,1,.46-.7h0a2.43,2.43,0,0,1,3.3,0h0a2.37,2.37,0,0,1,0,3.3ZM8.5,14a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V15A1,1,0,0,0,8.5,14Zm4-1a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V14A1,1,0,0,0,12.5,13Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-rain',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.56,12.67a1,1,0,0,0-1.12,0c-.11.08-2.69,1.86-2.69,4.58a3.25,3.25,0,0,0,6.5,0C15.25,14.5,12.67,12.74,12.56,12.67ZM12,18.5a1.25,1.25,0,0,1-1.25-1.25A3.66,3.66,0,0,1,12,14.8a3.61,3.61,0,0,1,1.25,2.45A1.25,1.25,0,0,1,12,18.5ZM18.42,7.72A7,7,0,0,0,5.06,9.61a4,4,0,0,0,.61,7.87h.08a1,1,0,0,0,1-.92,1,1,0,0,0-.92-1.08A2,2,0,0,1,4,13.5a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,.43,5.79,1,1,0,0,0,.62,1.9,5,5,0,0,0-.14-9.53Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-redo',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,12.5a1,1,0,0,0-.91.6,4,4,0,1,0,.55,6.4A1,1,0,1,0,13.32,18a2,2,0,0,1-1.32.5,2,2,0,1,1,1-3.75h-.22a1,1,0,0,0,0,2H15a1,1,0,0,0,1-1V13.5A1,1,0,0,0,15,12.5Zm3.42-4.78A7,7,0,0,0,5.06,9.61a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,13.5a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,12.5,5,5,0,0,0,18.42,7.72Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-share',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.5,15a2,2,0,1,0-2-2l-1.9.87a2,2,0,0,0-1.1-.33,2,2,0,0,0,0,4,1.88,1.88,0,0,0,.92-.24l2.1,1a2,2,0,1,0,.8-1.84l-1.75-.8,1.91-.88A2,2,0,0,0,14.5,15Zm3.92-7.78A7,7,0,0,0,5.06,9.11a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,13a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,12,5,5,0,0,0,18.42,7.22Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,7.22A7,7,0,0,0,5.06,9.11a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,13a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,12,5,5,0,0,0,18.42,7.22Zm-3.63,4.44a2.73,2.73,0,0,1-2.2-.47,1,1,0,0,0-1.18,0,2.72,2.72,0,0,1-2.2.47,1,1,0,0,0-.84.2,1,1,0,0,0-.37.77V16a4.63,4.63,0,0,0,1.84,3.7l1.57,1.15a1,1,0,0,0,1.18,0l1.57-1.16A4.6,4.6,0,0,0,16,16V12.63a1,1,0,0,0-.37-.77A1,1,0,0,0,14.79,11.66ZM14,16A2.62,2.62,0,0,1,13,18l-1,.72L11,18A2.62,2.62,0,0,1,10,16V13.72a4.68,4.68,0,0,0,2-.55,4.68,4.68,0,0,0,2,.55Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-showers-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,13a1,1,0,0,0-1,1v5a1,1,0,0,0,2,0V14A1,1,0,0,0,8,13Zm4-2a1,1,0,0,0-1,1v9a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Zm6.42-4.78A7,7,0,0,0,5.06,8.11,4,4,0,0,0,2,12a4,4,0,0,0,1.34,3,1,1,0,1,0,1.32-1.5A2,2,0,0,1,4,12a2,2,0,0,1,2-2A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,11a2.91,2.91,0,0,1-.74,2,1,1,0,0,0,1.48,1.34,5,5,0,0,0-2.32-8.08ZM16,13a1,1,0,0,0-1,1v5a1,1,0,0,0,2,0V14A1,1,0,0,0,16,13Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-showers-heavy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.89,18.06a1,1,0,0,0-1.28.6l-.73,2a1,1,0,0,0,.6,1.28,1,1,0,0,0,.34.06,1,1,0,0,0,.94-.66l.73-2A1,1,0,0,0,12.89,18.06Zm-4,0a1,1,0,0,0-1.28.6l-.73,2a1,1,0,0,0,.6,1.28,1,1,0,0,0,.34.06,1,1,0,0,0,.94-.66l.73-2A1,1,0,0,0,8.89,18.06Zm0-7a1,1,0,0,0-1.28.6l-1.1,3A1,1,0,0,0,7.45,16a1,1,0,0,0,.94-.66l1.1-3A1,1,0,0,0,8.89,11.06Zm4,0a1,1,0,0,0-1.28.6l-1.1,3A1,1,0,0,0,11.45,16a1,1,0,0,0,.94-.66l1.1-3A1,1,0,0,0,12.89,11.06Zm5.53-4.84A7,7,0,0,0,5.06,8.11,4,4,0,0,0,2,12a4,4,0,0,0,1.34,3,1,1,0,1,0,1.32-1.5A2,2,0,0,1,4,12a2,2,0,0,1,2-2A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,11a2.91,2.91,0,0,1-.74,2,1,1,0,0,0,1.48,1.34,5,5,0,0,0-2.32-8.08ZM16.89,18.06a1,1,0,0,0-1.28.6l-.73,2a1,1,0,0,0,.6,1.28,1,1,0,0,0,.34.06,1,1,0,0,0,.94-.66l.73-2A1,1,0,0,0,16.89,18.06Zm0-7a1,1,0,0,0-1.28.6l-1.1,3A1,1,0,0,0,15.45,16a1,1,0,0,0,.94-.66l1.1-3A1,1,0,0,0,16.89,11.06Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-showers',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,11a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,8,11Zm4,6a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V18A1,1,0,0,0,12,17ZM8,17a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V18A1,1,0,0,0,8,17ZM18.42,6.22A7,7,0,0,0,5.06,8.11,4,4,0,0,0,2,12a4,4,0,0,0,1.34,3,1,1,0,1,0,1.32-1.5A2,2,0,0,1,4,12a2,2,0,0,1,2-2A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67A3,3,0,0,1,20,11a2.91,2.91,0,0,1-.74,2,1,1,0,0,0,1.48,1.34,5,5,0,0,0-2.32-8.08ZM12,11a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Zm4,0a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,16,11Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V18A1,1,0,0,0,16,17Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.71,16.29h0l-13-13A1,1,0,0,0,2.29,4.71L5.65,8.06a7,7,0,0,0-.59,2A4,4,0,0,0,6,18h9.59l2.7,2.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM6,16a2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,.2-1.39L13.59,16ZM18.42,8.22A7,7,0,0,0,12,4a6.74,6.74,0,0,0-2.32.4,1,1,0,0,0,.66,1.88A4.91,4.91,0,0,1,12,6a5,5,0,0,1,4.73,3.39,1,1,0,0,0,.78.67,3,3,0,0,1,1.85,4.79,1,1,0,0,0,.16,1.4,1,1,0,0,0,.62.22,1,1,0,0,0,.78-.38,5,5,0,0,0-2.5-7.87Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-sun-hail',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.21,20.29a1,1,0,0,0-1.09-.21.93.93,0,0,0-.33.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76.9.9,0,0,0,.54.54.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,9.5,21a.84.84,0,0,0-.08-.38A1.15,1.15,0,0,0,9.21,20.29Zm4-2a.93.93,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1.15,1.15,0,0,0,13.21,18.29Zm-4-2a1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21,1.15,1.15,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,9.5,17a.84.84,0,0,0-.08-.38A1.15,1.15,0,0,0,9.21,16.29Zm2.91-2.21a1,1,0,0,0-.33.21,1.05,1.05,0,0,0-.29.71,1,1,0,0,0,.29.71,1.15,1.15,0,0,0,.33.21.84.84,0,0,0,.38.08,1,1,0,0,0,1-1,1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,12.12,14.08ZM21,7h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,3.8V3a1,1,0,0,0-2,0v.8a4.1,4.1,0,0,0-1.26.52l-.57-.56a1,1,0,0,0-1.41,1.41l.56.57c-.09.15-.16.32-.24.48A5.85,5.85,0,0,0,10.5,6a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,14.5,1.5,1.5,0,0,1,5.5,13a1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,15.61a1,1,0,0,0,1.1,1.68A4.34,4.34,0,0,0,19,13.67a4.19,4.19,0,0,0-.3-1.55l.13.12a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.56-.56A4.25,4.25,0,0,0,20.2,9H21a1,1,0,0,0,0-2ZM17.66,9.65h0a2.09,2.09,0,0,1-.6.42A4.17,4.17,0,0,0,16,9.54a6.12,6.12,0,0,0-2.09-2.49,2.42,2.42,0,0,1,.46-.7h0a2.43,2.43,0,0,1,3.3,0h0a2.37,2.37,0,0,1,0,3.3Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-sun-meatball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.5,16.92h-.77l.39-.67a1,1,0,0,0-1.74-1l-.38.67-.38-.67a1,1,0,0,0-1.74,1l.39.67H7.5a1,1,0,0,0,0,2h.77l-.39.66a1,1,0,0,0,1.74,1l.38-.66.38.66a1,1,0,1,0,1.74-1l-.39-.66h.77a1,1,0,0,0,0-2Zm8.5-9h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,4.72v-.8a1,1,0,0,0-2,0v.8a4.1,4.1,0,0,0-1.26.52l-.57-.56a1,1,0,0,0-1.41,1.41l.56.56c-.09.16-.16.33-.24.49a5.85,5.85,0,0,0-1.58-.22A6,6,0,0,0,4.56,12,3.52,3.52,0,0,0,2,15.42a3.47,3.47,0,0,0,1.41,2.79A1,1,0,1,0,4.59,16.6,1.46,1.46,0,0,1,4,15.42a1.5,1.5,0,0,1,1.5-1.5,1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.66,2.33,2.33,0,0,1,.54,4.44,1,1,0,0,0-.52,1.32,1,1,0,0,0,.92.6.93.93,0,0,0,.4-.09,4.33,4.33,0,0,0,2.6-4A4.29,4.29,0,0,0,18.7,13l.13.13a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42l-.56-.56a4.2,4.2,0,0,0,.52-1.26H21a1,1,0,0,0,0-2Zm-3.34,2.64h0a1.89,1.89,0,0,1-.6.41A4.15,4.15,0,0,0,16,10.46,6,6,0,0,0,13.88,8a2.18,2.18,0,0,1,.46-.7h0a2.42,2.42,0,0,1,3.3,0h0a2.34,2.34,0,0,1,0,3.29Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-sun-rain-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.5,19a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,8.5,19Zm0-5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V15A1,1,0,0,0,8.5,14ZM21,7h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,3.8V3a1,1,0,0,0-2,0v.8a4.1,4.1,0,0,0-1.26.52l-.57-.56a1,1,0,0,0-1.41,1.41l.56.57c-.09.15-.16.32-.24.48A5.85,5.85,0,0,0,10.5,6a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,14.5,1.5,1.5,0,0,1,5.5,13a1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,15.61a1,1,0,0,0,1.1,1.68A4.34,4.34,0,0,0,19,13.67a4.19,4.19,0,0,0-.3-1.55l.13.12a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.56-.56A4.25,4.25,0,0,0,20.2,9H21a1,1,0,0,0,0-2ZM17.66,9.65h0a2.09,2.09,0,0,1-.6.42A4.17,4.17,0,0,0,16,9.54a6.12,6.12,0,0,0-2.09-2.49,2.42,2.42,0,0,1,.46-.7h0a2.43,2.43,0,0,1,3.3,0h0a2.37,2.37,0,0,1,0,3.3ZM12.5,18a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V19A1,1,0,0,0,12.5,18Zm0-5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V14A1,1,0,0,0,12.5,13Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-sun-rain',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7.5,15a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V16A1,1,0,0,0,7.5,15ZM22,7H20.9a5.22,5.22,0,0,0-.73-1.76L21,4.47a1,1,0,1,0-1.42-1.42l-.77.78A5,5,0,0,0,17,3.1V2a1,1,0,0,0-2,0V3.1a5.22,5.22,0,0,0-1.76.73l-.77-.78a1,1,0,0,0-1.42,1.42l.78.77a5.06,5.06,0,0,0-.77,2A5.76,5.76,0,0,0,9.5,7a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,3,15.5,1.5,1.5,0,0,1,4.5,14a1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,15,16.61a1,1,0,0,0,1.1,1.68A4.34,4.34,0,0,0,18,14.67a4.41,4.41,0,0,0-.45-1.92,5.17,5.17,0,0,0,1.21-.58l.77.78A1,1,0,0,0,21,13a1,1,0,0,0,0-1.42l-.78-.77A5,5,0,0,0,20.9,9H22a1,1,0,0,0,0-2Zm-3.87,3.12A3,3,0,0,1,16,11h-.06a4.12,4.12,0,0,0-1-.46,5.93,5.93,0,0,0-2-2.38c0-.06,0-.1,0-.16a3,3,0,0,1,.87-2.12,3.1,3.1,0,0,1,4.25,0,3,3,0,0,1,0,4.25ZM7.5,20a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V21A1,1,0,0,0,7.5,20Zm4-1a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,11.5,19Zm0-5a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V15A1,1,0,0,0,11.5,14Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-sun-tear',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.05,14.33a1,1,0,0,0-1.11,0C9.84,14.41,7.5,16,7.5,18.5a3,3,0,0,0,6,0C13.5,16,11.16,14.4,11.05,14.33ZM10.5,19.5a1,1,0,0,1-1-1,3,3,0,0,1,1-2,3,3,0,0,1,1,2A1,1,0,0,1,10.5,19.5ZM21,7.5h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,4.3V3.5a1,1,0,0,0-2,0v.8a4.1,4.1,0,0,0-1.26.52l-.57-.56a1,1,0,0,0-1.41,1.41l.56.57c-.09.15-.16.32-.24.48A5.85,5.85,0,0,0,10.5,6.5a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,15a1.5,1.5,0,0,1,1.5-1.5,1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,16.11a1,1,0,0,0,1.1,1.68,4.3,4.3,0,0,0,1.65-5.18l.13.13a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.56-.56A4.25,4.25,0,0,0,20.2,9.5H21a1,1,0,0,0,0-2Zm-3.34,2.65h0a2.45,2.45,0,0,1-.6.41A4.17,4.17,0,0,0,16,10a6.12,6.12,0,0,0-2.09-2.49,2.25,2.25,0,0,1,.46-.69h0a2.42,2.42,0,0,1,3.29,0h0a2.37,2.37,0,0,1,0,3.3Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-sun',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,9h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,5.8V5a1,1,0,0,0-2,0v.8a4.1,4.1,0,0,0-1.26.52l-.57-.56a1,1,0,0,0-1.41,1.41l.56.57c-.09.15-.16.32-.24.48A5.85,5.85,0,0,0,10.5,8a6,6,0,0,0-5.94,5.13A3.5,3.5,0,0,0,5.5,20h9.17A4.33,4.33,0,0,0,19,15.67a4.19,4.19,0,0,0-.3-1.55l.13.12a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.56-.56A4.25,4.25,0,0,0,20.2,11H21a1,1,0,0,0,0-2Zm-6.33,9H5.5a1.5,1.5,0,0,1,0-3,1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.33,2.33,0,0,1,14.67,18Zm3-6.35h0a2.17,2.17,0,0,1-.6.4A4.49,4.49,0,0,0,16,11.54a6.12,6.12,0,0,0-2.09-2.49,2.25,2.25,0,0,1,.46-.69h0a2.42,2.42,0,0,1,3.29,0h0a2.37,2.37,0,0,1,0,3.3Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,8.22A7,7,0,0,0,5.06,10.11,4,4,0,0,0,6,18a1,1,0,0,0,0-2,2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,.24,5.84,1,1,0,0,0,.5,1.94,5,5,0,0,0,.17-9.62Zm-3.71,6.07a1,1,0,0,0-1.42,0L12,15.59l-1.29-1.3a1,1,0,0,0-1.42,1.42L10.59,17l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,18.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,17l1.3-1.29A1,1,0,0,0,14.71,14.29Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-unlock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,15.5H11v-1A1,1,0,0,1,12.88,14a1,1,0,0,0,1.37.34A1,1,0,0,0,14.59,13a3.08,3.08,0,0,0-.46-.59A3,3,0,0,0,12,11.5a3,3,0,0,0-3,3v1.18a3,3,0,0,0,1,5.82h4a3,3,0,0,0,0-6Zm0,4H10a1,1,0,0,1,0-2h4a1,1,0,0,1,0,2ZM18.42,6.72A7,7,0,0,0,5.06,8.61a4,4,0,0,0-.38,7.66,1.13,1.13,0,0,0,.32.05,1,1,0,0,0,.32-2A2,2,0,0,1,4,12.5a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,1,5.53,1,1,0,1,0,1,1.74A5,5,0,0,0,22,11.5,5,5,0,0,0,18.42,6.72Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.42,8.22A7,7,0,0,0,5.06,10.11,4,4,0,0,0,6,18a1,1,0,0,0,0-2,2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.67,3,3,0,0,1,.24,5.84,1,1,0,0,0,.5,1.94,5,5,0,0,0,.17-9.62Zm-5.71,2.07a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L11,13.41V19a1,1,0,0,0,2,0V13.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-wifi',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.5,5.94a7.1,7.1,0,0,1,7,0,1,1,0,0,0,1.37-.37,1,1,0,0,0-.37-1.36,9.14,9.14,0,0,0-9,0,1,1,0,0,0-.37,1.36A1,1,0,0,0,8.5,5.94Zm9.92,5.27a5.91,5.91,0,0,0-.36-.71,1,1,0,0,0-1.38-.33,1,1,0,0,0-.33,1.37,4.58,4.58,0,0,1,.38.84,1,1,0,0,0,.78.67A3,3,0,0,1,20,16a3,3,0,0,1-3,3L5.66,19A2,2,0,0,1,4,17.4,2,2,0,0,1,6,15a1,1,0,0,0,1-1,4.92,4.92,0,0,1,.67-2.49,1,1,0,0,0-.37-1.37,1,1,0,0,0-1.36.37,6.75,6.75,0,0,0-.88,2.6,4,4,0,0,0-2.13,1.33A4,4,0,0,0,5.46,21h.13L17,21a5,5,0,0,0,1.42-9.79ZM14.87,9s0,0,0-.06A.92.92,0,0,0,15,8.74a1,1,0,0,0-.57-1.29,6.36,6.36,0,0,0-1.74-.38c-.1,0-.2,0-.3,0a5.47,5.47,0,0,0-.81,0,3,3,0,0,0-.31,0,6.36,6.36,0,0,0-1.74.38A1,1,0,0,0,9,8.74a1.22,1.22,0,0,0,.12.19.61.61,0,0,0,0,.11,1,1,0,0,0,1.37.36,3.08,3.08,0,0,1,3,0A1,1,0,0,0,14.87,9ZM11,12a1,1,0,1,0,1-1A1,1,0,0,0,11,12Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud-wind',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,18a1,1,0,1,0,1,1A1,1,0,0,0,5,18Zm14-4H12a1,1,0,0,0,0,2h7a1,1,0,0,1,0,2,1,1,0,0,0,0,2,3,3,0,0,0,0-6Zm-5-3a1,1,0,0,0,1,1h4a3,3,0,0,0,3-3,1,1,0,0,0-2,0,1,1,0,0,1-1,1H15A1,1,0,0,0,14,11Zm-4,4a1,1,0,0,0-1-1H6a2,2,0,0,1,0-4A1,1,0,0,0,7,9a5,5,0,0,1,9.73-1.61,1,1,0,1,0,1.9-.64A7,7,0,0,0,5.06,8.11,4,4,0,0,0,6,16H9A1,1,0,0,0,10,15Zm0-4a1,1,0,1,0,1-1A1,1,0,0,0,10,11Zm4,7H9a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1,1,1,0,0,0,2,0A3,3,0,0,0,14,18Z"/></svg>',
                ),
                array(
                    'keys' => 'cloud',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.42,9.21a7,7,0,0,0-13.36,1.9A4,4,0,0,0,6,19H17a5,5,0,0,0,1.42-9.79ZM17,17H6a2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.66A3,3,0,0,1,17,17Z"/></svg>',
                ),
                array(
                    'keys' => 'clouds',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.47,10.54A6,6,0,0,0,14,7a5.82,5.82,0,0,0-1.39.18,5,5,0,0,0-9,2A3,3,0,0,0,4.5,15h1a4,4,0,0,0,0,.5A3.5,3.5,0,0,0,9,19h9.17a4.33,4.33,0,0,0,1.3-8.46ZM4.5,13a1,1,0,0,1,0-2,1,1,0,0,0,1-1,3,3,0,0,1,3-3,3,3,0,0,1,2.22,1,6,6,0,0,0-2.66,4.13,3.49,3.49,0,0,0-1.5.87Zm13.67,4H9a1.5,1.5,0,0,1,0-3,1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67A2.33,2.33,0,0,1,18.17,17Z"/></svg>',
                ),
                array(
                    'keys' => 'club',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,12.5a5.52,5.52,0,0,0-3.51-5.12,5.49,5.49,0,0,0-11,0A5.5,5.5,0,0,0,8.5,18l.2,0a6.91,6.91,0,0,1-1.24,2.39A1,1,0,0,0,8.24,22h7.52a1,1,0,0,0,.78-1.63A6.91,6.91,0,0,1,15.3,18l.2,0A5.51,5.51,0,0,0,21,12.5ZM10.06,20a8.89,8.89,0,0,0,.81-2.56,5.47,5.47,0,0,0,1.13-.7,5.47,5.47,0,0,0,1.13.7A8.89,8.89,0,0,0,13.94,20Zm2.72-5.3-.08-.08-.08-.08-.07,0-.18-.09-.18-.06h-.38l-.18.06a.56.56,0,0,0-.17.09l-.08,0-.08.08-.08.08A3.5,3.5,0,1,1,7.75,9.08,1.11,1.11,0,0,0,7.91,9a1.42,1.42,0,0,0,.18-.08.83.83,0,0,0,.14-.13.62.62,0,0,0,.21-.31.61.61,0,0,0,.07-.17.69.69,0,0,0,0-.2,1,1,0,0,0,0-.17,3.4,3.4,0,0,1,0-.45,3.5,3.5,0,0,1,7,0,3.4,3.4,0,0,1,0,.45.81.81,0,0,0,0,.16.74.74,0,0,0,0,.21.61.61,0,0,0,.07.17.62.62,0,0,0,.21.31.83.83,0,0,0,.14.13,1.42,1.42,0,0,0,.18.08,1.11,1.11,0,0,0,.16.07,3.5,3.5,0,1,1-3.47,5.62Z"/></svg>',
                ),
                array(
                    'keys' => 'code-branch',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,6.06a3,3,0,0,0-1.15,5.77A2,2,0,0,1,14,13.06H10a3.91,3.91,0,0,0-2,.56V7.88a3,3,0,1,0-2,0v8.36a3,3,0,1,0,2.16.05A2,2,0,0,1,10,15.06h4a4,4,0,0,0,3.91-3.16A3,3,0,0,0,17,6.06Zm-10-2a1,1,0,1,1-1,1A1,1,0,0,1,7,4.06Zm0,16a1,1,0,1,1,1-1A1,1,0,0,1,7,20.06Zm10-10a1,1,0,1,1,1-1A1,1,0,0,1,17,10.06Z"/></svg>',
                ),
                array(
                    'keys' => 'coffee',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,17h4a5,5,0,0,0,5-5V11h1a3,3,0,0,0,0-6H18V4a1,1,0,0,0-1-1H5A1,1,0,0,0,4,4v8A5,5,0,0,0,9,17ZM18,7h1a1,1,0,0,1,0,2H18ZM6,5H16v7a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3ZM21,19H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'cog',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.32,9.55l-1.89-.63.89-1.78A1,1,0,0,0,20.13,6L18,3.87a1,1,0,0,0-1.15-.19l-1.78.89-.63-1.89A1,1,0,0,0,13.5,2h-3a1,1,0,0,0-.95.68L8.92,4.57,7.14,3.68A1,1,0,0,0,6,3.87L3.87,6a1,1,0,0,0-.19,1.15l.89,1.78-1.89.63A1,1,0,0,0,2,10.5v3a1,1,0,0,0,.68.95l1.89.63-.89,1.78A1,1,0,0,0,3.87,18L6,20.13a1,1,0,0,0,1.15.19l1.78-.89.63,1.89a1,1,0,0,0,.95.68h3a1,1,0,0,0,.95-.68l.63-1.89,1.78.89A1,1,0,0,0,18,20.13L20.13,18a1,1,0,0,0,.19-1.15l-.89-1.78,1.89-.63A1,1,0,0,0,22,13.5v-3A1,1,0,0,0,21.32,9.55ZM20,12.78l-1.2.4A2,2,0,0,0,17.64,16l.57,1.14-1.1,1.1L16,17.64a2,2,0,0,0-2.79,1.16l-.4,1.2H11.22l-.4-1.2A2,2,0,0,0,8,17.64l-1.14.57-1.1-1.1L6.36,16A2,2,0,0,0,5.2,13.18L4,12.78V11.22l1.2-.4A2,2,0,0,0,6.36,8L5.79,6.89l1.1-1.1L8,6.36A2,2,0,0,0,10.82,5.2l.4-1.2h1.56l.4,1.2A2,2,0,0,0,16,6.36l1.14-.57,1.1,1.1L17.64,8a2,2,0,0,0,1.16,2.79l1.2.4ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/></svg>',
                ),
                array(
                    'keys' => 'coins',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.22,12A3,3,0,0,0,22,10a3,3,0,0,0-3-3H13.82A3,3,0,0,0,11,3H5A3,3,0,0,0,2,6a3,3,0,0,0,.78,2,3,3,0,0,0,0,4,3,3,0,0,0,0,4A3,3,0,0,0,2,18a3,3,0,0,0,3,3H19a3,3,0,0,0,2.22-5,3,3,0,0,0,0-4ZM11,19H5a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Zm0-4H5a1,1,0,0,1,0-2h6a1,1,0,0,1,0,2Zm0-4H5A1,1,0,0,1,5,9h6a1,1,0,0,1,0,2Zm0-4H5A1,1,0,0,1,5,5h6a1,1,0,0,1,0,2Zm8.69,11.71A.93.93,0,0,1,19,19H13.82a2.87,2.87,0,0,0,0-2H19a1,1,0,0,1,1,1A1,1,0,0,1,19.69,18.71Zm0-4A.93.93,0,0,1,19,15H13.82a2.87,2.87,0,0,0,0-2H19a1,1,0,0,1,1,1A1,1,0,0,1,19.69,14.71Zm0-4A.93.93,0,0,1,19,11H13.82a2.87,2.87,0,0,0,0-2H19a1,1,0,0,1,1,1A1,1,0,0,1,19.69,10.71Z"/></svg>',
                ),
                array(
                    'keys' => 'columns',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM11,20H4V4h7Zm9,0H13V4h7Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M5,8A1,1,0,0,0,7,8V7H8A1,1,0,0,0,8,5H7V4A1,1,0,0,0,5,4V5H4A1,1,0,0,0,4,7H5ZM18,5H12a1,1,0,0,0,0,2h6a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H8a1,1,0,0,1-1-1V12a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,20,21a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,21,20V8A3,3,0,0,0,18,5Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-block',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6H15a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H9a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,21,22a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,22,21V9A3,3,0,0,0,19,6Zm-8.46,4.54A5,5,0,1,0,7,12,5,5,0,0,0,10.54,10.54ZM4,7A3,3,0,0,1,7,4a3,3,0,0,1,1.28.3l-4,4A3,3,0,0,1,4,7ZM9.7,5.71A3,3,0,0,1,10,7,3,3,0,0,1,5.72,9.7Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-chart-lines',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,8a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V9A1,1,0,0,0,12,8ZM8,11a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V12A1,1,0,0,0,8,11ZM19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM16,6a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V7A1,1,0,0,0,16,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.77,9.15l5.44-5.44a1,1,0,1,0-1.42-1.42L6.06,7,4.21,5.17A1,1,0,0,0,2.79,6.59L5.35,9.15a1,1,0,0,0,1.42,0ZM18.5,6H13a1,1,0,0,0,0,2h5.5a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H8.5a1,1,0,0,1-1-1V12.5a1,1,0,0,0-2,0V16a3,3,0,0,0,3,3h8.36l3,2.73a1,1,0,0,0,.68.27,1.1,1.1,0,0,0,.4-.08,1,1,0,0,0,.6-.92V9A3,3,0,0,0,18.5,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-dots',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,9a1,1,0,1,0,1,1A1,1,0,0,0,12,9Zm7-7H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM8,9a1,1,0,1,0,1,1A1,1,0,0,0,8,9Zm8,0a1,1,0,1,0,1,1A1,1,0,0,0,16,9Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.12,11.92a.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3A1,1,0,1,0,8.79,7.29L7.5,8.59V3a1,1,0,0,0-2,0V8.59L4.21,7.29A1,1,0,1,0,2.79,8.71l3,3A1,1,0,0,0,6.12,11.92ZM18.5,6h-5a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H8.5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73a1,1,0,0,0,.68.27,1.1,1.1,0,0,0,.4-.08,1,1,0,0,0,.6-.92V9A3,3,0,0,0,18.5,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-edit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.5,5.5h-4a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H8.5a1,1,0,0,1-1-1v-1a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73a1,1,0,0,0,.68.27,1.1,1.1,0,0,0,.4-.08,1,1,0,0,0,.6-.92V8.5A3,3,0,0,0,18.5,5.5Zm-9.42,7H11.5a1,1,0,0,0,1-1V9.08a1,1,0,0,0-.29-.71L6.63,2.79a1,1,0,0,0-1.41,0L2.79,5.22a1,1,0,0,0,0,1.41l5.58,5.58A1,1,0,0,0,9.08,12.5ZM5.92,4.91,10.5,9.49v1h-1L4.91,5.92Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm0-6a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,6.35a3.07,3.07,0,0,0-3.54.53,3,3,0,0,0,0,4.24L11.29,14a1,1,0,0,0,1.42,0l2.83-2.83a3,3,0,0,0,0-4.24A3.07,3.07,0,0,0,12,6.35Zm2.12,3.36L12,11.83,9.88,9.71a1,1,0,0,1,0-1.42,1,1,0,0,1,1.41,0,1,1,0,0,0,1.42,0,1,1,0,0,1,1.41,0A1,1,0,0,1,14.12,9.71ZM19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-image',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2ZM5.77,16H5a1,1,0,0,1-1-1v-.42l3.3-3.29a1,1,0,0,1,1.41,0l.87.87ZM20,18.59l-2.29-2.3A1,1,0,0,0,17,16H8.59L15.3,9.29a1,1,0,0,1,1.4,0L20,12.58Zm0-8.83L18.12,7.89a3,3,0,0,0-4.24,0L11,10.76l-.88-.87a3.06,3.06,0,0,0-4.24,0L4,11.76V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,11a1,1,0,0,0,1-1V6A1,1,0,0,0,4,6v4A1,1,0,0,0,5,11ZM4.29,3.71a1,1,0,0,0,1.09.21,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,6,3a1,1,0,0,0-.29-.71,1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21A1,1,0,0,0,4,3a1,1,0,0,0,.08.38A1.15,1.15,0,0,0,4.29,3.71ZM17,6H9A1,1,0,0,0,9,8h8a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H7a1,1,0,0,1-1-1V14a1,1,0,0,0-2,0v2a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,19,22a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,20,21V9A3,3,0,0,0,17,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-lines',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,11H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-4H7A1,1,0,0,0,7,9H17a1,1,0,0,0,0-2Zm2-5H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,10V8a3,3,0,0,0-2-2.82V4A3,3,0,0,0,4,4V5.18A3,3,0,0,0,2,8v2a3,3,0,0,0,3,3H9A3,3,0,0,0,12,10ZM6,4A1,1,0,0,1,8,4V5H6ZM4,10V8A1,1,0,0,1,5,7H9a1,1,0,0,1,1,1v2a1,1,0,0,1-1,1H5A1,1,0,0,1,4,10ZM19,7H15a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H9a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,21,23a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,22,22V10A3,3,0,0,0,19,7Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,9H13V8a1,1,0,0,0-2,0V9H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V11h1a1,1,0,0,0,0-2Zm5-7H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-message',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,7H7A1,1,0,0,0,7,9H17a1,1,0,0,0,0-2Zm0,4H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm2-9H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-notes',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,7A1,1,0,1,0,8,8,1,1,0,0,0,7,7Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,7,11Zm10,0H11a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm0-4H11a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm2-5H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,9H13V7a1,1,0,0,0-2,0V9H9a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V11h2a1,1,0,0,0,0-2Zm4-7H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.29,10.3a1,1,0,0,0,1.09,1.63,1.19,1.19,0,0,0,.33-.22,1,1,0,0,0,.21-.32A.85.85,0,0,0,8,11a1,1,0,0,0-.29-.7A1,1,0,0,0,6.29,10.3ZM7,5A1,1,0,0,1,7,7,1,1,0,0,0,7,9,3,3,0,1,0,4.4,4.5a1,1,0,0,0,.37,1.37A1,1,0,0,0,6.13,5.5,1,1,0,0,1,7,5ZM19,6H13a1,1,0,0,0,0,2h6a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H9a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,21,22a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,22,21V9A3,3,0,0,0,19,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-redo',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.3,10.75A1,1,0,1,0,9,9.25,3,3,0,1,1,7,4,3,3,0,0,1,9.23,5H8A1,1,0,0,0,8,7h3a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0h0a5,5,0,1,0,.3,7.75ZM19,6H15a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H9a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,21,22a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,22,21V9A3,3,0,0,0,19,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-search',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6H14a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H9a1,1,0,0,1-1-1V14a1,1,0,0,0-2,0v2a3,3,0,0,0,3,3h8.36l3,2.73A1,1,0,0,0,21,22a1.1,1.1,0,0,0,.4-.08A1,1,0,0,0,22,21V9A3,3,0,0,0,19,6ZM8.57,10l1.72,1.73a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L10,8.57a4.37,4.37,0,0,0,.65-2.26A4.32,4.32,0,1,0,2,6.31a4.32,4.32,0,0,0,4.31,4.32A4.35,4.35,0,0,0,8.57,10ZM4,6.31a2.29,2.29,0,0,1,.68-1.63A2.32,2.32,0,0,1,8,4.68,2.31,2.31,0,0,1,8,8,2.32,2.32,0,0,1,4,6.31Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-share',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.5,6.5h-5a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H9.5a1,1,0,0,1-1-1v-2a1,1,0,0,0-2,0v2a3,3,0,0,0,3,3h8.36l3,2.73a1,1,0,0,0,.68.27,1.1,1.1,0,0,0,.4-.08,1,1,0,0,0,.6-.92V9.5A3,3,0,0,0,19.5,6.5Zm-10,5A2,2,0,1,0,8.32,7.89l-1.75-.8,1.91-.88a2,2,0,0,0,1,.29,2,2,0,1,0-2-2l-1.9.87A2,2,0,0,0,4.5,5a2,2,0,0,0,0,4,2,2,0,0,0,.93-.24l2.09,1A2,2,0,0,0,9.5,11.5Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.57,12a1,1,0,0,0,.58-.19l1.62-1.16A4.56,4.56,0,0,0,10.68,7V3.63a1,1,0,0,0-.37-.77,1,1,0,0,0-.84-.2,3,3,0,0,1-2.33-.48A1,1,0,0,0,6,2.18a3,3,0,0,1-2.33.48,1,1,0,0,0-1.2,1V7a4.55,4.55,0,0,0,1.9,3.7L6,11.81A.94.94,0,0,0,6.57,12ZM4.46,7V4.72a5.16,5.16,0,0,0,2.11-.55,5.12,5.12,0,0,0,2.11.55V7A2.57,2.57,0,0,1,7.61,9l-1,.74L5.53,9A2.57,2.57,0,0,1,4.46,7ZM18.54,6h-5a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1v9.72L18,17.27a.94.94,0,0,0-.68-.27H8.54a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3H16.9l3,2.73a1,1,0,0,0,.67.27,1.15,1.15,0,0,0,.41-.08,1,1,0,0,0,.59-.92V9A3,3,0,0,0,18.54,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.66,6H17a1,1,0,0,1,1,1v6.34a1,1,0,1,0,2,0V7a3,3,0,0,0-3-3H10.66a1,1,0,0,0,0,2ZM21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71l2,2A3,3,0,0,0,4,7V19a1,1,0,0,0,.62.92A.84.84,0,0,0,5,20a1,1,0,0,0,.71-.29L8.41,17h7.18l4.7,4.71a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM8,15a1,1,0,0,0-.71.29L6,16.59V7.41L13.59,15Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5.5,11a1,1,0,0,0,2,0V5.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3A1,1,0,0,0,4.21,6.71L5.5,5.41Zm13-5h-5a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1v9.72l-1.57-1.45a1,1,0,0,0-.68-.27H8.5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v1a3,3,0,0,0,3,3h8.36l3,2.73a1,1,0,0,0,.68.27,1.1,1.1,0,0,0,.4-.08,1,1,0,0,0,.6-.92V9A3,3,0,0,0,18.5,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt-verify',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.71,6.29l-5.3,5.3L8.29,9.47a1,1,0,1,0-1.41,1.41l2.83,2.83a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29l6-6a1,1,0,0,0,0-1.42A1,1,0,0,0,15.71,6.29ZM19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-block',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM20.54,3.46A5,5,0,1,0,22,7,5,5,0,0,0,20.54,3.46ZM14,7a3,3,0,0,1,3-3,3,3,0,0,1,1.29.3l-4,4A3,3,0,0,1,14,7Zm5.12,2.12a3.08,3.08,0,0,1-3.4.57l4-4A3,3,0,0,1,20,7,3,3,0,0,1,19.12,9.12Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-chart-line',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,10a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V11A1,1,0,0,0,12,10ZM8,13a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V14A1,1,0,0,0,8,13ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20ZM16,8a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V9A1,1,0,0,0,16,8Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.29,7.13a1,1,0,0,0,0,1.42l1.92,1.92a1,1,0,0,0,1.42,0l4.08-4.08A1,1,0,1,0,19.29,5L15.92,8.35,14.71,7.13A1,1,0,0,0,13.29,7.13Zm6.62,3.51A1,1,0,0,0,19,11.72,2.62,2.62,0,0,1,19,12a7,7,0,0,1-7,7H6.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,10.53,5.15a7.14,7.14,0,0,1,2.8,0,1,1,0,1,0,.4-2,9.15,9.15,0,0,0-3.61,0A9.05,9.05,0,0,0,3,12a9,9,0,0,0,2,5.62L3.29,19.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,4,21h8a9,9,0,0,0,9-9c0-.15,0-.29,0-.44A1,1,0,0,0,19.91,10.64Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-dots',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,11,6a8.49,8.49,0,0,1,.88,0,1,1,0,1,0,.24-2A8.32,8.32,0,0,0,11,4,9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14Zm2.71-6.74a1,1,0,0,0-1.42,0L19,8.59V3a1,1,0,0,0-2,0V8.59l-1.29-1.3a1,1,0,1,0-1.42,1.42l3,3a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3A1,1,0,0,0,21.71,7.29Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-edit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,4.72,19.28,2.29a1,1,0,0,0-1.41,0L12.29,7.87a1,1,0,0,0-.29.71V11a1,1,0,0,0,1,1h2.42a1,1,0,0,0,.71-.29l5.58-5.58A1,1,0,0,0,21.71,4.72ZM15,10H14V9l4.58-4.58,1,1Zm4,2h0a1,1,0,0,0-1,1,7,7,0,0,1-7,7H5.41l.64-.63a1,1,0,0,0,0-1.42A7,7,0,0,1,11,6a1,1,0,0,0,0-2h0A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,9-9A1,1,0,0,0,19,12Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,14a1,1,0,1,0,1,1A1,1,0,0,0,12,14ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20ZM12,8a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V9A1,1,0,0,0,12,8Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,8.35a3.07,3.07,0,0,0-3.54.53,3,3,0,0,0,0,4.24L11.29,16a1,1,0,0,0,1.42,0l2.83-2.83a3,3,0,0,0,0-4.24A3.07,3.07,0,0,0,12,8.35Zm2.12,3.36L12,13.83,9.88,11.71a1,1,0,0,1,0-1.42,1,1,0,0,1,1.41,0,1,1,0,0,0,1.42,0,1,1,0,0,1,1.41,0A1,1,0,0,1,14.12,11.71ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-image',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,2.44,14.91a.29.29,0,0,0,0,.1,9.83,9.83,0,0,0,1.79,3.32l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9a10,10,0,0,0,9.46-6.78l0-.08A9.89,9.89,0,0,0,22,12,10,10,0,0,0,12,2Zm0,18H5.41l.3-.29,8.41-8.42a1,1,0,0,1,1.4,0l3.62,3.6.23.22A8,8,0,0,1,12,20ZM4.54,14.87l1.58-1.58a1,1,0,0,1,1.41,0l.87.87L5.68,16.9A7.67,7.67,0,0,1,4.54,14.87Zm15.41-2-3-3a3,3,0,0,0-4.24,0L9.82,12.76l-.88-.87a3,3,0,0,0-4.23,0L4,12.56A5.25,5.25,0,0,1,4,12a8,8,0,0,1,16,0A8.27,8.27,0,0,1,20,12.86Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-info-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,9a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V10A1,1,0,0,0,12,9Zm7-7H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H16.59l3.7,3.71A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V5A3,3,0,0,0,19,2Zm1,16.59-2.29-2.3A1,1,0,0,0,17,16H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM12,6a1,1,0,1,0,1,1A1,1,0,0,0,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,11a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,12,8Zm0-6A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-lines',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-4,4H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92,16.13a1,1,0,0,0-1.37.37A7,7,0,0,1,11.5,20H5.91l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,10.62,6.05a1,1,0,1,0-.24-2A9,9,0,0,0,4.47,18.62L2.79,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3.5,22h8a9,9,0,0,0,7.79-4.5A1,1,0,0,0,18.92,16.13Zm.58-9.95V5a3,3,0,0,0-6,0V6.18A3,3,0,0,0,11.5,9v2a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V9A3,3,0,0,0,19.5,6.18ZM15.5,5a1,1,0,0,1,2,0V6h-2Zm4,6a1,1,0,0,1-1,1h-4a1,1,0,0,1-1-1V9a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm2-9H13V10a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V13h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-message',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm5-9H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Zm-2,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,9h6a1,1,0,0,0,0-2H9A1,1,0,0,0,9,9Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-notes',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,11h6a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2ZM7,9a1,1,0,1,0,1,1A1,1,0,0,0,7,9Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,7,13ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Zm5-7H11a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Zm3-9H13V9a1,1,0,0,0-2,0v2H9a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.77,5.87a1,1,0,0,0,1.36-.37A1,1,0,0,1,18,6a1,1,0,0,1-1,1,1,1,0,0,0,0,2,3,3,0,1,0-2.6-4.5A1,1,0,0,0,14.77,5.87ZM19.07,13a1,1,0,0,0-1.12.86A7,7,0,0,1,11,20H5.41l.65-.65a1,1,0,0,0,0-1.41A7,7,0,0,1,11,6a1,1,0,0,0,0-2A9,9,0,0,0,4,18.61L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.93-7.87A1,1,0,0,0,19.07,13Zm-1.69-2.93A1,1,0,0,0,16.8,10l-.18.06-.18.09-.15.13a1,1,0,0,0-.21.32A.84.84,0,0,0,16,11a1,1,0,0,0,.07.39,1,1,0,0,0,.22.32A1,1,0,0,0,17,12a1,1,0,0,0,1-1,.84.84,0,0,0-.08-.38,1.07,1.07,0,0,0-.54-.54Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-redo',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-search',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.21,10.29,19.48,8.57a4.37,4.37,0,0,0,.65-2.26,4.31,4.31,0,1,0-4.32,4.32A4.35,4.35,0,0,0,18.07,10l1.72,1.73a1,1,0,0,0,1.42,0A1,1,0,0,0,21.21,10.29ZM17.45,8A2.32,2.32,0,0,1,13.5,6.31a2.29,2.29,0,0,1,.68-1.63,2.32,2.32,0,0,1,3.27,0,2.31,2.31,0,0,1,0,3.27ZM19.5,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11.5,20H5.91l.64-.63a1,1,0,0,0,0-1.41,7,7,0,0,1-2-5A7,7,0,0,1,8.87,6.52a1,1,0,1,0-.74-1.86,9,9,0,0,0-3.66,14L2.79,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3.5,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19.5,14Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-share',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.06,13.51a1,1,0,0,0-1.11.87A7,7,0,0,1,11,20.5H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.72a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,19.12L2.29,20.79a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22.5h8a9,9,0,0,0,8.93-7.88A1,1,0,0,0,19.06,13.51ZM19,7.5a2,2,0,0,0-1.18.39l-1.75-.8L18,6.21a2,2,0,0,0,1,.29,2,2,0,1,0-2-2l-1.9.87A2,2,0,0,0,14,5a2,2,0,0,0,0,4,2,2,0,0,0,.93-.24l2.09,1A2,2,0,1,0,19,7.5Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.7,2.86a1,1,0,0,0-.84-.2,3,3,0,0,1-2.33-.48,1,1,0,0,0-1.15,0,3,3,0,0,1-2.33.48,1,1,0,0,0-.84.2,1,1,0,0,0-.37.77V7a4.56,4.56,0,0,0,1.91,3.7l1.62,1.16a1,1,0,0,0,1.17,0l1.62-1.16A4.56,4.56,0,0,0,22.07,7V3.63A1,1,0,0,0,21.7,2.86ZM20.07,7A2.57,2.57,0,0,1,19,9l-1,.74L16.91,9A2.57,2.57,0,0,1,15.84,7V4.72A5.17,5.17,0,0,0,18,4.17a5.12,5.12,0,0,0,2.11.55ZM18.93,14a1,1,0,0,0-1.21.72A7,7,0,0,1,10.93,20H5.35L6,19.37A1,1,0,0,0,6,18,7,7,0,0,1,10.93,6a1,1,0,0,0,0-2,9,9,0,0,0-7,14.62L2.23,20.29A1,1,0,0,0,2.93,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,18.93,14Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.19,5.23A7.12,7.12,0,0,1,12,5a7,7,0,0,1,7,7,7.12,7.12,0,0,1-.23,1.81,1,1,0,0,0,.7,1.23,1.15,1.15,0,0,0,.26,0,1,1,0,0,0,1-.74A8.91,8.91,0,0,0,21,12a9,9,0,0,0-9-9,8.91,8.91,0,0,0-2.33.3A1,1,0,0,0,9,4.53,1,1,0,0,0,10.19,5.23ZM21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71L5,6.38A9,9,0,0,0,5,17.62L3.29,19.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,4,21h8a9,9,0,0,0,5.62-2l2.67,2.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM12,19H6.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,6.4,7.81l9.79,9.79A7,7,0,0,1,12,19Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,11,6a1,1,0,0,0,0-2A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14Zm2.71-8.74-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L17,5.41V11a1,1,0,0,0,2,0V5.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,5.29Z"/></svg>',
                ),
                array(
                    'keys' => 'comment-verify',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.29,8.85l-4.73,4.74L8.71,11.73a1,1,0,0,0-1.42,1.42l2.56,2.56a1,1,0,0,0,1.42,0l5.44-5.44a1,1,0,1,0-1.42-1.42ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'comment',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,0-1.41A8,8,0,1,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'comments-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,8H18V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V17a1,1,0,0,0,.62.92A.84.84,0,0,0,3,18a1,1,0,0,0,.71-.29l2.81-2.82H8v1.44a3,3,0,0,0,3,3h6.92l2.37,2.38A1,1,0,0,0,21,22a.84.84,0,0,0,.38-.08A1,1,0,0,0,22,21V11A3,3,0,0,0,19,8ZM8,11v1.89H6.11a1,1,0,0,0-.71.29L4,14.59V5A1,1,0,0,1,5,4H15a1,1,0,0,1,1,1V8H11A3,3,0,0,0,8,11Zm12,7.59-1-1a1,1,0,0,0-.71-.3H11a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'comments',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.61,19.19A7,7,0,0,0,17.87,8.62,8,8,0,1,0,3.68,14.91L2.29,16.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,18H8.69A7,7,0,0,0,15,22h6a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09ZM8,15a6.63,6.63,0,0,0,.08,1H5.41l.35-.34a1,1,0,0,0,0-1.42A5.93,5.93,0,0,1,4,10a6,6,0,0,1,6-6,5.94,5.94,0,0,1,5.65,4c-.22,0-.43,0-.65,0A7,7,0,0,0,8,15ZM18.54,20l.05.05H15a5,5,0,1,1,3.54-1.46,1,1,0,0,0-.3.7A1,1,0,0,0,18.54,20Z"/></svg>',
                ),
                array(
                    'keys' => 'compact-disc',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM12,9a3,3,0,1,0,3,3A3,3,0,0,0,12,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'comparison',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,20H4v-.54l5-5,3.8,3.8a1,1,0,0,0,1.41,0l7.5-7.5a1,1,0,0,0,0-1.42,1,1,0,0,0-1.41,0l-6.8,6.8-3.79-3.8a1,1,0,0,0-1.41,0L4,16.63V11.46l5-5,2.8,2.8a1,1,0,0,0,1.41,0L18,4.47l2.19,2.19a1,1,0,0,0,1.41-1.42L18.69,2.35a1,1,0,0,0-1.41,0l-4.8,4.8L9.69,4.35a1,1,0,0,0-1.41,0L4,8.63V3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'compass',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm1,17.93V19a1,1,0,0,0-2,0v.93A8,8,0,0,1,4.07,13H5a1,1,0,0,0,0-2H4.07A8,8,0,0,1,11,4.07V5a1,1,0,0,0,2,0V4.07A8,8,0,0,1,19.93,11H19a1,1,0,0,0,0,2h.93A8,8,0,0,1,13,19.93ZM15.14,7.55l-5,2.12a1,1,0,0,0-.52.52l-2.12,5a1,1,0,0,0,.21,1.1,1,1,0,0,0,.7.3.93.93,0,0,0,.4-.09l5-2.12a1,1,0,0,0,.52-.52l2.12-5a1,1,0,0,0-1.31-1.31Zm-2.49,5.1-2.28,1,1-2.28,2.28-1Z"/></svg>',
                ),
                array(
                    'keys' => 'compress-alt-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.5,5.5a1,1,0,0,0-1,1V8.09L3.71,2.29A1,1,0,0,0,2.29,3.71L8.09,9.5H6.5a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54,1,1,0,0,0,.08-.38v-4A1,1,0,0,0,10.5,5.5ZM21.71,20.29l-5.8-5.79H17.5a1,1,0,0,0,0-2h-4a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54,1,1,0,0,0-.08.38v4a1,1,0,0,0,2,0V15.91l5.79,5.8a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29Z"/></svg>',
                ),
                array(
                    'keys' => 'compress-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,2.29a1,1,0,0,0-1.42,0L14.5,8.09V6.5a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54,1,1,0,0,0,.38.08h4a1,1,0,0,0,0-2H15.91l5.8-5.79A1,1,0,0,0,21.71,2.29ZM10.88,12.58a1,1,0,0,0-.38-.08h-4a1,1,0,0,0,0,2H8.09l-5.8,5.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5.79-5.8V17.5a1,1,0,0,0,2,0v-4a1,1,0,0,0-.08-.38A1,1,0,0,0,10.88,12.58Z"/></svg>',
                ),
                array(
                    'keys' => 'compress-arrows',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.38,13.08A1,1,0,0,0,10,13H6a1,1,0,0,0,0,2H7.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L9,16.41V18a1,1,0,0,0,2,0V14a1,1,0,0,0-.08-.38A1,1,0,0,0,10.38,13.08ZM10,5A1,1,0,0,0,9,6V7.59L3.71,2.29A1,1,0,0,0,2.29,3.71L7.59,9H6a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,11,10V6A1,1,0,0,0,10,5Zm3.62,5.92A1,1,0,0,0,14,11h4a1,1,0,0,0,0-2H16.41l5.3-5.29a1,1,0,1,0-1.42-1.42L15,7.59V6a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38A1,1,0,0,0,13.62,10.92ZM16.41,15H18a1,1,0,0,0,0-2H14a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,13,14v4a1,1,0,0,0,2,0V16.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'compress-lines',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,20H13V16.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42l.79-.8V20H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2ZM7,4h4V7.59l-.79-.8A1,1,0,1,0,8.79,8.21l2.5,2.5a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,1,0-1.42-1.42l-.79.8V4h4a1,1,0,0,0,0-2H7A1,1,0,0,0,7,4Z"/></svg>',
                ),
                array(
                    'keys' => 'compress-point',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,20.29,15.41,14H17a1,1,0,0,0,0-2H13.41l5.66-5.66a1,1,0,1,0-1.41-1.41L12,10.59V7a1,1,0,0,0-2,0V8.59L3.71,2.29A1,1,0,0,0,2.29,3.71L8.59,10H7a1,1,0,0,0,0,2h3.59L4.93,17.66a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0L12,13.41V17a1,1,0,0,0,2,0V15.41l6.29,6.3a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29Z"/></svg>',
                ),
                array(
                    'keys' => 'compress-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,13.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42l.79-.8V21a1,1,0,0,0,2,0V16.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-1.42-2.58a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2.5-2.5a1,1,0,1,0-1.42-1.42l-.79.8V3a1,1,0,0,0-2,0V7.59l-.79-.8A1,1,0,1,0,8.79,8.21Z"/></svg>',
                ),
                array(
                    'keys' => 'compress',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,9h5a1,1,0,0,0,0-2H17V3a1,1,0,0,0-2,0V8A1,1,0,0,0,16,9ZM8,15H3a1,1,0,0,0,0,2H7v4a1,1,0,0,0,2,0V16A1,1,0,0,0,8,15ZM8,2A1,1,0,0,0,7,3V7H3A1,1,0,0,0,3,9H8A1,1,0,0,0,9,8V3A1,1,0,0,0,8,2ZM21,15H16a1,1,0,0,0-1,1v5a1,1,0,0,0,2,0V17h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'confused',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,9a1,1,0,1,0,1,1A1,1,0,0,0,9,9Zm5.66,4.56-4.19,1.5A1,1,0,0,0,10.8,17a1,1,0,0,0,.34-.06l4.2-1.5a1,1,0,1,0-.68-1.88ZM15,9a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'constructor',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,9.67V9.5a7.95,7.95,0,0,0-5.59-7.62l-.06,0a8.32,8.32,0,0,0-2.59-.36A8.21,8.21,0,0,0,4,9.67a3,3,0,0,0,0,5.66,8,8,0,0,0,8,7.17h.23a8.13,8.13,0,0,0,7.68-7.16A3,3,0,0,0,20,9.67ZM12.18,20.5a6,6,0,0,1-6.09-5H17.86A6.09,6.09,0,0,1,12.18,20.5Zm6.82-7H5a1,1,0,0,1,0-2H7a1,1,0,0,0,0-2H6A6.4,6.4,0,0,1,9,4.35V7.5a1,1,0,0,0,2,0V3.59a7.34,7.34,0,0,1,.82-.09H12a6.64,6.64,0,0,1,1,.09V7.5a1,1,0,0,0,2,0V4.32a6.65,6.65,0,0,1,1.18.87A6,6,0,0,1,18,9.5H17a1,1,0,0,0,0,2h2a1,1,0,0,1,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'copy-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,20H8a3,3,0,0,1-3-3V7A1,1,0,0,0,3,7V17a5,5,0,0,0,5,5h8a1,1,0,0,0,0-2ZM21,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0L14.06,2H10A3,3,0,0,0,7,5V15a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V9S21,9,21,8.94ZM15,5.41,17.59,8H16a1,1,0,0,1-1-1ZM19,15a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h3V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'copy-landscape',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,19H6a3,3,0,0,1-3-3V8A1,1,0,0,0,1,8v8a5,5,0,0,0,5,5H18a1,1,0,0,0,0-2Zm5-9.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0L16.06,3H8A3,3,0,0,0,5,6v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V10S23,10,23,9.94ZM17,6.41,19.59,9H18a1,1,0,0,1-1-1ZM21,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V6A1,1,0,0,1,8,5h7V8a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'copy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,14.05,2H10A3,3,0,0,0,7,5V6H6A3,3,0,0,0,3,9V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V18h1a3,3,0,0,0,3-3V9S21,9,21,8.94ZM15,5.41,17.59,8H16a1,1,0,0,1-1-1ZM15,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V9A1,1,0,0,1,6,8H7v7a3,3,0,0,0,3,3h5Zm4-4a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h3V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'copyright',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,9h2a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v4a3,3,0,0,0,3,3h2a3,3,0,0,0,3-3,1,1,0,0,0-2,0,1,1,0,0,1-1,1H11a1,1,0,0,1-1-1V10A1,1,0,0,1,11,9Zm1-7A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-down-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.69,2a1,1,0,0,0-1,1V13.37a2,2,0,0,1-2,2h-8l2.92-2.92A1,1,0,0,0,9.24,11L4.61,15.66a1.19,1.19,0,0,0-.22.33,1,1,0,0,0,0,.76,1,1,0,0,0,.22.33l4.63,4.63a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L7.73,17.37h8a4,4,0,0,0,4-4V3A1,1,0,0,0,18.69,2Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-down-right-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.92,12.62a1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L17.59,12H8a1,1,0,0,1-1-1V7A1,1,0,0,0,5,7v4a3,3,0,0,0,3,3h9.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,.21-.33A1,1,0,0,0,20.92,12.62Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-down-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.61,16a1.19,1.19,0,0,0-.22-.33L14.76,11a1,1,0,0,0-1.41,1.41l2.92,2.92h-7a3,3,0,0,1-3-3V3a1,1,0,1,0-2,0v9.37a5,5,0,0,0,5,5h7l-2.92,2.92a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l4.63-4.63a1,1,0,0,0,.22-.33A1,1,0,0,0,19.61,16Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-left-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,4.31H11.63a5,5,0,0,0-5,5v7L3.71,13.35a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.63,4.63a1,1,0,0,0,.33.22.94.94,0,0,0,.76,0,1.19,1.19,0,0,0,.33-.22L13,14.76a1,1,0,0,0-1.41-1.41L8.63,16.27v-7a3,3,0,0,1,3-3H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-right-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,13.35a1,1,0,0,0-1.42,0l-2.92,2.92v-8a4,4,0,0,0-4-4H3a1,1,0,1,0,0,2H13.37a2,2,0,0,1,2,2v8l-2.92-2.92A1,1,0,0,0,11,14.76l4.62,4.63a1.19,1.19,0,0,0,.33.22.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.22l4.63-4.63A1,1,0,0,0,21.71,13.35Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-up-left-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,9.5H7.41l1.3-1.29A1,1,0,0,0,7.29,6.79l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,11.5H17a1,1,0,0,1,1,1v4a1,1,0,0,0,2,0v-4A3,3,0,0,0,17,9.5Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-up-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.69,6.63h-7l2.92-2.92a1,1,0,0,0,0-1.42,1,1,0,0,0-1.41,0L4.61,6.92a1,1,0,0,0-.22.33,1,1,0,0,0,0,.76,1.19,1.19,0,0,0,.22.33L9.24,13a1,1,0,0,0,.7.3,1,1,0,0,0,.71-1.71L7.73,8.63h7a3,3,0,0,1,3,3V21a1,1,0,0,0,2,0V11.63A5,5,0,0,0,14.69,6.63Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-up-right-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.92,10.12a1,1,0,0,0-.21-.33l-3-3a1,1,0,1,0-1.42,1.42l1.3,1.29H7a3,3,0,0,0-3,3v4a1,1,0,0,0,2,0v-4a1,1,0,0,1,1-1h9.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,.21-.33A1,1,0,0,0,19.92,10.12Z"/></svg>',
                ),
                array(
                    'keys' => 'corner-up-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.61,7.25a1,1,0,0,0-.22-.33L14.76,2.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l2.92,2.92h-8a4,4,0,0,0-4,4V21a1,1,0,0,0,2,0V10.63a2,2,0,0,1,2-2h8l-2.92,2.92a1,1,0,0,0,.71,1.71,1,1,0,0,0,.7-.3l4.63-4.62A1.19,1.19,0,0,0,19.61,8,1,1,0,0,0,19.61,7.25Z"/></svg>',
                ),
                array(
                    'keys' => 'coronavirus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.5,9A1.5,1.5,0,1,0,11,10.5,1.5,1.5,0,0,0,9.5,9ZM9,14a1,1,0,1,0,1,1A1,1,0,0,0,9,14Zm6-6a1,1,0,1,0,1,1A1,1,0,0,0,15,8Zm-.5,4A1.5,1.5,0,1,0,16,13.5,1.5,1.5,0,0,0,14.5,12ZM22,11H20.941a8.95168,8.95168,0,0,0-1.916-4.6109l.75336-.75336a.99989.99989,0,0,0-1.41406-1.41406L17.6109,4.975A8.95168,8.95168,0,0,0,13,3.059V2a1,1,0,0,0-2,0V3.059A8.95168,8.95168,0,0,0,6.3891,4.975l-.75336-.75336A.99989.99989,0,0,0,4.22168,5.63574L4.975,6.3891A8.95168,8.95168,0,0,0,3.059,11H2a1,1,0,0,0,0,2H3.059a8.95168,8.95168,0,0,0,1.916,4.6109l-.75336.75336a.99989.99989,0,1,0,1.41406,1.41406L6.3891,19.025A8.95168,8.95168,0,0,0,11,20.941V22a1,1,0,0,0,2,0V20.941a8.95168,8.95168,0,0,0,4.6109-1.916l.75336.75336a.99989.99989,0,0,0,1.41406-1.41406L19.025,17.6109A8.95168,8.95168,0,0,0,20.941,13H22a1,1,0,0,0,0-2Zm-4,2h.92017A7.00413,7.00413,0,0,1,13,18.92017V17a1,1,0,0,0-2,0v1.92017A7.00413,7.00413,0,0,1,5.07983,13H6a1,1,0,0,0,0-2H5.07983A7.00413,7.00413,0,0,1,11,5.07983V7a1,1,0,0,0,2,0V5.07983A7.00413,7.00413,0,0,1,18.92017,11H18a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'create-dashboard',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10,13H4a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,19H5V15H9ZM20,3H14a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,20,3ZM19,9H15V5h4Zm1,7H18V14a1,1,0,0,0-2,0v2H14a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V18h2a1,1,0,0,0,0-2ZM10,3H4A1,1,0,0,0,3,4v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,10,3ZM9,9H5V5H9Z"/></svg>',
                ),
                array(
                    'keys' => 'creative-commons-pd',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-8-8A7.92,7.92,0,0,1,5.69,7.1L8.05,9.47A3.07,3.07,0,0,0,8,10v4a3,3,0,0,0,3,3h2a3,3,0,0,0,1.89-.69l2,2A7.92,7.92,0,0,1,12,20Zm-2-6V11.41l3.46,3.46A.91.91,0,0,1,13,15H11A1,1,0,0,1,10,14Zm8.31,2.9L16,14.53A3.07,3.07,0,0,0,16,14a1,1,0,0,0-1-1,.91.91,0,0,0-.46.13l-4-4A.91.91,0,0,1,11,9h2a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H11a3,3,0,0,0-1.89.69l-2-2A7.92,7.92,0,0,1,12,4a8,8,0,0,1,8,8A7.92,7.92,0,0,1,18.31,16.9Z"/></svg>',
                ),
                array(
                    'keys' => 'credit-card-search',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,17.57a4.3,4.3,0,1,0-3.67,2.06A4.37,4.37,0,0,0,18.57,19l1.72,1.73a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM18,17a2.37,2.37,0,0,1-3.27,0,2.32,2.32,0,0,1,0-3.27,2.31,2.31,0,0,1,3.27,0A2.32,2.32,0,0,1,18,17ZM19,3H5A3,3,0,0,0,2,6v9a3,3,0,0,0,3,3H9a1,1,0,0,0,0-2H5a1,1,0,0,1-1-1V9H20v1a1,1,0,0,0,2,0V6A3,3,0,0,0,19,3Zm1,4H4V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1ZM10,11H7a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'credit-card',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,15h3a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2ZM19,5H5A3,3,0,0,0,2,8v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8A3,3,0,0,0,19,5Zm1,12a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V11H20Zm0-8H4V8A1,1,0,0,1,5,7H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'crockery',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,12.15V3a1,1,0,0,0-2,0v9.15a4.16,4.16,0,0,0-3,4c0,2.05,1.52,5.8,4,5.8s4-3.75,4-5.8A4.16,4.16,0,0,0,18,12.15ZM17,20c-.8,0-2-2.27-2-3.8A2.11,2.11,0,0,1,17,14a2.11,2.11,0,0,1,2,2.2C19,17.73,17.8,20,17,20ZM10,2A1,1,0,0,0,9,3V8.46L8,9.13V3A1,1,0,0,0,6,3V9.13L5,8.46V3A1,1,0,0,0,3,3V9a1,1,0,0,0,.45.83L6,11.54V21a1,1,0,0,0,2,0V11.54l2.55-1.71A1,1,0,0,0,11,9V3A1,1,0,0,0,10,2Z"/></svg>',
                ),
                array(
                    'keys' => 'crop-alt-rotate-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.71,16.29a1,1,0,0,0-1.42,1.42l.3.29H8a3,3,0,0,1-3-3V13a1,1,0,0,0-2,0v2a5,5,0,0,0,5,5h.59l-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0,0-1.42ZM20,12H19V5a1,1,0,0,0-1-1H11V3A1,1,0,0,0,9,3V4H8A1,1,0,0,0,8,6H9v7a1,1,0,0,0,1,1h7v1a1,1,0,0,0,2,0V14h1a1,1,0,0,0,0-2Zm-3,0H11V6h6Z"/></svg>',
                ),
                array(
                    'keys' => 'crop-alt-rotate-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,4h-.59l.3-.29a1,1,0,1,0-1.42-1.42l-2,2a1,1,0,0,0,0,1.42l2,2a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L15.41,6H16a3,3,0,0,1,3,3v2a1,1,0,0,0,2,0V9A5,5,0,0,0,16,4Zm0,14H15V11a1,1,0,0,0-1-1H7V9A1,1,0,0,0,5,9v1H4a1,1,0,0,0,0,2H5v7a1,1,0,0,0,1,1h7v1a1,1,0,0,0,2,0V20h1a1,1,0,0,0,0-2Zm-3,0H7V12h6Z"/></svg>',
                ),
                array(
                    'keys' => 'crop-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,16H18V7a1,1,0,0,0-1-1H8V5A1,1,0,0,0,6,5V6H5A1,1,0,0,0,5,8H6v9a1,1,0,0,0,1,1h9v1a1,1,0,0,0,2,0V18h1a1,1,0,0,0,0-2Zm-3,0H8V8h8Z"/></svg>',
                ),
                array(
                    'keys' => 'crosshair-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,11a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm0-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm1,17.93V17a1,1,0,0,0-2,0v2.93A8,8,0,0,1,4.07,13H7a1,1,0,0,0,0-2H4.07A8,8,0,0,1,11,4.07V7a1,1,0,0,0,2,0V4.07A8,8,0,0,1,19.93,11H17a1,1,0,0,0,0,2h2.93A8,8,0,0,1,13,19.93Z"/></svg>',
                ),
                array(
                    'keys' => 'crosshair',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11H19.93A8,8,0,0,0,13,4.07V3a1,1,0,0,0-2,0V4.07A8,8,0,0,0,4.07,11H3a1,1,0,0,0,0,2H4.07A8,8,0,0,0,11,19.93V21a1,1,0,0,0,2,0V19.93A8,8,0,0,0,19.93,13H21a1,1,0,0,0,0-2Zm-4,2h.91A6,6,0,0,1,13,17.91V17a1,1,0,0,0-2,0v.91A6,6,0,0,1,6.09,13H7a1,1,0,0,0,0-2H6.09A6,6,0,0,1,11,6.09V7a1,1,0,0,0,2,0V6.09A6,6,0,0,1,17.91,11H17a1,1,0,0,0,0,2Zm-5-2a1,1,0,1,0,1,1A1,1,0,0,0,12,11Z"/></svg>',
                ),
                array(
                    'keys' => 'crosshairs',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,11H19.93A8,8,0,0,0,13,4.07V3a1,1,0,0,0-2,0V4.07A8,8,0,0,0,4.07,11H3a1,1,0,0,0,0,2H4.07A8,8,0,0,0,11,19.93V21a1,1,0,0,0,2,0V19.93A8,8,0,0,0,19.93,13H21a1,1,0,0,0,0-2Zm-9,7a6,6,0,1,1,6-6A6,6,0,0,1,12,18Zm0-9a3,3,0,1,0,3,3A3,3,0,0,0,12,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'css3-simple',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.772,3.36426A1.00062,1.00062,0,0,0,20,3H6A1,1,0,0,0,6,5H18.78613l-.78094,4H5a1,1,0,0,0,0,2H17.61475l-1.1626,5.95508-6.32324,1.99658L4.71875,17.25244l.20361-1.06494a1.00015,1.00015,0,0,0-1.96484-.375L2.5874,17.75244A1.00059,1.00059,0,0,0,3.27,18.894L9.83008,20.9541a1.00175,1.00175,0,0,0,.60107-.00049l7.18994-2.27a1.00064,1.00064,0,0,0,.68018-.7622l2.68018-13.73A1.00008,1.00008,0,0,0,20.772,3.36426Z"/></svg>',
                ),
                array(
                    'keys' => 'cube',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.47,7.37s0,0,0-.08l-.06-.15a.71.71,0,0,0-.07-.09.94.94,0,0,0-.09-.12l-.09-.07L20,6.78l-7.5-4.63a1,1,0,0,0-1.06,0L4,6.78l-.09.08-.09.07a.94.94,0,0,0-.09.12.71.71,0,0,0-.07.09l-.06.15s0,0,0,.08a1.15,1.15,0,0,0,0,.26v8.74a1,1,0,0,0,.47.85l7.5,4.63h0a.47.47,0,0,0,.15.06s.05,0,.08,0a.86.86,0,0,0,.52,0s.05,0,.08,0a.47.47,0,0,0,.15-.06h0L20,17.22a1,1,0,0,0,.47-.85V7.63A1.15,1.15,0,0,0,20.47,7.37ZM11,19.21l-5.5-3.4V9.43L11,12.82Zm1-8.12L6.4,7.63,12,4.18l5.6,3.45Zm6.5,4.72L13,19.21V12.82l5.5-3.39Z"/></svg>',
                ),
                array(
                    'keys' => 'dashboard',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>',
                ),
                array(
                    'keys' => 'data-sharing',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.52,3.87A5,5,0,0,0,11.44,4H7A3,3,0,0,0,4,7v4a1,1,0,0,0,2,0V7A1,1,0,0,1,7,6H9.78A3,3,0,0,0,9,8a3,3,0,0,0,3,3h7.33a3.66,3.66,0,0,0,1.19-7.13ZM19.33,9H12a1,1,0,0,1,0-2,1,1,0,0,0,1-1,3,3,0,0,1,5.84-1,1,1,0,0,0,.78.67A1.65,1.65,0,0,1,21,7.33,1.67,1.67,0,0,1,19.33,9ZM19,13a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H14.74a3.66,3.66,0,0,0-2.22-2.13,5,5,0,0,0-9.45,1.28A3,3,0,0,0,4,23h7.33a3.66,3.66,0,0,0,3.6-3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13Zm-7.67,8H4a1,1,0,0,1,0-2,1,1,0,0,0,1-1,3,3,0,0,1,5.84-1,1,1,0,0,0,.78.67A1.65,1.65,0,0,1,13,19.33,1.67,1.67,0,0,1,11.33,21Z"/></svg>',
                ),
                array(
                    'keys' => 'database-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,17a1,1,0,1,0,1,1A1,1,0,0,0,8,17Zm0-6a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm8-9H8A4,4,0,0,0,4,6V18a4,4,0,0,0,4,4h8a4,4,0,0,0,4-4V6A4,4,0,0,0,16,2Zm2,16a2,2,0,0,1-2,2H8a2,2,0,0,1-2-2V15.44A3.91,3.91,0,0,0,8,16h8a3.91,3.91,0,0,0,2-.56Zm0-6a2,2,0,0,1-2,2H8a2,2,0,0,1-2-2V9.44A3.91,3.91,0,0,0,8,10h8a3.91,3.91,0,0,0,2-.56ZM16,8H8A2,2,0,0,1,8,4h8a2,2,0,0,1,0,4Z"/></svg>',
                ),
                array(
                    'keys' => 'database',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,16.5a1,1,0,1,0,1,1A1,1,0,0,0,8,16.5ZM12,2C8,2,4,3.37,4,6V18c0,2.63,4,4,8,4s8-1.37,8-4V6C20,3.37,16,2,12,2Zm6,16c0,.71-2.28,2-6,2s-6-1.29-6-2V14.73A13.16,13.16,0,0,0,12,16a13.16,13.16,0,0,0,6-1.27Zm0-6c0,.71-2.28,2-6,2s-6-1.29-6-2V8.73A13.16,13.16,0,0,0,12,10a13.16,13.16,0,0,0,6-1.27ZM12,8C8.28,8,6,6.71,6,6s2.28-2,6-2,6,1.29,6,2S15.72,8,12,8ZM8,10.5a1,1,0,1,0,1,1A1,1,0,0,0,8,10.5Z"/></svg>',
                ),
                array(
                    'keys' => 'desert',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,2a4,4,0,1,0,4,4A4,4,0,0,0,18,2Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,18,8ZM15,20H13V18a1,1,0,0,0-2,0v2H9V16.62l3.45-1.73A1,1,0,0,0,13,14V10a1,1,0,0,0-2,0v3.38l-2,1V8A1,1,0,0,0,7,8v8.38l-2-1V13a1,1,0,0,0-2,0v3a1,1,0,0,0,.55.89L7,18.62V20H3a1,1,0,0,0,0,2H15a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'desktop-alt-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71l1,1A3,3,0,0,0,3,6v8a3,3,0,0,0,3,3H9v2H6a1,1,0,0,0,0,2H18a1,1,0,0,0,.93-.66l1.36,1.37a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM5,6.41,9.59,11H5ZM13,19H11V17h2ZM6,15a1,1,0,0,1-1-1V13h6.59l2,2Zm9,4V17h.59l2,2ZM9.66,5H18a1,1,0,0,1,1,1v5H17.66a1,1,0,0,0,0,2H19v1a.37.37,0,0,1,0,.11,1,1,0,0,0,.78,1.18l.2,0a1,1,0,0,0,1-.8A2.84,2.84,0,0,0,21,14V6a3,3,0,0,0-3-3H9.66a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'desktop-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H8v2H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2H16V18h3a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM14,20H10V18h4Zm6-5a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V14H20Zm0-3H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'desktop-cloud-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M4.5,10H10a3,3,0,0,0,1.07-5.8,4,4,0,0,0-7.48,1A2.5,2.5,0,0,0,4.5,10Zm0-3a1,1,0,0,0,1-1,2,2,0,0,1,3.89-.64,1,1,0,0,0,.78.66A1,1,0,0,1,11,7a1,1,0,0,1-1,1H4.5a.5.5,0,0,1,0-1ZM19,2H14a1,1,0,0,0,0,2h5a1,1,0,0,1,1,1v7H3a1,1,0,0,0-1,1v2a3,3,0,0,0,3,3H8v2H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2H16V18h3a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM14,20H10V18h4Zm6-5a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V14H20Z"/></svg>',
                ),
                array(
                    'keys' => 'desktop-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.66,6H18a1,1,0,0,1,1,1v6a.94.94,0,0,1-.14.5,1,1,0,0,0,.31,1.38.94.94,0,0,0,.53.16,1,1,0,0,0,.84-.46A2.94,2.94,0,0,0,21,13V7a3,3,0,0,0-3-3H10.66a1,1,0,0,0,0,2ZM21.71,20.29,5.86,4.45h0L3.71,2.29A1,1,0,0,0,2.29,3.71L3.69,5.1A3,3,0,0,0,3,7v6a3,3,0,0,0,3,3h5v2H7a1,1,0,0,0,0,2H17a1,1,0,0,0,.93-.66l2.36,2.37a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM6,14a1,1,0,0,1-1-1V7a1,1,0,0,1,.12-.46L12.59,14Zm7,4V16h1.59l2,2Z"/></svg>',
                ),
                array(
                    'keys' => 'desktop',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,3H5A3,3,0,0,0,2,6v8a3,3,0,0,0,3,3h6v2H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2H13V17h6a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Zm1,11a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'dialpad-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,9.25A2.75,2.75,0,1,0,7.75,12,2.75,2.75,0,0,0,5,9.25Zm0,4A1.25,1.25,0,1,1,6.25,12,1.25,1.25,0,0,1,5,13.25Zm7-4A2.75,2.75,0,1,0,14.75,12,2.75,2.75,0,0,0,12,9.25Zm0,4A1.25,1.25,0,1,1,13.25,12,1.25,1.25,0,0,1,12,13.25Zm7-5.5A2.75,2.75,0,1,0,16.25,5,2.75,2.75,0,0,0,19,7.75Zm0-4A1.25,1.25,0,1,1,17.75,5,1.25,1.25,0,0,1,19,3.75Zm0,5.5A2.75,2.75,0,1,0,21.75,12,2.75,2.75,0,0,0,19,9.25Zm0,4A1.25,1.25,0,1,1,20.25,12,1.25,1.25,0,0,1,19,13.25ZM5,2.25A2.75,2.75,0,1,0,7.75,5,2.75,2.75,0,0,0,5,2.25Zm0,4A1.25,1.25,0,1,1,6.25,5,1.25,1.25,0,0,1,5,6.25Zm7,10A2.75,2.75,0,1,0,14.75,19,2.75,2.75,0,0,0,12,16.25Zm0,4A1.25,1.25,0,1,1,13.25,19,1.25,1.25,0,0,1,12,20.25Zm0-18A2.75,2.75,0,1,0,14.75,5,2.75,2.75,0,0,0,12,2.25Zm0,4A1.25,1.25,0,1,1,13.25,5,1.25,1.25,0,0,1,12,6.25Z"/></svg>',
                ),
                array(
                    'keys' => 'dialpad',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,2.25H3A.76.76,0,0,0,2.25,3V7A.76.76,0,0,0,3,7.75H7A.76.76,0,0,0,7.75,7V3A.76.76,0,0,0,7,2.25Zm-.75,4H3.75V3.75h2.5ZM21,2.25H17a.76.76,0,0,0-.75.75V7a.76.76,0,0,0,.75.75h4A.76.76,0,0,0,21.75,7V3A.76.76,0,0,0,21,2.25Zm-.75,4h-2.5V3.75h2.5ZM14,2.25H10A.76.76,0,0,0,9.25,3V7a.76.76,0,0,0,.75.75h4A.76.76,0,0,0,14.75,7V3A.76.76,0,0,0,14,2.25Zm-.75,4h-2.5V3.75h2.5ZM7,9.25H3a.76.76,0,0,0-.75.75v4a.76.76,0,0,0,.75.75H7A.76.76,0,0,0,7.75,14V10A.76.76,0,0,0,7,9.25Zm-.75,4H3.75v-2.5h2.5Zm7.75-4H10a.76.76,0,0,0-.75.75v4a.76.76,0,0,0,.75.75h4a.76.76,0,0,0,.75-.75V10A.76.76,0,0,0,14,9.25Zm-.75,4h-2.5v-2.5h2.5Zm7.75-4H17a.76.76,0,0,0-.75.75v4a.76.76,0,0,0,.75.75h4a.76.76,0,0,0,.75-.75V10A.76.76,0,0,0,21,9.25Zm-.75,4h-2.5v-2.5h2.5Zm-6.25,3H10a.76.76,0,0,0-.75.75v4a.76.76,0,0,0,.75.75h4a.76.76,0,0,0,.75-.75V17A.76.76,0,0,0,14,16.25Zm-.75,4h-2.5v-2.5h2.5Z"/></svg>',
                ),
                array(
                    'keys' => 'diamond',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,10.35,14.22,2.94A3.06,3.06,0,0,0,9.75,3L4,10.35A3.05,3.05,0,0,0,3.51,12,3.09,3.09,0,0,0,4,13.58l.06.07,5.74,7.41A3,3,0,0,0,12,22a3.06,3.06,0,0,0,2.26-1L20,13.65a3,3,0,0,0-.06-3.3Zm-1.57,2.14-5.67,7.22a1.11,1.11,0,0,1-1.42.07L5.65,12.47A1,1,0,0,1,5.51,12a1.11,1.11,0,0,1,.1-.45l5.67-7.22a1.11,1.11,0,0,1,1.42-.07l5.63,7.28a1,1,0,0,1,.16.54A1.11,1.11,0,0,1,18.39,12.49Z"/></svg>',
                ),
                array(
                    'keys' => 'diary-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,2H5A1,1,0,0,0,4,3V21a1,1,0,0,0,1,1H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2ZM8,20H6V4H8Zm10-1a1,1,0,0,1-1,1H10V4h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'diary',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,2H5A1,1,0,0,0,4,3V19a1,1,0,0,0,1,1H6v1a1,1,0,0,0,1,1H7a1,1,0,0,0,1-1V20h9a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2ZM14,18H6V4h8Zm4-1a1,1,0,0,1-1,1H16V4h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'dice-five',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,2H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3ZM8,15a1,1,0,1,0,1,1A1,1,0,0,0,8,15Zm4-4a1,1,0,1,0,1,1A1,1,0,0,0,12,11ZM8,7A1,1,0,1,0,9,8,1,1,0,0,0,8,7Zm8,8a1,1,0,1,0,1,1A1,1,0,0,0,16,15Zm0-8a1,1,0,1,0,1,1A1,1,0,0,0,16,7Z"/></svg>',
                ),
                array(
                    'keys' => 'dice-four',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,14a1,1,0,1,0,1,1A1,1,0,0,0,15,14ZM9,8a1,1,0,1,0,1,1A1,1,0,0,0,9,8Zm0,6a1,1,0,1,0,1,1A1,1,0,0,0,9,14Zm6-6a1,1,0,1,0,1,1A1,1,0,0,0,15,8Zm2-6H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3Z"/></svg>',
                ),
                array(
                    'keys' => 'dice-one',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,2H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3Zm-8-6a1,1,0,1,0,1,1A1,1,0,0,0,12,11Z"/></svg>',
                ),
                array(
                    'keys' => 'dice-six',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0,1,1A1,1,0,0,0,9,11Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,9,15ZM9,7a1,1,0,1,0,1,1A1,1,0,0,0,9,7Zm6,0a1,1,0,1,0,1,1A1,1,0,0,0,15,7Zm2-5H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3Zm-5-6a1,1,0,1,0,1,1A1,1,0,0,0,15,11Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,15,15Z"/></svg>',
                ),
                array(
                    'keys' => 'dice-three',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,11a1,1,0,1,0,1,1A1,1,0,0,0,12,11ZM8,7A1,1,0,1,0,9,8,1,1,0,0,0,8,7Zm9-5H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3Zm-4-2a1,1,0,1,0,1,1A1,1,0,0,0,16,15Z"/></svg>',
                ),
                array(
                    'keys' => 'dice-two',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0,1,1A1,1,0,0,0,9,11Zm8-9H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3Zm-5-6a1,1,0,1,0,1,1A1,1,0,0,0,15,11Z"/></svg>',
                ),
                array(
                    'keys' => 'direction',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.71,10.21,12,7.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42Zm4.58,4.58L12,17.09l-2.29-2.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'directions',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.12,9.88l-7-7a3.08,3.08,0,0,0-4.24,0l-7,7a3,3,0,0,0,0,4.24l7,7a3,3,0,0,0,4.24,0l7-7A3,3,0,0,0,21.12,9.88Zm-1.41,2.83-7,7a1,1,0,0,1-1.42,0h0l-7-7a1,1,0,0,1,0-1.42l7-7a1,1,0,0,1,1.42,0l7,7A1,1,0,0,1,19.71,12.71Zm-5.5-3.42a1,1,0,0,0-1.42,1.42l.3.29H9.5a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V13h2.59l-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'discord',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.13831,10.62982h-.00013a1.05288,1.05288,0,1,0,.00013,0Zm3.75427,0a1.14582,1.14582,0,1,0,1.04907,1.14166A1.09586,1.09586,0,0,0,13.89258,10.62982Zm4.99878-8.6297H5.10864A2.11364,2.11364,0,0,0,3,4.119V18.02527A2.11368,2.11368,0,0,0,5.10864,20.1441H16.77258l-.54516-1.90289,1.31653,1.224,1.24462,1.152L21,22.57153V4.119A2.11364,2.11364,0,0,0,18.89136,2.00012ZM14.92114,15.43323v.00006s-.37036-.44232-.67895-.83319a3.2459,3.2459,0,0,0,1.86181-1.224,5.87837,5.87837,0,0,1-1.18286.60681,6.76974,6.76974,0,0,1-1.49145.44232,7.206,7.206,0,0,1-2.66394-.01025,8.64456,8.64456,0,0,1-1.51209-.44226,6.03735,6.03735,0,0,1-.75085-.34973c-.03089-.02063-.06165-.03089-.09253-.05146a.14171.14171,0,0,1-.04114-.03082c-.18506-.10284-.28809-.17487-.28809-.17487A3.19975,3.19975,0,0,0,9.8811,14.57953c-.30847.39093-.68908.8537-.68908.8537a3.72892,3.72892,0,0,1-3.13709-1.56342A13.775,13.775,0,0,1,7.536,7.87323a5.08641,5.08641,0,0,1,2.89026-1.08l.10278.12348A6.93762,6.93762,0,0,0,7.824,8.2641s.22632-.12341.60682-.29828a7.722,7.722,0,0,1,2.335-.64795,1.00465,1.00465,0,0,1,.17492-.02063,8.702,8.702,0,0,1,2.07764-.02051,8.384,8.384,0,0,1,3.096.98737,6.84576,6.84576,0,0,0-2.561-1.30628l.14392-.16449a5.08575,5.08575,0,0,1,2.89026,1.08,13.77368,13.77368,0,0,1,1.4812,5.99652A3.75972,3.75972,0,0,1,14.92114,15.43323Z"/></svg>',
                ),
                array(
                    'keys' => 'dizzy-meh',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11.71l.29-.3.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29.3-.29A1,1,0,0,0,9.54,8.29l-.29.3L9,8.29A1,1,0,1,0,7.54,9.71l.3.29-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0ZM15,14H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17,8.29a1,1,0,0,0-1.42,0l-.29.3L15,8.29a1,1,0,0,0-1.42,1.42l.3.29-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l.29-.3.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29.3-.29A1,1,0,0,0,17,8.29Z"/></svg>',
                ),
                array(
                    'keys' => 'dna',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.2,13.73a1,1,0,0,0-1.41-.05A11.18,11.18,0,0,0,4,22a1,1,0,0,0,2,0,9.15,9.15,0,0,1,3.15-6.86A1,1,0,0,0,9.2,13.73Zm10.17,4.64a10.86,10.86,0,0,0-1.6-3A14.31,14.31,0,0,0,14.06,12C16.3,10.57,20,7.4,20,2a1,1,0,0,0-2,0c0,5.4-4.59,8.17-6,8.89A13.42,13.42,0,0,1,9.31,9H12a1,1,0,0,0,0-2H7.55a9.39,9.39,0,0,1-1-2H15a1,1,0,0,0,0-2H6.06A8.14,8.14,0,0,1,6,2,1,1,0,0,0,4,2c0,7.57,7.3,10.79,7.61,10.92h0A12.93,12.93,0,0,1,14.7,15H12a1,1,0,0,0,0,2h4.43a9.07,9.07,0,0,1,1,2H9a1,1,0,0,0,0,2h8.94A8.26,8.26,0,0,1,18,22a1,1,0,0,0,2,0,10.5,10.5,0,0,0-.22-2.19A9.23,9.23,0,0,0,19.37,18.37Z"/></svg>',
                ),
                array(
                    'keys' => 'document-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,14a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V15A1,1,0,0,0,12,14Zm.38-2.92A1,1,0,0,0,11.8,11l-.18.06-.18.09-.15.12A1,1,0,0,0,11,12a1,1,0,0,0,.29.71,1,1,0,0,0,.33.21A.84.84,0,0,0,12,13a1,1,0,0,0,.71-.29A1,1,0,0,0,13,12a1,1,0,0,0-.29-.71A1.15,1.15,0,0,0,12.38,11.08ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,13.06,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'document-layout-center',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,12h6a1,1,0,0,0,1-1V5a1,1,0,0,0-1-1H9A1,1,0,0,0,8,5v6A1,1,0,0,0,9,12Zm1-6h4v4H10Zm11,4H19a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2ZM19,8h2a1,1,0,0,0,0-2H19a1,1,0,0,0,0,2ZM3,8H5A1,1,0,0,0,5,6H3A1,1,0,0,0,3,8Zm0,4H5a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Zm18,2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-8,4H3a1,1,0,0,0,0,2H13a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'document-layout-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,12H9a1,1,0,0,0,1-1V5A1,1,0,0,0,9,4H3A1,1,0,0,0,2,5v6A1,1,0,0,0,3,12ZM4,6H8v4H4Zm9,2h8a1,1,0,0,0,0-2H13a1,1,0,0,0,0,2Zm0,10H3a1,1,0,0,0,0,2H13a1,1,0,0,0,0-2Zm8-4H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-4H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'document-layout-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,18H3a1,1,0,0,0,0,2H13a1,1,0,0,0,0-2ZM3,8h8a1,1,0,0,0,0-2H3A1,1,0,0,0,3,8Zm0,4h8a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Zm18,2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM21,4H15a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V5A1,1,0,0,0,21,4Zm-1,6H16V6h4Z"/></svg>',
                ),
                array(
                    'keys' => 'dollar-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,11H13V7h2a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H13V3a1,1,0,0,0-2,0V5H10a4,4,0,0,0,0,8h1v4H9a1,1,0,0,1-1-1,1,1,0,0,0-2,0,3,3,0,0,0,3,3h2v2a1,1,0,0,0,2,0V19h1a4,4,0,0,0,0-8Zm-3,0H10a2,2,0,0,1,0-4h1Zm3,6H13V13h1a2,2,0,0,1,0,4Z"/></svg>',
                ),
                array(
                    'keys' => 'dollar-sign-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,11H10a2,2,0,0,1,0-4h5a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H13V3a1,1,0,0,0-2,0V5H10a4,4,0,0,0,0,8h4a2,2,0,0,1,0,4H9a1,1,0,0,1-1-1,1,1,0,0,0-2,0,3,3,0,0,0,3,3h2v2a1,1,0,0,0,2,0V19h1a4,4,0,0,0,0-8Z"/></svg>',
                ),
                array(
                    'keys' => 'dollar-sign',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,11H10a2,2,0,0,1,0-4h5a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H13V3a1,1,0,0,0-2,0V5H10a4,4,0,0,0,0,8h4a2,2,0,0,1,0,4H9a1,1,0,0,1-1-1,1,1,0,0,0-2,0,3,3,0,0,0,3,3h2v2a1,1,0,0,0,2,0V19h1a4,4,0,0,0,0-8Z"/></svg>',
                ),
                array(
                    'keys' => 'download-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,0,0-2,0V14.59l-1.29-1.3A1,1,0,0,0,8.29,13.29ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"/></svg>',
                ),
                array(
                    'keys' => 'draggabledots',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.5,10a2,2,0,1,0,2,2A2,2,0,0,0,8.5,10Zm0,7a2,2,0,1,0,2,2A2,2,0,0,0,8.5,17Zm7-10a2,2,0,1,0-2-2A2,2,0,0,0,15.5,7Zm-7-4a2,2,0,1,0,2,2A2,2,0,0,0,8.5,3Zm7,14a2,2,0,1,0,2,2A2,2,0,0,0,15.5,17Zm0-7a2,2,0,1,0,2,2A2,2,0,0,0,15.5,10Z"/></svg>',
                ),
                array(
                    'keys' => 'dribbble',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,2a7.94,7.94,0,0,1,5.51,2.22A24.93,24.93,0,0,1,12.68,8.4,29.07,29.07,0,0,0,9.81,4.31,7.94,7.94,0,0,1,12,4ZM7.89,5.15A27.16,27.16,0,0,1,10.7,9a25.11,25.11,0,0,1-6,.74H4.34A8,8,0,0,1,7.89,5.15ZM6,17.31A7.9,7.9,0,0,1,4,12c0-.1,0-.2,0-.29h.68a26.67,26.67,0,0,0,7-1c.32.61.62,1.24.91,1.89a14.3,14.3,0,0,0-4.29,2.41l-.3.24A21,21,0,0,0,6,17.31ZM12,20a7.92,7.92,0,0,1-4.47-1.37,17.92,17.92,0,0,1,1.56-1.58l.32-.27a12.63,12.63,0,0,1,4-2.27,32,32,0,0,1,1.4,5A8.08,8.08,0,0,1,12,20Zm4.63-1.49a34.87,34.87,0,0,0-1.28-4.46l.34,0a.25.25,0,0,1,.12,0h.11l.1,0,.48,0a9.43,9.43,0,0,1,3.09.53A7.94,7.94,0,0,1,16.63,18.51ZM16.5,12c-.21,0-.42,0-.62,0a1.56,1.56,0,0,0-.39,0,6.64,6.64,0,0,0-.81.1h-.1c-.29-.67-.59-1.32-.92-2a26.57,26.57,0,0,0,5.13-2.4A8,8,0,0,1,20,12c0,.17,0,.34,0,.51A11.48,11.48,0,0,0,16.5,12Z"/></svg>',
                ),
                array(
                    'keys' => 'drill',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,4H9A1,1,0,0,0,8,5V7H3A1,1,0,0,0,3,9H8v4a1,1,0,0,0,2,0V12h4v7a1,1,0,0,0,1,1h2a3,3,0,0,0,3-3V11.82A3,3,0,0,0,22,9V7A3,3,0,0,0,19,4ZM18,17a1,1,0,0,1-1,1H16V12h2Zm2-8a1,1,0,0,1-1,1H10V6h6V7a1,1,0,0,0,2,0V6h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'dropbox',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.61,11.81,18.36,9.28l3.26-2.56A1,1,0,0,0,22,5.86a1.06,1.06,0,0,0-.5-.8L16.36,2.13a1,1,0,0,0-1.15.12L12,5.05,8.79,2.25a1,1,0,0,0-1.15-.12L2.5,5.06a1.06,1.06,0,0,0-.5.8,1,1,0,0,0,.38.86L5.64,9.28,2.39,11.77a1,1,0,0,0-.39.86,1,1,0,0,0,.5.8l3.41,2v2.47a1,1,0,0,0,.48.85l5.09,3.13a1,1,0,0,0,1,0l5.09-3.13a1,1,0,0,0,.48-.85V15.42l3.41-1.95a1,1,0,0,0,.5-.8A1,1,0,0,0,21.61,11.81ZM16,4.22l3.23,1.84-2.55,2-3-1.84ZM14.91,9.34l-2.91,2-2.91-2L12,7.55ZM4.79,6.06,8,4.22l2.31,2-3,1.84Zm0,6.39,2.5-1.92,3,2.08L8.07,14.34Zm11.29,4.86L12,19.83,7.91,17.31v-.8a1,1,0,0,0,.85-.18L12,13.83l3.24,2.5a1,1,0,0,0,.61.21,1,1,0,0,0,.24,0Zm-.15-3L13.7,12.61l3-2.08,2.51,1.94Z"/></svg>',
                ),
                array(
                    'keys' => 'dumbbell',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.48,6.55v0h0L14.64,3.71a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l2.12,2.12-8.1,8.1L5.12,13.22a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l2.81,2.81v0h0l2.81,2.81a1,1,0,0,0,.71.3,1,1,0,0,0,.71-1.71L8.66,16.76l8.1-8.1,2.12,2.12a1,1,0,1,0,1.41-1.42ZM3.71,17.46a1,1,0,0,0-1.42,1.42l2.83,2.83a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Zm18-12.34L18.88,2.29a1,1,0,0,0-1.42,1.42l2.83,2.83a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,5.12Z"/></svg>',
                ),
                array(
                    'keys' => 'ear',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Ear</title><path d="M12,8a1.00067,1.00067,0,0,1,1,1,1,1,0,0,0,2,0,2.9995,2.9995,0,1,0-5.01758,2.2207c.01.0091.16113.16992.19336.21485a.9875.9875,0,0,1,0,1.11914.99952.99952,0,1,0,1.64844,1.13086,2.98332,2.98332,0,0,0-.00488-3.38867,7.12392,7.12392,0,0,0-.49122-.55665,1.05523,1.05523,0,0,1-.1582-.18164A1.00072,1.00072,0,0,1,12,8Zm0-6a7.0006,7.0006,0,0,0-6.76172,8.81152A.99989.99989,0,0,0,7.16992,10.294,5.00018,5.00018,0,1,1,17,9a5.11412,5.11412,0,0,1-.70508,2.56738L12.73145,19A2.00462,2.00462,0,0,1,11,20a2.027,2.027,0,0,1-2-2,1.99224,1.99224,0,0,1,.26855-.999,1.00065,1.00065,0,0,0-1.73242-1.002,3.9988,3.9988,0,1,0,6.96289,3.9336L18.0625,12.5A7.00044,7.00044,0,0,0,12,2Z"/></svg>',
                ),
                array(
                    'keys' => 'edit-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93h0L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12h0L4.29,12.05a1,1,0,0,0-.29.71V17A1,1,0,0,0,5,18ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'edit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM6,12.76V17a1,1,0,0,0,1,1h4.24a1,1,0,0,0,.71-.29l6.92-6.93h0L21.71,8a1,1,0,0,0,0-1.42L17.47,2.29a1,1,0,0,0-1.42,0L13.23,5.12h0L6.29,12.05A1,1,0,0,0,6,12.76ZM16.76,4.41l2.83,2.83L18.17,8.66,15.34,5.83ZM8,13.17l5.93-5.93,2.83,2.83L10.83,16H8Z"/></svg>',
                ),
                array(
                    'keys' => 'ellipsis-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/></svg>',
                ),
                array(
                    'keys' => 'ellipsis-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,7a2,2,0,1,0-2-2A2,2,0,0,0,12,7Zm0,10a2,2,0,1,0,2,2A2,2,0,0,0,12,17Zm0-7a2,2,0,1,0,2,2A2,2,0,0,0,12,10Z"/></svg>',
                ),
                array(
                    'keys' => 'emoji',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,11a1,1,0,1,0-1-1A1,1,0,0,0,15,11ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm3-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4.28-7.12a1,1,0,0,0-1.4-.16A2.78,2.78,0,0,0,14,14H10.35a2.81,2.81,0,0,0-.88-1.31,1,1,0,0,0-1.36.2,1,1,0,0,0,.14,1.39A1,1,0,0,1,8.5,15a1.09,1.09,0,0,1-.25.72A1,1,0,1,0,9.5,17.28,2.89,2.89,0,0,0,10.34,16H14a2.72,2.72,0,0,0,.89,1.31,1,1,0,0,0,.57.18,1,1,0,0,0,.78-.38,1,1,0,0,0-.14-1.39,1,1,0,0,1-.25-.72,1.09,1.09,0,0,1,.25-.72A1,1,0,0,0,16.28,12.88Z"/></svg>',
                ),
                array(
                    'keys' => 'english-to-chinese',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.022,7h1a1.0013,1.0013,0,0,1,1,1V9a1,1,0,0,0,2,0V8a3.00328,3.00328,0,0,0-3-3h-1a1,1,0,0,0,0,2Zm-4,9h-1a1.0013,1.0013,0,0,1-1-1V14a1,1,0,0,0-2,0v1a3.00328,3.00328,0,0,0,3,3h1a1,1,0,0,0,0-2Zm11-1a1,1,0,0,0,0-2h-3v-.5a1,1,0,0,0-2,0V13h-3a1,1,0,0,0,0,2h5.18427a6.72756,6.72756,0,0,1-1.22553,2.52667,6.66828,6.66828,0,0,1-.62915-.98272.99972.99972,0,1,0-1.77929.9121,8.67791,8.67791,0,0,0,.9591,1.468A6.6182,6.6182,0,0,1,13.10645,20.023a1.00008,1.00008,0,0,0,.42675,1.9541,8.63506,8.63506,0,0,0,3.445-1.62164,8.72368,8.72368,0,0,0,3.46857,1.62115,1,1,0,1,0,.43066-1.95312,6.72477,6.72477,0,0,1-2.4461-1.09009A8.73637,8.73637,0,0,0,20.24371,15ZM9.05176,11.24268a1.00011,1.00011,0,0,0,1.94043-.48536L9.23486,3.72754a2.28107,2.28107,0,0,0-4.42578,0L3.05176,10.75732a1.00011,1.00011,0,0,0,1.94043.48536L5.5528,9H8.49115ZM6.0528,7l.69671-2.78711a.2913.2913,0,0,1,.54492,0L7.99115,7Z"/></svg>',
                ),
                array(
                    'keys' => 'enter',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H7.41l1.3-1.29A1,1,0,0,0,7.29,9.29l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L7.41,14H17a3,3,0,0,0,3-3V7A1,1,0,0,0,19,6Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,7h1V8a1,1,0,0,0,2,0V7h1a1,1,0,0,0,0-2H20V4a1,1,0,0,0-2,0V5H17a1,1,0,0,0,0,2Zm4,4a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.41L9.88,14.3a3,3,0,0,0,4.24,0l2.47-2.47a1,1,0,0,0-1.42-1.42L12.7,12.88a1,1,0,0,1-1.4,0L5.41,7H13a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V12A1,1,0,0,0,21,11Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4ZM5,6H19a1,1,0,0,1,1,1l-8,4.88L4,7A1,1,0,0,1,5,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.28l7.48,4.57a1,1,0,0,0,1,0L20,9.28Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-block',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.5,13.26A5,5,0,1,0,14,11.79,5,5,0,0,0,17.5,13.26Zm2.12-2.88a3,3,0,0,1-3.4.58l4-4A3,3,0,0,1,19.62,10.38ZM15.38,6.14a3,3,0,0,1,2.12-.88,3,3,0,0,1,1.28.3l-4,4A3,3,0,0,1,15.38,6.14Zm5.12,8.12a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V9.67l5.88,5.88a3,3,0,0,0,2.11.88,3,3,0,0,0,2.16-.91,1,1,0,0,0,0-1.39,1,1,0,0,0-1.43,0,1,1,0,0,1-1.4,0L4.91,8.26H9.5a1,1,0,0,0,0-2h-5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3v-4A1,1,0,0,0,20.5,14.26Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-bookmark',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,15.26a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.89a3,3,0,0,0,2.1.87,3,3,0,0,0,1.43-.36,1,1,0,0,0,.4-1.36,1,1,0,0,0-1.36-.4,1,1,0,0,1-1.15-.17L5.41,8.26H12a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Zm0-12H16a1,1,0,0,0-1,1v8a1,1,0,0,0,1.57.82l1.93-1.29,1.91,1.28a1.06,1.06,0,0,0,.59.19,1,1,0,0,0,.41-.09,1,1,0,0,0,.59-.91v-8A1,1,0,0,0,21,3.26Zm-1,7.12-.94-.63a1,1,0,0,0-1.12,0l-.94.63V5.26h3Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.29,8.71a1,1,0,0,0,1.42,0l4-4a1,1,0,1,0-1.42-1.42L17,6.59l-1.29-1.3a1,1,0,0,0-1.42,1.42ZM21,8a1,1,0,0,0-1,1v9a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.41L9.88,14.3a3,3,0,0,0,2.11.87,3.08,3.08,0,0,0,2.16-.9l1.72-1.72a1,1,0,1,0-1.42-1.42L12.7,12.88a1,1,0,0,1-1.4,0L5.41,7H11a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A1,1,0,0,0,21,8Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-download-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.29,8.79a1,1,0,0,0,1.42,0l2-2a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L13,5.67V2.92a1,1,0,0,0-2,0V5.67l-.29-.29a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41ZM16,11.08H8a3,3,0,0,0-3,3v5a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3v-5A3,3,0,0,0,16,11.08Zm-.42,2L12.7,16a1,1,0,0,1-1.4,0L8.42,13.08Zm1.42,6a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V14.49l2.88,2.88a3,3,0,0,0,4.24,0L17,14.49Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.5,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V9.41L9.38,15.3a3,3,0,0,0,4.24,0l1.64-1.64a1,1,0,1,0-1.42-1.42L12.2,13.88a1,1,0,0,1-1.4,0L4.91,8H11.5a1,1,0,0,0,0-2h-7a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3V15A1,1,0,0,0,20.5,14Zm1.71-6.71a1,1,0,0,0-1.42,0L19.5,8.59V3a1,1,0,0,0-2,0V8.59l-1.29-1.3a1,1,0,1,0-1.42,1.42l3,3a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3A1,1,0,0,0,22.21,7.29Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-edit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,11.51h2.42a1,1,0,0,0,.71-.29l4.58-4.58a1,1,0,0,0,0-1.42L19.29,2.8a1,1,0,0,0-1.42,0L13.29,7.38a1.05,1.05,0,0,0-.29.71v2.42A1,1,0,0,0,14,11.51Zm1-3,3.58-3.58,1,1L16,9.51H15Zm6,2a1,1,0,0,0-1,1v7a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.9l5.88,5.89a3,3,0,0,0,4.27,0,1,1,0,0,0,0-1.4,1,1,0,0,0-1.43,0,1,1,0,0,1-1.4,0L5.41,7.49H10a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-7A1,1,0,0,0,21,10.49Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,13.5a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.91l5.88,5.88a3,3,0,0,0,4.24,0l3.59-3.58a1,1,0,0,0-1.42-1.42l-3.58,3.59a1,1,0,0,1-1.42,0L5.41,7.5H17a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-4A1,1,0,0,0,21,13.5Zm0-11a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0v-4A1,1,0,0,0,21,2.5Zm-.2,7a.64.64,0,0,0-.18.06.76.76,0,0,0-.18.09l-.15.12a1.05,1.05,0,0,0-.29.71,1.23,1.23,0,0,0,0,.19.6.6,0,0,0,.06.19.76.76,0,0,0,.09.18,1.58,1.58,0,0,0,.12.15,1,1,0,0,0,1.42,0l.12-.15a.76.76,0,0,0,.09-.18.6.6,0,0,0,.06-.19,1.23,1.23,0,0,0,0-.19,1,1,0,0,0-1.2-1Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.5,13a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V8.41L9.38,14.3a3,3,0,0,0,2.11.87,3,3,0,0,0,2.15-.9l.89-.88A1,1,0,0,0,13.13,12l-.93.91a1,1,0,0,1-1.4,0L4.91,7H9.5a1,1,0,0,0,0-2h-5a3,3,0,0,0-3,3V18a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3V14A1,1,0,0,0,20.5,13Zm1.05-9a3.33,3.33,0,0,0-3.88-.54,3.25,3.25,0,0,0-3.88,5.13L17,11.71a1.05,1.05,0,0,0,.71.29,1,1,0,0,0,.71-.29l3.17-3.17A3.26,3.26,0,0,0,21.55,4ZM20.14,7.12,17.67,9.59,15.21,7.12A1.24,1.24,0,0,1,17,5.36a1,1,0,0,0,1.42,0,1.28,1.28,0,0,1,1.76,0A1.26,1.26,0,0,1,20.14,7.12Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,13.5a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.91l5.88,5.88a3,3,0,0,0,4.24,0l3.59-3.58a1,1,0,0,0-1.42-1.42l-3.58,3.59a1,1,0,0,1-1.42,0L5.41,7.5H17a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-4A1,1,0,0,0,21,13.5Zm0-9a1.05,1.05,0,0,0,.71-.29l.12-.16a.56.56,0,0,0,.09-.17A.64.64,0,0,0,22,3.7a1.36,1.36,0,0,0,0-.2,1.05,1.05,0,0,0-.29-.71,1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.42A1.05,1.05,0,0,0,21,4.5Zm0,1a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0v-4A1,1,0,0,0,21,5.5Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.5,7.44V6.26a3,3,0,1,0-6,0V7.44a3,3,0,0,0-2,2.82v2a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3v-2A3,3,0,0,0,20.5,7.44Zm-4-1.18a1,1,0,1,1,2,0v1h-2Zm4,6a1,1,0,0,1-1,1h-4a1,1,0,0,1-1-1v-2a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1Zm0,5a1,1,0,0,0-1,1v1a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V9.67l5.88,5.88a1,1,0,0,0,1.42-1.41L4.91,8.26H10.5a1,1,0,0,0,0-2h-6a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3v-1A1,1,0,0,0,20.5,17.26Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,8a1,1,0,0,0-1,1v8a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7.41l5.88,5.88a3,3,0,0,0,4.24,0l3.59-3.58a1,1,0,0,0-1.42-1.42l-3.58,3.59a1,1,0,0,1-1.42,0L5.41,6H13a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A1,1,0,0,0,21,8ZM17,6h4a1,1,0,0,0,0-2H17a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-open',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.21,8.82h0l0,0h0L14,2.78a2.83,2.83,0,0,0-3.9,0l-6.21,6h0v0A2.6,2.6,0,0,0,3,10.71v8.58A2.75,2.75,0,0,0,5.78,22H18.22A2.75,2.75,0,0,0,21,19.29V10.71A2.67,2.67,0,0,0,20.21,8.82Zm-8.77-4.6a.83.83,0,0,1,1.12,0L18,9.5l-5.47,5.28a.83.83,0,0,1-1.12,0L6,9.5ZM19,19.29a.76.76,0,0,1-.78.71H5.78A.76.76,0,0,1,5,19.29V11.35l4.05,3.9-1.66,1.6a1,1,0,0,0,0,1.41,1,1,0,0,0,.72.31,1,1,0,0,0,.69-.28l1.77-1.7a2.8,2.8,0,0,0,2.92,0l1.77,1.7a1,1,0,0,0,.69.28,1,1,0,0,0,.72-.31,1,1,0,0,0,0-1.41L15,15.25l4-3.9Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.77,5.37A1,1,0,0,0,18.13,5,1,1,0,0,1,19,4.5a1,1,0,0,1,0,2,1,1,0,0,0,0,2A3,3,0,1,0,16.4,4,1,1,0,0,0,16.77,5.37ZM21,13.5a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.91L9.88,14.8a3,3,0,0,0,4.24,0l1.64-1.64a1,1,0,1,0-1.42-1.42L12.7,13.38a1,1,0,0,1-1.4,0L5.41,7.5H13a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-4A1,1,0,0,0,21,13.5ZM18.29,9.79a1,1,0,0,0,0,1.42l.15.12a.76.76,0,0,0,.18.09.64.64,0,0,0,.18.06l.2,0a1,1,0,0,0,.71-1.71A1,1,0,0,0,18.29,9.79Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-receive',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.29,6.21l2,2a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29H15a1,1,0,0,0,0-2H11.41l.3-.29a1,1,0,1,0-1.42-1.42l-2,2a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76A1,1,0,0,0,8.29,6.21ZM16,10.5H8a3,3,0,0,0-3,3v5a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3v-5A3,3,0,0,0,16,10.5Zm-.42,2L12.7,15.38a1,1,0,0,1-1.4,0L8.42,12.5Zm1.42,6a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V13.91l2.88,2.87a2.94,2.94,0,0,0,2.12.89,3,3,0,0,0,2.12-.88L17,13.91Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-redo',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.5,14.26a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V9.67l5.88,5.88a3,3,0,0,0,2.11.88,3,3,0,0,0,2.16-.91,1,1,0,0,0,0-1.39,1,1,0,0,0-1.43,0,1,1,0,0,1-1.4,0L4.91,8.26H9.5a1,1,0,0,0,0-2h-5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3v-4A1,1,0,0,0,20.5,14.26Zm1-11a1,1,0,0,0-1,1h0a5,5,0,1,0-3,9A5,5,0,0,0,20.8,12a1,1,0,0,0-1.32-1.51,3,3,0,1,1,.25-4.24H18.5a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1v-3A1,1,0,0,0,21.5,3.26Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-search',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.21,10.29,20.48,8.57a4.37,4.37,0,0,0,.65-2.26,4.31,4.31,0,1,0-4.32,4.32A4.37,4.37,0,0,0,19.07,10l1.72,1.73a1,1,0,0,0,1.42,0A1,1,0,0,0,22.21,10.29ZM18.45,8a2.37,2.37,0,0,1-3.27,0,2.3,2.3,0,0,1-.68-1.64A2.32,2.32,0,0,1,16.81,4a2.3,2.3,0,0,1,1.64.68,2.28,2.28,0,0,1,.68,1.63A2.3,2.3,0,0,1,18.45,8ZM20.5,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V9.41L9.38,15.3a3,3,0,0,0,4.24,0L15,13.88a1,1,0,0,0-1.42-1.42L12.2,13.88a1,1,0,0,1-1.4,0L4.91,8H9.5a1,1,0,0,0,0-2h-5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3V15A1,1,0,0,0,20.5,14Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-send',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,10.5H8a3,3,0,0,0-3,3v5a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3v-5A3,3,0,0,0,16,10.5Zm-.42,2L12.7,15.38a1,1,0,0,1-1.4,0L8.42,12.5Zm1.42,6a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V13.91l2.88,2.87a2.94,2.94,0,0,0,2.12.89,3,3,0,0,0,2.12-.88L17,13.91ZM9,6.5h3.59l-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-2-2a1,1,0,0,0-1.42,1.42l.3.29H9a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-share',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V9.41L8.88,15.3a3,3,0,0,0,2.11.87,3.08,3.08,0,0,0,2.16-.9l1.72-1.72a1,1,0,1,0-1.42-1.42L11.7,13.88a1,1,0,0,1-1.4,0L4.41,8H10a1,1,0,0,0,0-2H4A3,3,0,0,0,1,9V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V15A1,1,0,0,0,20,14Zm0-6a2,2,0,0,0-1.18.39l-1.75-.8L19,6.71A2,2,0,0,0,20,7a2,2,0,1,0-2-2l-1.9.87A2,2,0,0,0,15,5.5a2,2,0,0,0,0,4,1.88,1.88,0,0,0,.92-.24l2.1,1A2,2,0,1,0,20,8Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.63,5.12a1,1,0,0,0-.84-.2,2.74,2.74,0,0,1-2.2-.46,1,1,0,0,0-1.18,0,2.74,2.74,0,0,1-2.2.46A1,1,0,0,0,14,5.9V9.21a4.62,4.62,0,0,0,1.84,3.7l1.57,1.16a1,1,0,0,0,1.18,0l1.57-1.16A4.62,4.62,0,0,0,22,9.21V5.9A1,1,0,0,0,21.63,5.12ZM20,9.21a2.61,2.61,0,0,1-1,2.09L18,12l-1-.72a2.61,2.61,0,0,1-1-2.09V7a4.67,4.67,0,0,0,2-.54A4.67,4.67,0,0,0,20,7Zm1,6a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.88a3,3,0,0,0,2.11.88,3,3,0,0,0,2.15-.9l-.7-.71-.74-.68a1,1,0,0,1-1.4,0L5.41,8.26H11a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-star',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.64,9.74l-.29,1.73A1.55,1.55,0,0,0,14,13a1.46,1.46,0,0,0,1.58.09L17,12.28l1.44.79A1.46,1.46,0,0,0,20,13a1.55,1.55,0,0,0,.63-1.51l-.29-1.73,1.2-1.22a1.54,1.54,0,0,0-.85-2.6l-1.62-.24-.73-1.55a1.5,1.5,0,0,0-2.72,0l-.73,1.55-1.62.24a1.54,1.54,0,0,0-.85,2.6Zm1.83-2.13a1.51,1.51,0,0,0,1.14-.85L17,5.93l.39.83a1.55,1.55,0,0,0,1.14.86l1,.14-.73.74a1.57,1.57,0,0,0-.42,1.34l.16,1-.79-.43a1.48,1.48,0,0,0-1.44,0l-.79.43.16-1a1.54,1.54,0,0,0-.42-1.33l-.73-.75ZM21,15.26a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9.67l5.88,5.88a2.94,2.94,0,0,0,2.1.88l.27,0a1,1,0,0,0,.91-1.08,1,1,0,0,0-1.09-.91.94.94,0,0,1-.77-.28L5.41,8.26H9a1,1,0,0,0,0-2H5a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-3A1,1,0,0,0,21,15.26Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.41L9.88,14.3a3,3,0,0,0,2.11.87,3.08,3.08,0,0,0,2.16-.9l1.72-1.72a1,1,0,1,0-1.42-1.42L12.7,12.88a1,1,0,0,1-1.4,0L5.41,7H13a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V12A1,1,0,0,0,21,11Zm-.59-5,1.3-1.29a1,1,0,1,0-1.42-1.42L19,4.59l-1.29-1.3a1,1,0,0,0-1.42,1.42L17.59,6l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L19,7.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-upload-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,11.08H8a3,3,0,0,0-3,3v5a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3v-5A3,3,0,0,0,16,11.08Zm-.42,2L12.7,16a1,1,0,0,1-1.4,0L8.42,13.08Zm1.42,6a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V14.49l2.88,2.88a3,3,0,0,0,4.24,0L17,14.49ZM10.71,5.62,11,5.33V8.08a1,1,0,0,0,2,0V5.33l.29.29a1,1,0,1,0,1.42-1.41l-2-2a1,1,0,0,0-1.42,0l-2,2a1,1,0,0,0,0,1.41A1,1,0,0,0,10.71,5.62Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.5,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H4.5a1,1,0,0,1-1-1V9.41L9.38,15.3a3,3,0,0,0,4.24,0l1.64-1.64a1,1,0,1,0-1.42-1.42L12.2,13.88a1,1,0,0,1-1.4,0L4.91,8H11.5a1,1,0,0,0,0-2h-7a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h14a3,3,0,0,0,3-3V15A1,1,0,0,0,20.5,14Zm1.71-8.71-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42l1.29-1.3V11a1,1,0,0,0,2,0V5.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.21,5.29Z"/></svg>',
                ),
                array(
                    'keys' => 'envelope',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm-.41,2-5.88,5.88a1,1,0,0,1-1.42,0L5.41,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7.41l5.88,5.88a3,3,0,0,0,4.24,0L20,7.41Z"/></svg>',
                ),
                array(
                    'keys' => 'envelopes',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,21.63H5a3,3,0,0,1-3-3v-8a1,1,0,0,0-2,0v8a5,5,0,0,0,5,5H17a1,1,0,0,0,0-2Zm4-18H7a3,3,0,0,0-3,3v10a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3v-10A3,3,0,0,0,21,3.63Zm-.41,2-5.88,5.88a1,1,0,0,1-1.42,0L7.41,5.63Zm1.41,11a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7l5.88,5.88a3,3,0,0,0,4.24,0L22,7Z"/></svg>',
                ),
                array(
                    'keys' => 'equal-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,13H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm0-4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'euro-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Zm.59-13.33a3.34,3.34,0,0,1,2.62,1.38,1,1,0,0,0,1.4.19,1,1,0,0,0,.18-1.41,5.32,5.32,0,0,0-4.2-2.16A5.57,5.57,0,0,0,7.46,9.5H6a1,1,0,0,0,0,2H7c0,.17,0,.33,0,.5s0,.33,0,.5H6a1,1,0,0,0,0,2H7.46a5.57,5.57,0,0,0,5.13,3.83,5.32,5.32,0,0,0,4.2-2.16A1,1,0,1,0,15.21,15a3.34,3.34,0,0,1-2.62,1.38A3.42,3.42,0,0,1,9.67,14.5H12a1,1,0,0,0,0-2H9.05A4.23,4.23,0,0,1,9,12a4.23,4.23,0,0,1,.05-.5H12a1,1,0,0,0,0-2H9.67A3.42,3.42,0,0,1,12.59,7.67Z"/></svg>',
                ),
                array(
                    'keys' => 'euro',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.2,17.41A6,6,0,0,1,14.46,20c-2.68,0-5-2-6-5H14a1,1,0,0,0,0-2H8.05c0-.33-.05-.67-.05-1s0-.67.05-1H14a1,1,0,0,0,0-2H8.47c1-3,3.31-5,6-5A6,6,0,0,1,19.2,6.59a1,1,0,1,0,1.6-1.18A7.92,7.92,0,0,0,14.46,2c-3.76,0-7,2.84-8.07,7H4a1,1,0,0,0,0,2H6.05c0,.33,0,.67,0,1s0,.67,0,1H4a1,1,0,0,0,0,2H6.39c1.09,4.16,4.31,7,8.07,7a7.92,7.92,0,0,0,6.34-3.41,1,1,0,0,0-1.6-1.18Z"/></svg>',
                ),
                array(
                    'keys' => 'exchange-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,9.29l-4-4a1,1,0,0,0-1.42,1.42L18.59,9H7a1,1,0,0,0,0,2H21a1,1,0,0,0,.92-.62A1,1,0,0,0,21.71,9.29ZM17,13H3a1,1,0,0,0-.92.62,1,1,0,0,0,.21,1.09l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,15H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'exchange',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,10a1,1,0,0,0-1-1H5.41l2.3-2.29A1,1,0,0,0,6.29,5.29l-4,4a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,11H17A1,1,0,0,0,18,10Zm3.92,3.62A1,1,0,0,0,21,13H7a1,1,0,0,0,0,2H18.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.92,13.62Z"/></svg>',
                ),
                array(
                    'keys' => 'exclamation-circle',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,14a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,14Zm0-1.5a1,1,0,0,0,1-1v-3a1,1,0,0,0-2,0v3A1,1,0,0,0,12,12.5ZM12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'exclamation-octagon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,7a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V8A1,1,0,0,0,12,7Zm0,8a1,1,0,1,0,1,1A1,1,0,0,0,12,15Zm9.71-7.44L16.44,2.29A1.05,1.05,0,0,0,15.73,2H8.27a1.05,1.05,0,0,0-.71.29L2.29,7.56A1.05,1.05,0,0,0,2,8.27v7.46a1.05,1.05,0,0,0,.29.71l5.27,5.27a1.05,1.05,0,0,0,.71.29h7.46a1.05,1.05,0,0,0,.71-.29l5.27-5.27a1.05,1.05,0,0,0,.29-.71V8.27A1.05,1.05,0,0,0,21.71,7.56ZM20,15.31,15.31,20H8.69L4,15.31V8.69L8.69,4h6.62L20,8.69Z"/></svg>',
                ),
                array(
                    'keys' => 'exclamation-triangle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,16a1,1,0,1,0,1,1A1,1,0,0,0,12,16Zm10.67,1.47-8.05-14a3,3,0,0,0-5.24,0l-8,14A3,3,0,0,0,3.94,22H20.06a3,3,0,0,0,2.61-4.53Zm-1.73,2a1,1,0,0,1-.88.51H3.94a1,1,0,0,1-.88-.51,1,1,0,0,1,0-1l8-14a1,1,0,0,1,1.78,0l8.05,14A1,1,0,0,1,20.94,19.49ZM12,8a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V9A1,1,0,0,0,12,8Z"/></svg>',
                ),
                array(
                    'keys' => 'exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,14a1,1,0,0,0,1-1V7a1,1,0,0,0-2,0v6A1,1,0,0,0,12,14Zm0,4a1.25,1.25,0,1,0-1.25-1.25A1.25,1.25,0,0,0,12,18Z"/></svg>',
                ),
                array(
                    'keys' => 'exclude',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.54,7.54h-1a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0,1,1,0,1,0,0-2Zm5.92,5.92a1,1,0,0,0-1,1,1,1,0,0,0,0,2h1a1,1,0,0,0,1-1v-1A1,1,0,0,0,15.46,13.46ZM21,7.54H16.46V3a1,1,0,0,0-1-1H3A1,1,0,0,0,2,3V15.46a1,1,0,0,0,1,1H7.54V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8.54A1,1,0,0,0,21,7.54ZM20,20H9.54V16.46a1,1,0,0,0,0-2,1,1,0,0,0-2,0H4V4H14.46V7.54a1,1,0,0,0,0,2,1,1,0,0,0,2,0H20Z"/></svg>',
                ),
                array(
                    'keys' => 'exit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg>',
                ),
                array(
                    'keys' => 'expand-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.79,12.79,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41l5.8-5.79a1,1,0,0,0-1.42-1.42ZM21.92,2.62a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59l-5.8,5.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V7a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'expand-arrows-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.29,13.29,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41l5.3-5.29a1,1,0,0,0-1.42-1.42ZM5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM21,16a1,1,0,0,0-1,1v1.59l-5.29-5.3a1,1,0,0,0-1.42,1.42L18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17A1,1,0,0,0,21,16Zm.92-13.38a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V7a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'expand-arrows',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,8a1,1,0,0,0,1-1V3a1,1,0,0,0-.08-.38,1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59L12,10.59,5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41L10.59,12,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41L12,13.41,18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17a1,1,0,0,0-2,0v1.59L13.41,12,20,5.41V7A1,1,0,0,0,21,8Z"/></svg>',
                ),
                array(
                    'keys' => 'expand-from-corner',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,12H3a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V13A1,1,0,0,0,11,12Zm-1,8H4V14h6ZM21.92,2.62a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'expand-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.17,10.17a1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41L8.46,9.88A1,1,0,0,0,9.17,10.17Zm6.37-1.71a1,1,0,0,0-1.42,0L8.46,14.12a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l5.66-5.66A1,1,0,0,0,15.54,8.46ZM21,16a1,1,0,0,0-1,1v1.59l-4.46-4.47a1,1,0,1,0-1.42,1.42L18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17A1,1,0,0,0,21,16Z"/></svg>',
                ),
                array(
                    'keys' => 'expand-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,14.1L4,18.6V17c0-0.6-0.4-1-1-1s-1,0.4-1,1v4c0,0.1,0,0.3,0.1,0.4c0.1,0.2,0.3,0.4,0.5,0.5C2.7,22,2.9,22,3,22h4c0.6,0,1-0.4,1-1s-0.4-1-1-1H5.4l4.5-4.5c0.4-0.4,0.4-1,0-1.4C9.5,13.7,8.9,13.7,8.5,14.1z M21.7,2.3C21.7,2.3,21.7,2.3,21.7,2.3C21.5,2.1,21.2,2,21,2h-4c-0.6,0-1,0.4-1,1s0.4,1,1,1h1.6l-4.5,4.5c-0.4,0.4-0.4,1,0,1.4l0,0c0.2,0.2,0.4,0.3,0.7,0.3c0.3,0,0.5-0.1,0.7-0.3L20,5.4V7c0,0.6,0.4,1,1,1s1-0.4,1-1V3C22,2.8,21.9,2.5,21.7,2.3z M15.5,14.1L9.9,8.5c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4l5.7,5.7c0.2,0.2,0.4,0.3,0.7,0.3c0.3,0,0.5-0.1,0.7-0.3C15.9,15.2,15.9,14.5,15.5,14.1C15.5,14.1,15.5,14.1,15.5,14.1z"/></svg>',
                ),
                array(
                    'keys' => 'export',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.71,7.71,11,5.41V15a1,1,0,0,0,2,0V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71ZM21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Z"/></svg>',
                ),
                array(
                    'keys' => 'exposure-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,6H7A1,1,0,0,0,7,8h4a1,1,0,0,0,0-2Zm8-4H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM4,18.59V5A1,1,0,0,1,5,4H18.59ZM20,19a1,1,0,0,1-1,1H5.41L20,5.41Zm-7-2h1v1a1,1,0,0,0,2,0V17h1a1,1,0,0,0,0-2H16V14a1,1,0,0,0-2,0v1H13a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'exposure-increase',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,7H10V6A1,1,0,0,0,8,6V7H7A1,1,0,0,0,7,9H8v1a1,1,0,0,0,2,0V9h1a1,1,0,0,0,0-2Zm2,11h4a1,1,0,0,0,0-2H13a1,1,0,0,0,0,2ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM4,18.59V5A1,1,0,0,1,5,4H18.59ZM20,19a1,1,0,0,1-1,1H5.41L20,5.41Z"/></svg>',
                ),
                array(
                    'keys' => 'external-link-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,10.82a1,1,0,0,0-1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7h7.18a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V11.82A1,1,0,0,0,18,10.82Zm3.92-8.2a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L8.29,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'eye-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.94,6.08A6.93,6.93,0,0,1,12,6c3.18,0,6.17,2.29,7.91,6a15.23,15.23,0,0,1-.9,1.64,1,1,0,0,0-.16.55,1,1,0,0,0,1.86.5,15.77,15.77,0,0,0,1.21-2.3,1,1,0,0,0,0-.79C19.9,6.91,16.1,4,12,4a7.77,7.77,0,0,0-1.4.12,1,1,0,1,0,.34,2ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.39,6.8a14.62,14.62,0,0,0-3.31,4.8,1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20a9.26,9.26,0,0,0,5.05-1.54l3.24,3.25a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.36,9.19,2.45,2.45A1.81,1.81,0,0,1,12,14a2,2,0,0,1-2-2A1.81,1.81,0,0,1,10.07,11.48ZM12,18c-3.18,0-6.17-2.29-7.9-6A12.09,12.09,0,0,1,6.8,8.21L8.57,10A4,4,0,0,0,14,15.43L15.59,17A7.24,7.24,0,0,1,12,18Z"/></svg>',
                ),
                array(
                    'keys' => 'eye',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/></svg>',
                ),
                array(
                    'keys' => 'facebook-f',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z"/></svg>',
                ),
                array(
                    'keys' => 'facebook-messenger-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.99121,1.00044a10.61443,10.61443,0,0,0-11,10.70019,10.46132,10.46132,0,0,0,3.41406,7.86524L4.457,21.2563a1.79959,1.79959,0,0,0,1.79883,1.74316,1.81992,1.81992,0,0,0,.72656-.15234l1.9209-.84668a11.89548,11.89548,0,0,0,3.08789.40039,10.61525,10.61525,0,0,0,11.001-10.7002A10.61525,10.61525,0,0,0,11.99121,1.00044Zm0,19.40039a9.86205,9.86205,0,0,1-2.63476-.35059,1.79856,1.79856,0,0,0-1.19629.0918l-1.71387.75586-.04492-1.49316a1.80968,1.80968,0,0,0-.60157-1.27442,8.4876,8.4876,0,0,1-2.80859-6.42969,8.65949,8.65949,0,0,1,9-8.70019,8.70522,8.70522,0,1,1,0,17.40039ZM15.72559,8.5854l-2.3125,2.75488L10.06641,9.28364a.99809.99809,0,0,0-1.28907.21L5.72559,13.13032a.99955.99955,0,1,0,1.53125,1.28516l2.498-2.97559,3.34668,2.05567a.99823.99823,0,0,0,1.28906-.209l2.86622-3.416A.99955.99955,0,1,0,15.72559,8.5854Z"/></svg>',
                ),
                array(
                    'keys' => 'facebook-messenger',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A9.65,9.65,0,0,0,2,11.7a9.51,9.51,0,0,0,3.14,7.18.81.81,0,0,1,.27.56l0,1.78a.81.81,0,0,0,1.13.71l2-.87a.75.75,0,0,1,.53,0,11,11,0,0,0,2.9.38A9.7,9.7,0,1,0,12,2Zm6,7.46-2.93,4.66a1.5,1.5,0,0,1-2.17.4l-2.34-1.75a.6.6,0,0,0-.72,0l-3.16,2.4A.47.47,0,0,1,6,14.54L8.93,9.88a1.5,1.5,0,0,1,2.17-.4l2.34,1.75a.6.6,0,0,0,.72,0l3.16-2.4A.47.47,0,0,1,18,9.46Z"/></svg>',
                ),
                array(
                    'keys' => 'facebook',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"/></svg>',
                ),
                array(
                    'keys' => 'fahrenheit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.5,3h-7a3,3,0,0,0-3,3V20a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2h-6V6a1,1,0,0,1,1-1h7a1,1,0,0,0,0-2ZM5.5,3a3,3,0,1,0,3,3A3,3,0,0,0,5.5,3Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,5.5,7Z"/></svg>',
                ),
                array(
                    'keys' => 'fast-mail-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.69,9a2.93,2.93,0,0,0-1-1.71v0h0a3,3,0,0,0-2-.74H4.8A3,3,0,0,0,2.5,7.57h0l0,0,0,.06A3,3,0,0,0,1.84,10l.88,5a3,3,0,0,0,3,2.48h7.94a3,3,0,0,0,2.29-1.07A3,3,0,0,0,16.57,14ZM12.28,8.5,9.94,11.14a1,1,0,0,1-1.38.11L5.17,8.5Zm2.1,6.64a1,1,0,0,1-.76.36H5.68a1,1,0,0,1-1-.83L3.87,10,7.3,12.8a3,3,0,0,0,4.14-.34L13.8,9.8l.8,4.53A1,1,0,0,1,14.38,15.14Zm6.83-4.64h-2a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm0-2a1,1,0,0,0,0-2h-3a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'fast-mail',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M4.79,10.5h-2a1,1,0,1,0,0,2h2a1,1,0,0,0,0-2ZM21.57,7.66l0-.06,0,0h0A3,3,0,0,0,19.2,6.5H11.27a3,3,0,0,0-2,.74h0v0A2.93,2.93,0,0,0,8.31,9l-.88,5a3,3,0,0,0,.66,2.45,3,3,0,0,0,2.29,1.07h7.94a3,3,0,0,0,3-2.48l.88-5A3,3,0,0,0,21.57,7.66Zm-2.74.84-3.4,2.76a1,1,0,0,1-1.38-.12L11.72,8.5Zm.48,6.17a1,1,0,0,1-1,.83H10.38a1,1,0,0,1-.76-.36,1,1,0,0,1-.22-.81l.8-4.53,2.35,2.66a3,3,0,0,0,4.14.35L20.13,10ZM5.79,6.5h-3a1,1,0,1,0,0,2h3a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'favorite',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg>',
                ),
                array(
                    'keys' => 'feedback',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,1H15a2.44,2.44,0,0,0-2.41,2l-.92,5.05a2.44,2.44,0,0,0,.53,2,2.47,2.47,0,0,0,1.88.88H17l-.25.66A3.26,3.26,0,0,0,19.75,16a1,1,0,0,0,.92-.59l2.24-5.06A1,1,0,0,0,23,10V2A1,1,0,0,0,22,1ZM21,9.73l-1.83,4.13a1.33,1.33,0,0,1-.45-.4,1.23,1.23,0,0,1-.14-1.16l.38-1a1.68,1.68,0,0,0-.2-1.58A1.7,1.7,0,0,0,17.35,9H14.06a.46.46,0,0,1-.35-.16.5.5,0,0,1-.09-.37l.92-5A.44.44,0,0,1,15,3h6ZM9.94,13.05H7.05l.25-.66A3.26,3.26,0,0,0,4.25,8a1,1,0,0,0-.92.59L1.09,13.65a1,1,0,0,0-.09.4v8a1,1,0,0,0,1,1H9a2.44,2.44,0,0,0,2.41-2l.92-5a2.44,2.44,0,0,0-.53-2A2.47,2.47,0,0,0,9.94,13.05Zm-.48,7.58A.44.44,0,0,1,9,21H3V14.27l1.83-4.13a1.33,1.33,0,0,1,.45.4,1.23,1.23,0,0,1,.14,1.16l-.38,1a1.68,1.68,0,0,0,.2,1.58,1.7,1.7,0,0,0,1.41.74H9.94a.46.46,0,0,1,.35.16.5.5,0,0,1,.09.37Z"/></svg>',
                ),
                array(
                    'keys' => 'file-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-blank',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-block-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,8a1,1,0,0,0,0,2H8A1,1,0,0,0,8,8Zm5,12H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L11.06,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM12,5.41,14.59,8H13a1,1,0,0,1-1-1Zm8.83,9.76a4.1,4.1,0,0,0-5.66,0,4,4,0,1,0,5.66,0ZM16,18a2,2,0,0,1,2-2,2.09,2.09,0,0,1,.51.07l-2.44,2.44A2.09,2.09,0,0,1,16,18Zm3.41,1.41a2,2,0,0,1-1.91.5l2.43-2.42A2.09,2.09,0,0,1,20,18,2,2,0,0,1,19.41,19.41ZM11,18a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Zm2-6H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-bookmark-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7.5,10h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm4,6h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm0-4h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm6.92-2.62a1,1,0,0,0-.21-1.09l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h4A1,1,0,0,0,18.42,9.38ZM13.5,8a1,1,0,0,1-1-1V5.41L15.09,8Zm7,4h-5a1,1,0,0,0-1,1v8a1,1,0,0,0,.53.88,1,1,0,0,0,1-.05L18,20.53,20,21.83A1,1,0,0,0,21.5,21V13A1,1,0,0,0,20.5,12Zm-1,7.12-.94-.63a1,1,0,0,0-1.12,0l-.94.63V14h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-check-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z"/></svg>',
                ),
                array(
                    'keys' => 'file-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-3.71-6.71L11,15.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'file-contract-dollar',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,20.29,20,18.56c0-.11,0-.21,0-.31a2.75,2.75,0,0,0-2.75-2.75h-.34l-1.44-1.44a.67.67,0,0,1,.28-.06H19a1,1,0,0,0,0-2H17.5V11a1,1,0,0,0-2,0v1a2.74,2.74,0,0,0-1.47.59l-1.32-1.33a1,1,0,0,0-1.42,1.42L13,14.44c0,.11,0,.21,0,.31a2.75,2.75,0,0,0,2.75,2.75h.34l1.44,1.44a.67.67,0,0,1-.28.06H14a1,1,0,0,0,0,2h1.5v1a1,1,0,0,0,2,0V21A2.74,2.74,0,0,0,19,20.38l1.32,1.33a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM10,19H5a1,1,0,0,1-1-1V4A1,1,0,0,1,5,3h6V7a1,1,0,0,0,1,1h5a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09l-5-5h0a1.07,1.07,0,0,0-.28-.19l-.09,0A1.31,1.31,0,0,0,12.06,1H5A3,3,0,0,0,2,4V18a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2ZM13,4.41,14.59,6H13Z"/></svg>',
                ),
                array(
                    'keys' => 'file-copy-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,20H8a3,3,0,0,1-3-3V7A1,1,0,0,0,3,7V17a5,5,0,0,0,5,5h8a1,1,0,0,0,0-2Zm-6-7a1,1,0,0,0,1,1h5a1,1,0,0,0,0-2H11A1,1,0,0,0,10,13ZM21,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,14.05,2H10A3,3,0,0,0,7,5V15a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V9S21,9,21,8.94ZM15,5.41,17.59,8H16a1,1,0,0,1-1-1ZM19,15a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h3V7a3,3,0,0,0,.18,1H11a1,1,0,0,0,0,2h8Z"/></svg>',
                ),
                array(
                    'keys' => 'file-download-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm5,12H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM14,12H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm6.71,6.29a1,1,0,0,0-1.42,0l-.29.3V16a1,1,0,0,0-2,0v2.59l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2A1,1,0,0,0,20.71,18.29ZM12,18a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,13.06,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-4.71-4.71-.29.3V12a1,1,0,0,0-2,0v2.59l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'file-edit-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.71,16.71l-2.42-2.42a1,1,0,0,0-1.42,0l-3.58,3.58a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1h2.42a1,1,0,0,0,.71-.29l3.58-3.58A1,1,0,0,0,20.71,16.71ZM16,20H15V19l2.58-2.58,1,1Zm-6,0H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h4a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,14h6a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm0-4H9A1,1,0,0,0,9,8H8a1,1,0,0,0,0,2Zm2,6H8a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-exclamation-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm6,2H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm0,4H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4.71,4.29a1.58,1.58,0,0,0-.15-.12.76.76,0,0,0-.18-.09L19.2,20a1,1,0,0,0-.58.06.9.9,0,0,0-.54.54A.84.84,0,0,0,18,21a1,1,0,1,0,1.92-.38A1.15,1.15,0,0,0,19.71,20.29ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3h8a1,1,0,0,0,0-2H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9S20,9,20,8.94ZM15,8a1,1,0,0,1-1-1V5.41L16.59,8Zm4,7a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V16A1,1,0,0,0,19,15Z"/></svg>',
                ),
                array(
                    'keys' => 'file-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.92,16.62a.76.76,0,0,0-.09-.18,1.58,1.58,0,0,0-.12-.15,1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21,1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.5,1.5,0,0,0,0,.2.84.84,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,12,18a.84.84,0,0,0,.38-.08.9.9,0,0,0,.54-.54A.84.84,0,0,0,13,17a1.5,1.5,0,0,0,0-.2A.64.64,0,0,0,12.92,16.62ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-6-8a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Z"/></svg>',
                ),
                array(
                    'keys' => 'file-export',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.92,15.62a1.15,1.15,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L17.59,15H12a1,1,0,0,0,0,2h5.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a.93.93,0,0,0,.21-.33A1,1,0,0,0,20.92,15.62ZM14,20H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h4a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0L12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h8a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1Z"/></svg>',
                ),
                array(
                    'keys' => 'file-graph',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm5.21045,2.38623-1.67334,2.15186-.86816-.78125a.9997.9997,0,0,0-1.44971.11865l-2,2.5a.9998.9998,0,1,0,1.56152,1.249l1.33789-1.67236.87891.791a.99989.99989,0,0,0,1.45849-.12939l2.3335-3a1.00005,1.00005,0,0,0-1.5791-1.22754Zm5.7771-3.44794a1.0088,1.0088,0,0,0-.27936-.64373l-.00146-.0019L13.70734,2.29327l-.00183-.00146a.99022.99022,0,0,0-.28608-.19281c-.0299-.014-.061-.02191-.09246-.033a.98253.98253,0,0,0-.26667-.05383C13.03925,2.01086,13.02136,2,13,2H7A3.00328,3.00328,0,0,0,4,5V19a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V9C20,8.97809,19.989,8.95984,19.98755,8.93829ZM14,5.41406,16.58594,8H15a1.0013,1.0013,0,0,1-1-1ZM18,19a1.0013,1.0013,0,0,1-1,1H7a1.0013,1.0013,0,0,1-1-1V5A1.0013,1.0013,0,0,1,7,4h5V7a3.00328,3.00328,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,13.06,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-6-7.66A2.92,2.92,0,0,0,8.57,16l2.72,2.72a1,1,0,0,0,1.42,0L15.43,16A2.92,2.92,0,0,0,12,11.34Zm2,1.93a.92.92,0,0,1,0,1.3l-2,2-2-2a.92.92,0,0,1,0-1.3.92.92,0,0,1,1.3,0,1,1,0,0,0,1.42,0A.92.92,0,0,1,14,13.27Z"/></svg>',
                ),
                array(
                    'keys' => 'file-import',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,20H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.32,1.32,0,0,0-.19-.29h0l-6-6h0a1.32,1.32,0,0,0-.29-.19.32.32,0,0,0-.09,0L12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM19,15H13.41l1.3-1.29a1,1,0,0,0-1.42-1.42l-3,3a1.15,1.15,0,0,0-.21.33,1,1,0,0,0,0,.76.93.93,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,17H19a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-info-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,16H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm6,2H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4.71,3.29a1,1,0,0,0-.33-.21.92.92,0,0,0-.76,0,1,1,0,0,0-.33.21,1.15,1.15,0,0,0-.21.33,1,1,0,0,0,.21,1.09A1,1,0,0,0,19,17a1,1,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1.15,1.15,0,0,0,19.71,15.29ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3h8a1,1,0,0,0,0-2H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9S20,9,20,8.94ZM15,8a1,1,0,0,1-1-1V5.41L16.59,8Zm4,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V19A1,1,0,0,0,19,18Z"/></svg>',
                ),
                array(
                    'keys' => 'file-landscape-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,10.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,15.06,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V11S22,11,22,10.94ZM16,7.41,18.59,10H17a1,1,0,0,1-1-1ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7A1,1,0,0,1,5,6h9V9a3,3,0,0,0,3,3h3ZM7,12h4a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Zm0,2a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-landscape',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,10.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,15.06,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V11S22,11,22,10.94ZM16,7.41,18.59,10H17a1,1,0,0,1-1-1ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7A1,1,0,0,1,5,6h9V9a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-lanscape-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,10.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,15.05,4H10.66a1,1,0,0,0,0,2H14V9a3,3,0,0,0,3,3h3v3.34a1,1,0,1,0,2,0V11S22,11,22,10.94ZM17,10a1,1,0,0,1-1-1V7.41L18.59,10ZM3.71,2.29A1,1,0,0,0,2.29,3.71l.91.9A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H18.59l1.7,1.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM5,18a1,1,0,0,1-1-1V7a1,1,0,0,1,.66-.93L16.59,18Z"/></svg>',
                ),
                array(
                    'keys' => 'file-lock-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,20H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h5V7a3,3,0,0,0,3,3h4a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L11.06,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2ZM12,5.41,14.59,8H13a1,1,0,0,1-1-1ZM13,13a1,1,0,0,0-1-1H7a1,1,0,0,0,0,2h5A1,1,0,0,0,13,13ZM7,10H8A1,1,0,0,0,8,8H7a1,1,0,0,0,0,2Zm0,6a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2Zm13-.82V15a3,3,0,0,0-6,0v.18A3,3,0,0,0,12,18v1a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V18A3,3,0,0,0,20,15.18ZM17,14a1,1,0,0,1,1,1H16A1,1,0,0,1,17,14Zm3,5a1,1,0,0,1-1,1H15a1,1,0,0,1-1-1V18a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'file-medical-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,18a1,1,0,0,0-1,1,1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27.32.32,0,0,0,0-.09,1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.14,1.14,0,0,0,12.07,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3A1,1,0,0,0,18,18ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM20,14H17.5a1,1,0,0,0-.71.29l-1.24,1.25-2.8-3.2a1,1,0,0,0-1.46-.05L9.59,14H8a1,1,0,0,0,0,2h2a1,1,0,0,0,.71-.29L12,14.46l2.8,3.2a1,1,0,0,0,.72.34h0a1,1,0,0,0,.71-.29L17.91,16H20a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,14H13V13a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V16h1a1,1,0,0,0,0-2Zm6-5.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-minus-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm5,12H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM20,18H16a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-7-2H8a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Zm1-4H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,14H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm6-5.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-network',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,19H14.82A3,3,0,0,0,13,17.18V15h3a3,3,0,0,0,3-3V8s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,12.05,1H8A3,3,0,0,0,5,4v8a3,3,0,0,0,3,3h3v2.18A3,3,0,0,0,9.18,19H3a1,1,0,0,0,0,2H9.18a3,3,0,0,0,5.64,0H21a1,1,0,0,0,0-2ZM13,4.41,15.59,7H14a1,1,0,0,1-1-1ZM8,13a1,1,0,0,1-1-1V4A1,1,0,0,1,8,3h3V6a3,3,0,0,0,3,3h3v3a1,1,0,0,1-1,1Zm4,8a1,1,0,1,1,1-1A1,1,0,0,1,12,21Z"/></svg>',
                ),
                array(
                    'keys' => 'file-plus-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,18H19V17a1,1,0,0,0-2,0v1H16a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V20h1a1,1,0,0,0,0-2Zm-7,2H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v3a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm5,8H8a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Zm1-4H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-4-5H13V13a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V16h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-question-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.07,12h-5a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Zm1,8h-8a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9a.14.14,0,0,0,0-.06A.86.86,0,0,0,19,8.67l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1,1,0,0,0-.29-.19s-.05,0-.08,0A.88.88,0,0,0,12.12,2h-6a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h8a1,1,0,0,0,0-2Zm-1-14.59L15.65,8H14.07a1,1,0,0,1-1-1Zm5.57,14.88a1.58,1.58,0,0,0-.15-.12,1.08,1.08,0,0,0-.36-.15,1,1,0,0,0-.9.27,1,1,0,0,0,0,1.42,1,1,0,0,0,.7.29,1,1,0,0,0,.93-1.38A1.19,1.19,0,0,0,18.64,20.29ZM13.07,16h-5a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2Zm4.86-3a3,3,0,0,0-2.6,1.5,1,1,0,1,0,1.74,1,1,1,0,1,1,.86,1.5,1,1,0,0,0,0,2,3,3,0,0,0,0-6ZM8.07,10h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.57,17.29a1,1,0,0,0-1.41,0,1.06,1.06,0,0,0-.22.33,1.07,1.07,0,0,0,0,.76,1.19,1.19,0,0,0,.22.33,1,1,0,0,0,.32.21,1,1,0,0,0,.39.08,1,1,0,0,0,.92-1.38A.91.91,0,0,0,12.57,17.29ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,13.05,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Zm-6.13-9a3,3,0,0,0-2.6,1.5,1,1,0,1,0,1.73,1,1,1,0,0,1,.87-.5,1,1,0,0,1,0,2,1,1,0,1,0,0,2,3,3,0,0,0,0-6Z"/></svg>',
                ),
                array(
                    'keys' => 'file-redo-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,13a1,1,0,0,0-1-1H8a1,1,0,0,0,0,2h5A1,1,0,0,0,14,13Zm-3,7H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.18,1.18,0,0,0-.06-.27l0-.09a.92.92,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.86.86,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM20,14a1,1,0,0,0-.91.6A4.07,4.07,0,0,0,17,14a4,4,0,1,0,2.64,7,1,1,0,0,0-1.32-1.51A2,2,0,0,1,17,20a2,2,0,1,1,1-3.75h-.22a1,1,0,0,0,0,2H20a1,1,0,0,0,1-1V15A1,1,0,0,0,20,14ZM8,10H9A1,1,0,0,0,9,8H8a1,1,0,0,0,0,2Zm0,6a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-search-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,20H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,11.05,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM12,5.41,14.59,8H13a1,1,0,0,1-1-1ZM7,8a1,1,0,0,0,0,2H8A1,1,0,0,0,8,8ZM21.71,20.29l-1.17-1.16A3.44,3.44,0,0,0,20,15h0A3.49,3.49,0,0,0,14,17.49a3.46,3.46,0,0,0,5.13,3.05l1.16,1.17a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29Zm-3.17-1.75a1.54,1.54,0,0,1-2.11,0A1.5,1.5,0,0,1,16,17.49a1.46,1.46,0,0,1,.44-1.06,1.48,1.48,0,0,1,1-.43A1.47,1.47,0,0,1,19,17.49,1.5,1.5,0,0,1,18.54,18.54ZM13,12H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm-2,6a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-share-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5,12.5a1,1,0,0,0-1-1h-5a1,1,0,0,0,0,2h5A1,1,0,0,0,13.5,12.5Zm5,5a2,2,0,0,0-1.18.39l-1.75-.8,1.91-.88a2,2,0,0,0,1,.29,2,2,0,1,0-2-2l-1.89.87A2,2,0,1,0,13.5,19a1.88,1.88,0,0,0,.92-.24l2.1,1a2,2,0,1,0,2-2.23Zm-8,2h-5a1,1,0,0,1-1-1V4.5a1,1,0,0,1,1-1h5v3a3,3,0,0,0,3,3h3a1,1,0,0,0,2,0v-1s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0,1.1,1.1,0,0,0-.26-.06H5.5a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2Zm2-14.59L15.09,7.5H13.5a1,1,0,0,1-1-1ZM7.5,15.5a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm0-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-shield-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.5,20h-5a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h5a1,1,0,0,0,0-2Zm2-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,8a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm13.63,5.86a1,1,0,0,0-.84-.2,2.77,2.77,0,0,1-2.2-.47,1,1,0,0,0-1.18,0,2.78,2.78,0,0,1-2.2.47,1,1,0,0,0-1.21,1V17a4.6,4.6,0,0,0,1.84,3.69L16.9,21.8a1,1,0,0,0,1.2,0l1.56-1.16A4.6,4.6,0,0,0,21.5,17V14.63A1,1,0,0,0,21.13,13.86ZM19.5,17a2.62,2.62,0,0,1-1,2.09l-1,.72-1-.72a2.62,2.62,0,0,1-1-2.09V15.72a4.68,4.68,0,0,0,2-.55,4.68,4.68,0,0,0,2,.55Zm-9-.95h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Zm1-4h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71L4,5.41V19a3,3,0,0,0,3,3H17a3,3,0,0,0,2.39-1.2l.9.91a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM17,20H7a1,1,0,0,1-1-1V7.41L17.93,19.34A1,1,0,0,1,17,20ZM8.66,4H12V7a3,3,0,0,0,3,3h3v3.34a1,1,0,1,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0L13.06,2H8.66a1,1,0,0,0,0,2ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1Z"/></svg>',
                ),
                array(
                    'keys' => 'file-times-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,12H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm5.41,7,1.3-1.29a1,1,0,0,0-1.42-1.42L18,17.59l-1.29-1.3a1,1,0,0,0-1.42,1.42L16.59,19l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L18,20.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM12,20H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v3a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm4,8H8a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.71,12.29a1,1,0,0,0-1.42,0L12,13.59l-1.29-1.3a1,1,0,0,0-1.42,1.42L10.59,15l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,16.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,15l1.3-1.29A1,1,0,0,0,14.71,12.29ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,13.06,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file-upload-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,20H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v2a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0A.88.88,0,0,0,12.05,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h7a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,8a1,1,0,0,0,0,2H9A1,1,0,0,0,9,8Zm6,4H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm6.71,5.29-2-2a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2,2a1,1,0,0,0,1.42,1.42l.29-.3V21a1,1,0,0,0,2,0V18.41l.29.3a1,1,0,0,0,1.42,0A1,1,0,0,0,20.71,17.29ZM12,18a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'file-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,11.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2,2a1,1,0,0,0,1.42,1.42l.29-.3V17a1,1,0,0,0,2,0V14.41l.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.1,0A1.1,1.1,0,0,0,13.06,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H15a1,1,0,0,1-1-1ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V7a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'file',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0L13.06,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V9S20,9,20,8.94ZM14,5.41,16.59,8H14ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4h5V9a1,1,0,0,0,1,1h5Z"/></svg>',
                ),
                array(
                    'keys' => 'files-landscapes-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,19H6a3,3,0,0,1-3-3V8A1,1,0,0,0,1,8v8a5,5,0,0,0,5,5H18a1,1,0,0,0,0-2Zm-4-8H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm9-1.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,16.05,3H8A3,3,0,0,0,5,6v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V10S23,10,23,9.94ZM17,6.41,19.59,9H18a1,1,0,0,1-1-1ZM21,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V6A1,1,0,0,1,8,5h7V8a3,3,0,0,0,3,3h3ZM10,9h2a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'files-landscapes',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M23,9.94a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19l-.09,0A.88.88,0,0,0,16.05,3H8A3,3,0,0,0,5,6V7H4a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V17h1a3,3,0,0,0,3-3V10S23,10,23,9.94ZM17,6.41,19.59,9H18a1,1,0,0,1-1-1ZM17,18a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V10A1,1,0,0,1,4,9H5v5a3,3,0,0,0,3,3h9Zm4-4a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V6A1,1,0,0,1,8,5h7V8a3,3,0,0,0,3,3h3Z"/></svg>',
                ),
                array(
                    'keys' => 'film',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z"/></svg>',
                ),
                array(
                    'keys' => 'filter-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.22,6H12.66a1,1,0,0,0,0,2h6.56a.78.78,0,0,1,.78.78v.78H16.22a1,1,0,1,0,0,2h2.37l-.7.69a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l1.88-1.88a2.51,2.51,0,0,0,.54-.8h0l0-.1A2.59,2.59,0,0,0,22,9.82v-1A2.79,2.79,0,0,0,19.22,6ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.14,6.55A2.73,2.73,0,0,0,4,8.78v1a2.65,2.65,0,0,0,.24,1.1l0,.06a2.61,2.61,0,0,0,.54.81l5.41,5.4V21a1,1,0,0,0,.47.85,1,1,0,0,0,.53.15,1,1,0,0,0,.45-.11l3.56-1.78a1,1,0,0,0,.55-.89v-2h0l4.51,4.52a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM6,8.78a.76.76,0,0,1,.5-.72L6.59,8,8.15,9.56H6Zm8.07,7.29a1,1,0,0,0-.29.71V18.6l-1.56.78v-2.6a1,1,0,0,0-.29-.71L7.41,11.56h2.74l4.22,4.22Z"/></svg>',
                ),
                array(
                    'keys' => 'filter',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V6.17a3,3,0,0,0,.25,1.2l0,.06a2.81,2.81,0,0,0,.59.86L9,14.41V21a1,1,0,0,0,.47.85A1,1,0,0,0,10,22a1,1,0,0,0,.45-.11l4-2A1,1,0,0,0,15,19V14.41l6.12-6.12a2.81,2.81,0,0,0,.59-.86l0-.06A3,3,0,0,0,22,6.17V5A3,3,0,0,0,19,2ZM13.29,13.29A1,1,0,0,0,13,14v4.38l-2,1V14a1,1,0,0,0-.29-.71L5.41,8H18.59ZM20,6H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'fire',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.46777,8.39453l-.00225.00183-.00214.00208ZM18.42188,8.208a1.237,1.237,0,0,0-.23-.17481.99959.99959,0,0,0-1.39941.41114,5.78155,5.78155,0,0,1-1.398,1.77734,8.6636,8.6636,0,0,0,.1333-1.50977,8.71407,8.71407,0,0,0-4.40039-7.582,1.00009,1.00009,0,0,0-1.49121.80567A7.017,7.017,0,0,1,7.165,6.87793l-.23047.1875a8.51269,8.51269,0,0,0-1.9873,1.8623A8.98348,8.98348,0,0,0,8.60254,22.83594.99942.99942,0,0,0,9.98,21.91016a1.04987,1.04987,0,0,0-.0498-.3125,6.977,6.977,0,0,1-.18995-2.58106,9.004,9.004,0,0,0,4.3125,4.0166.997.997,0,0,0,.71534.03809A8.99474,8.99474,0,0,0,18.42188,8.208ZM14.51709,21.03906a6.964,6.964,0,0,1-3.57666-4.40234,8.90781,8.90781,0,0,1-.17969-.96387,1.00025,1.00025,0,0,0-.79931-.84473A.982.982,0,0,0,9.77,14.80957a.99955.99955,0,0,0-.8667.501,8.9586,8.9586,0,0,0-1.20557,4.71777,6.98547,6.98547,0,0,1-1.17529-9.86816,6.55463,6.55463,0,0,1,1.562-1.458.74507.74507,0,0,0,.07422-.05469s.29669-.24548.30683-.2511a8.96766,8.96766,0,0,0,2.89874-4.63269,6.73625,6.73625,0,0,1,1.38623,8.08789,1.00024,1.00024,0,0,0,1.18359,1.418,7.85568,7.85568,0,0,0,3.86231-2.6875,7.00072,7.00072,0,0,1-3.2793,10.457Z"/></svg>',
                ),
                array(
                    'keys' => 'flask-potion',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.93,11.67a.42.42,0,0,0,0-.1A7.4,7.4,0,0,0,15,7.62V4h1a1,1,0,0,0,0-2H8A1,1,0,0,0,8,4H9V7.62a7.4,7.4,0,0,0-3.89,4,.42.42,0,0,0,0,.1,7.5,7.5,0,1,0,13.86,0ZM10.31,9.26A1,1,0,0,0,11,8.31V4h2V8.31a1,1,0,0,0,.69.95A5.43,5.43,0,0,1,16.23,11H7.77A5.43,5.43,0,0,1,10.31,9.26ZM12,20a5.51,5.51,0,0,1-5.5-5.5A5.34,5.34,0,0,1,6.72,13H17.28a5.34,5.34,0,0,1,.22,1.5A5.51,5.51,0,0,1,12,20Zm2-4a1,1,0,1,0,1,1A1,1,0,0,0,14,16Zm-4-1a1,1,0,1,0,1,1A1,1,0,0,0,10,15Z"/></svg>',
                ),
                array(
                    'keys' => 'flask',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.11,17.49,15,8.73V4h1a1,1,0,0,0,0-2H8A1,1,0,0,0,8,4H9V8.73L3.89,17.49A3,3,0,0,0,6.48,22h11a3,3,0,0,0,2.59-4.51Zm-9.25-8A1,1,0,0,0,11,9V4h2V9a1,1,0,0,0,.14.5L14,11H10Zm7.52,10a1,1,0,0,1-.86.5h-11a1,1,0,0,1-.86-.5,1,1,0,0,1,0-1L8.83,13h6.35l3.2,5.5A1,1,0,0,1,18.38,19.5ZM10,15a1,1,0,1,0,1,1A1,1,0,0,0,10,15Zm4,1a1,1,0,1,0,1,1A1,1,0,0,0,14,16Z"/></svg>',
                ),
                array(
                    'keys' => 'flip-h-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.21,5.7a1,1,0,0,0,.24,0l1.94-.49A1,1,0,0,0,16.12,4a1,1,0,0,0-1.21-.73L13,3.73a1,1,0,0,0,.24,2ZM9.51,9h-2a1,1,0,1,0,0,2h2a1,1,0,0,0,0-2Zm4,0a1,1,0,1,0,0,2h2a1,1,0,0,0,0-2ZM7.39,7.15l.24,0,1.94-.48A1,1,0,0,0,9.09,4.7l-1.94.48a1,1,0,0,0,.24,2ZM4,10.51a1,1,0,0,0,1-1v-2a1,1,0,0,0-2,0v2A1,1,0,0,0,4,10.51Zm16.62-8.3A1,1,0,0,0,19.76,2l-1,.24a1,1,0,0,0-.73,1.21,1,1,0,0,0,1,.76A1,1,0,0,0,21,4V3A1,1,0,0,0,20.62,2.21ZM20,7a1,1,0,0,0-1,1V9.14A1,1,0,0,0,19.51,11H20a1,1,0,0,0,1-1V8A1,1,0,0,0,20,7Zm0,6H4a1,1,0,0,0-1,1v3a1,1,0,0,0,.76,1l16,4A1,1,0,0,0,20,22a1,1,0,0,0,1-1V14A1,1,0,0,0,20,13Zm-1,6.72L5,16.22V15H19Z"/></svg>',
                ),
                array(
                    'keys' => 'flip-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM10.93,9h1.5a1,1,0,0,0,0-2h-1.5a1,1,0,0,0,0,2Zm4.5-1a1,1,0,0,0,1,1H17a1,1,0,0,0,.92-.62,1,1,0,0,0-.21-1.09l-.66-.65a1,1,0,0,0-1.41,0,1,1,0,0,0-.19,1.15A1.49,1.49,0,0,0,15.43,8ZM11.65,4.77,12,4.41l.81.81a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41L13.16,2.75a.91.91,0,0,0-.26-.19,1,1,0,0,0-1.61-.27L10.23,3.35a1,1,0,0,0,1.42,1.42ZM17,15H7a1,1,0,0,0-.92.62,1,1,0,0,0,.21,1.09l5,5a1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-1.09A1,1,0,0,0,17,15Zm-5,4.59L9.41,17h5.18ZM7.05,9a1,1,0,0,0,.71-.29L8.82,7.6A1,1,0,0,0,7.4,6.18L6.34,7.24a1,1,0,0,0,0,1.42A1,1,0,0,0,7.05,9Z"/></svg>',
                ),
                array(
                    'keys' => 'flip-v-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4.94,12.24A1,1,0,0,0,3.73,13l-.49,1.94A1,1,0,0,0,4,16.12a1,1,0,0,0,1.21-.73l.49-1.94A1,1,0,0,0,4.94,12.24Zm17,7.52-4-16A1,1,0,0,0,17,3H14a1,1,0,0,0-1,1V20a1,1,0,0,0,1,1h7a1,1,0,0,0,.79-.38A1,1,0,0,0,22,19.76ZM15,19V5h1.22l3.5,14ZM6.4,6.42a1,1,0,0,0-1.22.73L4.7,9.09a1,1,0,0,0,.73,1.21l.24,0a1,1,0,0,0,1-.76l.48-1.94A1,1,0,0,0,6.4,6.42ZM7.51,5h2a1,1,0,0,0,0-2h-2a1,1,0,0,0,0,2ZM4.24,19a1,1,0,0,0-2-.24l-.24,1a1,1,0,0,0,.18.86A1,1,0,0,0,3,21H4a1,1,0,0,0,.24-2ZM10,6.51a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0v-2A1,1,0,0,0,10,6.51Zm0,6a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0v-2A1,1,0,0,0,10,12.51Zm0,6a1,1,0,0,0-.86.49H8a1,1,0,0,0,0,2h2a1,1,0,0,0,1-1v-.49A1,1,0,0,0,10,18.51Z"/></svg>',
                ),
                array(
                    'keys' => 'flip-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7.6,15.18A1,1,0,0,0,6.18,16.6l1.06,1.06a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM3.81,9.78,2.75,10.84a.91.91,0,0,0-.19.26,1,1,0,0,0-.27,1.61l1.06,1.06a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L4.41,12l.81-.81A1,1,0,0,0,3.81,9.78ZM8,10.57a1,1,0,0,0-1,1v1.5a1,1,0,0,0,2,0v-1.5A1,1,0,0,0,8,10.57Zm13.71.72-5-5a1,1,0,0,0-1.09-.21A1,1,0,0,0,15,7V17a1,1,0,0,0,.62.92A.84.84,0,0,0,16,18a1,1,0,0,0,.71-.29l5-5A1,1,0,0,0,21.71,11.29ZM17,14.59V9.41L19.59,12ZM12,2a1,1,0,0,0-1,1V21a1,1,0,0,0,2,0V3A1,1,0,0,0,12,2ZM8.38,6.08a1,1,0,0,0-1.09.21L6.64,7a1,1,0,0,0,0,1.41,1,1,0,0,0,.7.3,1,1,0,0,0,.45-.11A1,1,0,0,0,9,7.57V7A1,1,0,0,0,8.38,6.08Z"/></svg>',
                ),
                array(
                    'keys' => 'flower',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.68,6.88a4.4,4.4,0,0,0-3.31-.32,4.37,4.37,0,0,0-8.73,0,4.48,4.48,0,0,0-3.31.29,4.37,4.37,0,0,0,.61,8,4.4,4.4,0,0,0-.8,2.5,5,5,0,0,0,.07.75A4.34,4.34,0,0,0,8.5,21.73a4.68,4.68,0,0,0,.64,0A4.42,4.42,0,0,0,12,20a4.42,4.42,0,0,0,2.86,1.69,4.68,4.68,0,0,0,.64,0,4.36,4.36,0,0,0,3.56-6.87,4.36,4.36,0,0,0,.62-8ZM10.34,4.94a2.4,2.4,0,0,1,3.32,0,2.43,2.43,0,0,1,.52,2.66l-.26.59-.66.58A4.07,4.07,0,0,0,12,8.55a4,4,0,0,0-1.61.34L9.83,7.6A2.39,2.39,0,0,1,10.34,4.94Zm-6.1,6.84A2.37,2.37,0,0,1,7.94,9l.49.43.35.8A3.92,3.92,0,0,0,8,12.55,2.85,2.85,0,0,0,8,13l-.55,0h0l-.84.08A2.37,2.37,0,0,1,4.24,11.78Zm6.6,6.08a2.38,2.38,0,0,1-4.66-.08,3.07,3.07,0,0,1,0-.42,2.33,2.33,0,0,1,1.17-2L7.86,15l.91-.1a4,4,0,0,0,2.38,1.57ZM12,14.55a2,2,0,1,1,2-2A2,2,0,0,1,12,14.55Zm5.82,3.22a2.36,2.36,0,0,1-2.68,1.94,2.39,2.39,0,0,1-2-1.85l-.14-.6.21-.92a4,4,0,0,0,2.2-1.76l.5.3.09,0,.66.39A2.38,2.38,0,0,1,17.82,17.77Zm1.94-6a2.39,2.39,0,0,1-2.13,1.33h-.24L16.75,13,16,12.59v0a4,4,0,0,0-1-2.64l.43-.37,0,0L16.06,9a2.37,2.37,0,0,1,3.7,2.82Z"/></svg>',
                ),
                array(
                    'keys' => 'focus-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,20H5a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2ZM3,9A1,1,0,0,0,4,8V5A1,1,0,0,1,5,4H8A1,1,0,0,0,8,2H5A3,3,0,0,0,2,5V8A1,1,0,0,0,3,9ZM19,2H16a1,1,0,0,0,0,2h3a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,19,2ZM16,12a1,1,0,0,0-1-1H13V9a1,1,0,0,0-2,0v2H9a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V13h2A1,1,0,0,0,16,12Zm5,3a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h3a3,3,0,0,0,3-3V16A1,1,0,0,0,21,15Z"/></svg>',
                ),
                array(
                    'keys' => 'focus-target',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,9A1,1,0,0,0,4,8V5A1,1,0,0,1,5,4H8A1,1,0,0,0,8,2H5A3,3,0,0,0,2,5V8A1,1,0,0,0,3,9ZM8,20H5a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2Zm9-7a1,1,0,0,0,0-2H15.86A4,4,0,0,0,13,8.14V7a1,1,0,0,0-2,0V8.14A4,4,0,0,0,8.14,11H7a1,1,0,0,0,0,2H8.14A4,4,0,0,0,11,15.86V17a1,1,0,0,0,2,0V15.86A4,4,0,0,0,15.86,13Zm-5,1a2,2,0,1,1,2-2A2,2,0,0,1,12,14Zm9,1a1,1,0,0,0-1,1v3a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h3a3,3,0,0,0,3-3V16A1,1,0,0,0,21,15ZM19,2H16a1,1,0,0,0,0,2h3a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,19,2Z"/></svg>',
                ),
                array(
                    'keys' => 'focus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,2H3A1,1,0,0,0,2,3V8A1,1,0,0,0,4,8V4H8A1,1,0,0,0,8,2ZM8,20H4V16a1,1,0,0,0-2,0v5a1,1,0,0,0,1,1H8a1,1,0,0,0,0-2ZM21,2H16a1,1,0,0,0,0,2h4V8a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2Zm0,13a1,1,0,0,0-1,1v4H16a1,1,0,0,0,0,2h5a1,1,0,0,0,1-1V16A1,1,0,0,0,21,15Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.29,10.79,11,14.09l-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4a1,1,0,0,0-1.42-1.42ZM19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.29,13.79l-.29.3V11.5a1,1,0,0,0-2,0v2.59l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2a1,1,0,0,0-1.42-1.42ZM19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.92,16.12a.76.76,0,0,0-.09-.18,1.58,1.58,0,0,0-.12-.15l-.15-.12-.18-.09a.6.6,0,0,0-.19-.06,1,1,0,0,0-.9.27l-.12.15a.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33,1,1,0,0,0,1.09.22,1.46,1.46,0,0,0,.33-.22,1.46,1.46,0,0,0,.22-.33A1,1,0,0,0,13,16.5a1.36,1.36,0,0,0,0-.2A.64.64,0,0,0,12.92,16.12ZM12,10.5a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0v-2A1,1,0,0,0,12,10.5Zm7-5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,9.84a2.92,2.92,0,0,0-3.43,4.65l2.72,2.72a1,1,0,0,0,1.42,0l2.72-2.72A2.92,2.92,0,0,0,12,9.84Zm2,3.23-2,2-2-2a.92.92,0,0,1,0-1.3.92.92,0,0,1,1.3,0,1,1,0,0,0,1.42,0,.92.92,0,0,1,1.3,1.3ZM19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,13.5a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0v-2A1,1,0,0,0,12,13.5Zm7-8H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Zm-7.29-7.71a1,1,0,0,0-1.09-.21.93.93,0,0,0-.33.21,1.05,1.05,0,0,0-.29.71,1,1,0,0,0,.29.7,1,1,0,0,0,1.42,0,1,1,0,0,0,.29-.7,1,1,0,0,0-.08-.38A.93.93,0,0,0,12.71,10.79Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4,4H8.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,11,7h7a1,1,0,0,1,1,1,1,1,0,0,0,2,0,3,3,0,0,0-3-3H11.72l-.32-1A3,3,0,0,0,8.56,2H4A3,3,0,0,0,1,5V18a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2H4a1,1,0,0,1-1-1V5A1,1,0,0,1,4,4ZM21,15.18V14a3,3,0,0,0-6,0v1.18A3,3,0,0,0,13,18v2a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V18A3,3,0,0,0,21,15.18ZM17,14a1,1,0,0,1,2,0v1H17Zm4,6a1,1,0,0,1-1,1H16a1,1,0,0,1-1-1V18a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,12.5H13v-1a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm5-7H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,12.5H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm5-7H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-network',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,18H14.82A3,3,0,0,0,13,16.18V14h3.67A2.34,2.34,0,0,0,19,11.67V6.33A2.34,2.34,0,0,0,16.67,4h-4l-.13-.41A2.34,2.34,0,0,0,10.37,2h-3A2.34,2.34,0,0,0,5,4.33v7.34A2.34,2.34,0,0,0,7.33,14H11v2.18A3,3,0,0,0,9.18,18H3a1,1,0,0,0,0,2H9.18a3,3,0,0,0,5.64,0H21a1,1,0,0,0,0-2ZM7.33,12A.33.33,0,0,1,7,11.67V4.33A.33.33,0,0,1,7.33,4h3a.33.33,0,0,1,.32.23l.36,1.09A1,1,0,0,0,12,6h4.67a.33.33,0,0,1,.33.33v5.34a.33.33,0,0,1-.33.33ZM12,20a1,1,0,1,1,1-1A1,1,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-open',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.78,10.37A1,1,0,0,0,22,10H20V9a3,3,0,0,0-3-3H10.72l-.32-1A3,3,0,0,0,7.56,3H4A3,3,0,0,0,1,6V18a3,3,0,0,0,3,3H18.4a3,3,0,0,0,2.92-2.35L23,11.22A1,1,0,0,0,22.78,10.37ZM5.37,18.22a1,1,0,0,1-1,.78H4a1,1,0,0,1-1-1V6A1,1,0,0,1,4,5H7.56a1,1,0,0,1,1,.68l.54,1.64A1,1,0,0,0,10,8h7a1,1,0,0,1,1,1v1H8a1,1,0,0,0-1,.78Zm14,0a1,1,0,0,1-1,.78H7.21a1.42,1.42,0,0,0,.11-.35L8.8,12h12Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,12.5H13v-1a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm5-7H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.57,16.3a.64.64,0,0,0-.15-.13l-.17-.09L12.06,16a1,1,0,0,0-.9.28,1,1,0,0,0-.22.32,1,1,0,0,0-.07.39,1,1,0,0,0,.29.7,1,1,0,0,0,.32.22,1,1,0,0,0,.39.07,1,1,0,0,0,.38-.07,1,1,0,0,0,.32-.22,1,1,0,0,0,.3-.7,1,1,0,0,0-.08-.39A.87.87,0,0,0,12.57,16.3ZM11.87,9a3,3,0,0,0-2.6,1.5,1,1,0,1,0,1.73,1,1,1,0,0,1,1.87.5,1,1,0,0,1-1,1,1,1,0,1,0,0,2,3,3,0,0,0,0-6ZM19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,20.29l-1.6-1.6h0L3.71,2.29A1,1,0,0,0,2.29,3.71L3.69,5.1A3,3,0,0,0,3,7V18a3,3,0,0,0,3,3H18a3,3,0,0,0,1.29-.3l1,1a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM6,19a1,1,0,0,1-1-1V7a1,1,0,0,1,.12-.46L17.59,19ZM10.62,6a1,1,0,0,1,.89.67l.54,1.64A1,1,0,0,0,13,9h5a1,1,0,0,1,1,1v4.34a1,1,0,1,0,2,0V10a3,3,0,0,0-3-3H13.72L13.4,6a3,3,0,0,0-2.68-2,1,1,0,0,0-.1,2Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.71,10.79a1,1,0,0,0-1.42,0L12,12.09l-1.29-1.3a1,1,0,0,0-1.42,1.42l1.3,1.29-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,14.91l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-1.3-1.29,1.3-1.29A1,1,0,0,0,14.71,10.79ZM19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,10.79a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2,2a1,1,0,0,0,1.42,1.42l.29-.3V16.5a1,1,0,0,0,2,0V13.91l.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'folder',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,5.5H12.72l-.32-1a3,3,0,0,0-2.84-2H5a3,3,0,0,0-3,3v13a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V8.5A3,3,0,0,0,19,5.5Zm1,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5.5a1,1,0,0,1,1-1H9.56a1,1,0,0,1,.95.68l.54,1.64A1,1,0,0,0,12,7.5h7a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'font',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,20H20V3a1,1,0,0,0-1-1H15.5a1,1,0,0,0-.86.5L4.43,20H3a1,1,0,0,0,0,2H7a1,1,0,0,0,0-2H6.74l3.5-6H18v6H17a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-3-8H11.41l4.66-8H18Z"/></svg>',
                ),
                array(
                    'keys' => 'football-american',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.84,5.56A4.08,4.08,0,0,0,20.7,3.31h0a4.08,4.08,0,0,0-2.25-1.14,13.65,13.65,0,0,0-5.29.24,1.17,1.17,0,0,0-.2.06,14.44,14.44,0,0,0-6.69,3.8A14.59,14.59,0,0,0,2.45,13c0,.06,0,.12-.05.19a13.7,13.7,0,0,0-.24,5.3A4.08,4.08,0,0,0,3.3,20.69h0a4.08,4.08,0,0,0,2.25,1.14A13.12,13.12,0,0,0,7.63,22a13.8,13.8,0,0,0,3.26-.41l.14,0a14.54,14.54,0,0,0,10.52-10.5c0-.06,0-.12.05-.19A13.7,13.7,0,0,0,21.84,5.56ZM16.37,4a10.44,10.44,0,0,1,1.76.14,1.68,1.68,0,0,1,.24.07L17,5.59,15.46,4.05C15.76,4,16.07,4,16.37,4ZM7.67,7.67a12.72,12.72,0,0,1,5.4-3.19L15.59,7,13.44,9.15l-.73-.73a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l.73.73L10.56,12l-.73-.73a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l.73.73L7,15.59,4.49,13.08A12.67,12.67,0,0,1,7.67,7.67ZM4.21,18.37a1.68,1.68,0,0,1-.07-.24A11.38,11.38,0,0,1,4,15.46L5.59,17Zm1.66,1.49a1.68,1.68,0,0,1-.24-.07L7,18.41,8.54,20A11.38,11.38,0,0,1,5.87,19.86Zm10.46-3.53a12.67,12.67,0,0,1-5.41,3.18L8.41,17l2.15-2.15.73.73a1,1,0,1,0,1.42-1.41L12,13.44,13.44,12l.73.73a1,1,0,0,0,.71.29,1,1,0,0,0,.7-1.71l-.73-.73L17,8.41l2.51,2.51A12.67,12.67,0,0,1,16.33,16.33ZM20,8.54,18.41,7l1.38-1.37a1.68,1.68,0,0,1,.07.24A11.38,11.38,0,0,1,20,8.54Z"/></svg>',
                ),
                array(
                    'keys' => 'football-ball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.84,5.56A4.08,4.08,0,0,0,20.7,3.31h0a4.08,4.08,0,0,0-2.25-1.14A14.45,14.45,0,0,0,2.16,18.44,4.08,4.08,0,0,0,3.3,20.69h0a4.08,4.08,0,0,0,2.25,1.14A13.12,13.12,0,0,0,7.63,22a14.37,14.37,0,0,0,10.11-4.26A14.23,14.23,0,0,0,21.84,5.56ZM4.21,18.37a1.68,1.68,0,0,1-.07-.24A12.21,12.21,0,0,1,7.67,7.67,12.39,12.39,0,0,1,16.37,4a10.44,10.44,0,0,1,1.76.14,1.68,1.68,0,0,1,.24.07L13.44,9.15l-.73-.73a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l.73.73L10.56,12l-.73-.73a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l.73.73Zm12.12-2A12.24,12.24,0,0,1,5.87,19.86a1.68,1.68,0,0,1-.24-.07l4.93-4.94.73.73a1,1,0,1,0,1.42-1.41L12,13.44,13.44,12l.73.73a1,1,0,0,0,.71.29,1,1,0,0,0,.7-1.71l-.73-.73,4.94-4.93a1.68,1.68,0,0,1,.07.24A12.21,12.21,0,0,1,16.33,16.33Z"/></svg>',
                ),
                array(
                    'keys' => 'football',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.07,6.11a9.85,9.85,0,0,0-4.3-3.36A10,10,0,0,0,2,12c0,.19,0,.38,0,.56A9.94,9.94,0,0,0,3.33,17a10,10,0,0,0,5.89,4.65h0A10.11,10.11,0,0,0,12,22a9.45,9.45,0,0,0,1.88-.18,10,10,0,0,0,8-8.41A9.46,9.46,0,0,0,22,12,9.83,9.83,0,0,0,20.07,6.11Zm-2,.77L17,9.74l-1.62.44L13,8.49V6.64l2.49-1.81A7.81,7.81,0,0,1,18.11,6.88ZM14,11.67,13.22,14H10.77L10,11.67l2-1.43ZM12,4a8,8,0,0,1,1.11.09L12,4.89l-1.11-.8A8,8,0,0,1,12,4ZM4.88,8.37l.4,1.32-1.13.79A7.88,7.88,0,0,1,4.88,8.37Zm1.37,9.17,1.38.05L8,18.92A8.32,8.32,0,0,1,6.25,17.54ZM8,15.6l-3.15-.11A7.83,7.83,0,0,1,4.07,13l2.49-1.74L8,11.88l.89,2.76Zm.86-5.53-1.56-.7-.91-3A7.93,7.93,0,0,1,8.5,4.83L11,6.64V8.49ZM13,19.93a8.08,8.08,0,0,1-2.63-.12l-.83-2.92.83-.89h3.07l.67,1Zm2.41-.7L15.87,18l1.36.07A7.83,7.83,0,0,1,15.38,19.23Zm3.46-3.12L15.76,16l-.71-1.1.89-2.76,1.51-.41,2.36,2A7.84,7.84,0,0,1,18.84,16.11Zm.05-5.83L19.4,9a7.4,7.4,0,0,1,.53,2.13Z"/></svg>',
                ),
                array(
                    'keys' => 'forecastcloud-moon-tear',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.7,7.57a1,1,0,0,0-.93-.26,3.2,3.2,0,0,1-.66.08,3,3,0,0,1-3-3,3,3,0,0,1,.08-.65A1,1,0,0,0,16,2.53a4.93,4.93,0,0,0-3.83,4.21A6.24,6.24,0,0,0,10.5,6.5a6,6,0,0,0-5.94,5.13,3.5,3.5,0,0,0-.46,6.58,1.14,1.14,0,0,0,.4.08,1,1,0,0,0,.4-1.92A1.48,1.48,0,0,1,4,15a1.5,1.5,0,0,1,1.5-1.5,1,1,0,0,0,1-1,4,4,0,0,1,4-4,3.92,3.92,0,0,1,2.18.66h0a4,4,0,0,1,1.57,2,1,1,0,0,0,.78.67A2.32,2.32,0,0,1,16,16.11a1,1,0,0,0,1.1,1.68A4.32,4.32,0,0,0,19,14.17a4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,8.5,1,1,0,0,0,21.7,7.57Zm-4.59,2.82a2.61,2.61,0,0,1-.42,0A4.6,4.6,0,0,0,16,10a6,6,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.23A3,3,0,0,1,17.11,10.39Zm-6,3.94a1,1,0,0,0-1.12,0C9.84,14.41,7.5,16,7.5,18.5a3,3,0,0,0,6,0C13.5,16,11.15,14.4,11.06,14.33ZM10.5,19.5a1,1,0,0,1-1-1,3,3,0,0,1,1-2,3,3,0,0,1,1,2A1,1,0,0,1,10.5,19.5Z"/></svg>',
                ),
                array(
                    'keys' => 'forwaded-call',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.94,6.56h3.58l-.79.8a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l2.5-2.5a1,1,0,0,0,0-1.41l-2.5-2.5a1,1,0,0,0-1.41,1.41l.79.79H14.94a1,1,0,0,0,0,2ZM19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.06,1.06,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z"/></svg>',
                ),
                array(
                    'keys' => 'forward',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.67,9.69,14,5.84a2.67,2.67,0,0,0-4,2.31h0L6,5.84A2.67,2.67,0,0,0,2,8.15v7.7a2.63,2.63,0,0,0,1.33,2.3,2.61,2.61,0,0,0,1.34.37A2.69,2.69,0,0,0,6,18.16l4-2.31h0a2.65,2.65,0,0,0,1.33,2.31,2.66,2.66,0,0,0,2.67,0l6.67-3.85a2.67,2.67,0,0,0,0-4.62ZM10,13.54,5,16.42a.67.67,0,0,1-1-.57V8.15a.67.67,0,0,1,1-.57l5,2.88Zm9.67-1L13,16.43a.69.69,0,0,1-.67,0,.66.66,0,0,1-.33-.58V8.15a.66.66,0,0,1,.33-.58.78.78,0,0,1,.34-.09.63.63,0,0,1,.33.09l6.67,3.85a.67.67,0,0,1,0,1.16Z"/></svg>',
                ),
                array(
                    'keys' => 'frown',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.36,15.33a1,1,0,0,0-.13,1.4,1,1,0,0,0,1.41.13,3.76,3.76,0,0,1,4.72,0,1,1,0,0,0,1.41-.13,1,1,0,0,0-.13-1.4A5.81,5.81,0,0,0,8.36,15.33ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm3-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM15,9a1,1,0,1,0,1,1A1,1,0,0,0,15,9Z"/></svg>',
                ),
                array(
                    'keys' => 'game-structure',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,18H19V15a1,1,0,0,0-1-1H13V11.29l1.13.59a1,1,0,0,0,1.45-1.05l-.4-2.37L16.9,6.77a1,1,0,0,0,.26-1,1,1,0,0,0-.81-.68L14,4.72,12.9,2.56a1,1,0,0,0-1.8,0L10,4.72l-2.39.35a1,1,0,0,0-.81.68,1,1,0,0,0,.26,1L8.82,8.46l-.4,2.37a1,1,0,0,0,1.45,1.05L11,11.29V14H6a1,1,0,0,0-1,1v3H3a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V20H8v1a1,1,0,0,0,2,0V19a1,1,0,0,0-1-1H7V16H17v2H15a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V20h4v1a1,1,0,0,0,2,0V19A1,1,0,0,0,21,18ZM12,8.63a1,1,0,0,0-.47.12l-.8.42.15-.9a1,1,0,0,0-.29-.88l-.65-.64.9-.13a1,1,0,0,0,.76-.54l.4-.82.4.82a1,1,0,0,0,.76.54l.9.13-.65.64a1,1,0,0,0-.29.88l.15.9-.8-.42A1,1,0,0,0,12,8.63Z"/></svg>',
                ),
                array(
                    'keys' => 'gift',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,7h-.35A3.45,3.45,0,0,0,18,5.5a3.49,3.49,0,0,0-6-2.44A3.49,3.49,0,0,0,6,5.5,3.45,3.45,0,0,0,6.35,7H6a3,3,0,0,0-3,3v2a1,1,0,0,0,1,1H5v6a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V13h1a1,1,0,0,0,1-1V10A3,3,0,0,0,18,7ZM11,20H8a1,1,0,0,1-1-1V13h4Zm0-9H5V10A1,1,0,0,1,6,9h5Zm0-4H9.5A1.5,1.5,0,1,1,11,5.5Zm2-1.5A1.5,1.5,0,1,1,14.5,7H13ZM17,19a1,1,0,0,1-1,1H13V13h4Zm2-8H13V9h5a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'github-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.07031,20.50291a1.00008,1.00008,0,0,0-1.18115-.9834c-1.30908.24024-2.96191.27637-3.40137-.958a5.70754,5.70754,0,0,0-1.83691-2.415,1.20073,1.20073,0,0,1-.1665-.10938,1,1,0,0,0-.93067-.64551H2.54883a.99965.99965,0,0,0-1,.99512c-.00391.81543.811,1.33789,1.1416,1.51465a4.4408,4.4408,0,0,1,.92383,1.35937c.36426,1.02344,1.42285,2.57617,4.46582,2.376.001.03516.00195.06836.00244.09863l.00439.26758a1,1,0,0,0,2,0l-.00488-.31836C10.07715,21.4951,10.07031,21.22068,10.07031,20.50291Zm10.667-15.126c.03174-.125.063-.26367.09034-.41992a6.27792,6.27792,0,0,0-.40821-3.293,1.002,1.002,0,0,0-.61572-.58007c-.356-.12012-1.67041-.35645-4.18408,1.25a13.86918,13.86918,0,0,0-6.354,0C6.76221.751,5.45459.9658,5.10205,1.07908a.99744.99744,0,0,0-.63135.584,6.3003,6.3003,0,0,0-.40332,3.35644c.02442.12793.05078.2461.07813.35449A6.26928,6.26928,0,0,0,2.89014,9.20311a8.42168,8.42168,0,0,0,.04248.92187c.334,4.60254,3.334,5.98438,5.42431,6.459-.04345.125-.083.25878-.11816.40039a1.00023,1.00023,0,0,0,1.94238.47851,1.6784,1.6784,0,0,1,.46778-.87793.99947.99947,0,0,0-.5459-1.74512c-3.4541-.39453-4.95362-1.80175-5.1792-4.89843a6.61076,6.61076,0,0,1-.03369-.73828,4.25769,4.25769,0,0,1,.91943-2.71289,3.022,3.022,0,0,1,.1958-.23145.99988.99988,0,0,0,.188-1.02441,3.3876,3.3876,0,0,1-.15527-.55567A4.09356,4.09356,0,0,1,6.1167,3.06346a7.54263,7.54263,0,0,1,2.415,1.17968,1.00877,1.00877,0,0,0,.82764.13282,11.77716,11.77716,0,0,1,6.17285.001,1.00549,1.00549,0,0,0,.83056-.13769,7.572,7.572,0,0,1,2.40528-1.19043,4.03977,4.03977,0,0,1,.0874,1.57812,3.205,3.205,0,0,1-.16895.60743.9999.9999,0,0,0,.188,1.02441c.07715.08691.1543.18066.22363.26855A4.12186,4.12186,0,0,1,20,9.20311a7.03888,7.03888,0,0,1-.0376.77734c-.22021,3.05566-1.72558,4.46387-5.1958,4.85937a1,1,0,0,0-.54541,1.7461,1.63079,1.63079,0,0,1,.46631.9082,3.06079,3.06079,0,0,1,.09229.81934v2.334C14.77,21.2949,14.77,21.78025,14.77,22.00291a1,1,0,1,0,2,0c0-.2168,0-.69238.00977-1.33984V18.31346a4.8815,4.8815,0,0,0-.15479-1.31153,4.25638,4.25638,0,0,0-.11621-.416,6.51258,6.51258,0,0,0,5.44531-6.42383A8.69677,8.69677,0,0,0,22,9.20311,6.13062,6.13062,0,0,0,20.7373,5.37693Z"/></svg>',
                ),
                array(
                    'keys' => 'github',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"/></svg>',
                ),
                array(
                    'keys' => 'glass-martini-alt-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.71,16.29l-14-14A1,1,0,0,0,4.29,3.71L6.59,6H5a1,1,0,0,0-.9.57,1,1,0,0,0,.12,1L11,16.1V20H6.75a1,1,0,0,0,0,2h10.5a1,1,0,0,0,0-2H13V16.1l1.64-2,3.65,3.65a1,1,0,0,0,1.42,0A1,1,0,0,0,19.71,16.29ZM7.08,8H8.59l1.89,1.89H8.59ZM12,14.15l-1.81-2.26h2.29l.74.74ZM14.66,8h2.26l-.63.79a1,1,0,0,0,.15,1.4,1,1,0,0,0,.63.22,1,1,0,0,0,.78-.37l1.93-2.42a1,1,0,0,0,.12-1A1,1,0,0,0,19,6H14.66a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'glass-martini-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.78,3.62a1,1,0,0,0,.12-1.05A1,1,0,0,0,21,2H3a1,1,0,0,0-.9.57,1,1,0,0,0,.12,1.05L11,14.6V20H5.25a1,1,0,0,0,0,2h13.5a1,1,0,0,0,0-2H13V14.6ZM5.08,4H18.92l-2.4,3h-9ZM12,12.65,9.08,9h5.84Z"/></svg>',
                ),
                array(
                    'keys' => 'glass-martini',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,20H13V14.94A9,9,0,0,0,21,6a8.72,8.72,0,0,0-.67-3.39,1,1,0,0,0-.22-.32L20,2.21a.92.92,0,0,0-.21-.13A.94.94,0,0,0,19.51,2l-.1,0H4.59L4.5,2a.94.94,0,0,0-.29.06A2.12,2.12,0,0,0,4,2.2l-.12.09a1,1,0,0,0-.22.32A8.72,8.72,0,0,0,3,6a9,9,0,0,0,8,8.94V20H6a1,1,0,0,0,0,2H18a1,1,0,0,0,0-2ZM5,6a6.91,6.91,0,0,1,.29-2H18.71A6.91,6.91,0,0,1,19,6,7,7,0,0,1,5,6Z"/></svg>',
                ),
                array(
                    'keys' => 'glass-tea',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,3a3,3,0,0,0-2.23-1H7.23a3,3,0,0,0-3,3.33l1.56,14a3,3,0,0,0,3,2.67h6.42a3,3,0,0,0,3-2.67l1.56-14A3,3,0,0,0,19,3ZM16.2,19.11a1,1,0,0,1-1,.89H8.79a1,1,0,0,1-1-.89L6.78,10H17.22ZM17.44,8H6.56L6.24,5.11a1,1,0,0,1,.25-.78A1,1,0,0,1,7.23,4h9.54a1,1,0,0,1,.74.33,1,1,0,0,1,.25.78ZM14,18a1,1,0,0,0,1-1V13a1,1,0,0,0-2,0v4A1,1,0,0,0,14,18Zm-4,0a1,1,0,0,0,1-1V13a1,1,0,0,0-2,0v4A1,1,0,0,0,10,18Z"/></svg>',
                ),
                array(
                    'keys' => 'glass',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.75,2.33A1,1,0,0,0,19,2H5a1,1,0,0,0-.75.33A1,1,0,0,0,4,3.11l1.8,16.22a3,3,0,0,0,3,2.67h6.42a3,3,0,0,0,3-2.67L20,3.11A1,1,0,0,0,19.75,2.33ZM16.2,19.11a1,1,0,0,1-1,.89H8.79a1,1,0,0,1-1-.89L6.78,10H17.22ZM17.44,8H6.56L6.12,4H17.88Z"/></svg>',
                ),
                array(
                    'keys' => 'globe',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.41,8.64s0,0,0-.05a10,10,0,0,0-18.78,0s0,0,0,.05a9.86,9.86,0,0,0,0,6.72s0,0,0,.05a10,10,0,0,0,18.78,0s0,0,0-.05a9.86,9.86,0,0,0,0-6.72ZM4.26,14a7.82,7.82,0,0,1,0-4H6.12a16.73,16.73,0,0,0,0,4Zm.82,2h1.4a12.15,12.15,0,0,0,1,2.57A8,8,0,0,1,5.08,16Zm1.4-8H5.08A8,8,0,0,1,7.45,5.43,12.15,12.15,0,0,0,6.48,8ZM11,19.7A6.34,6.34,0,0,1,8.57,16H11ZM11,14H8.14a14.36,14.36,0,0,1,0-4H11Zm0-6H8.57A6.34,6.34,0,0,1,11,4.3Zm7.92,0h-1.4a12.15,12.15,0,0,0-1-2.57A8,8,0,0,1,18.92,8ZM13,4.3A6.34,6.34,0,0,1,15.43,8H13Zm0,15.4V16h2.43A6.34,6.34,0,0,1,13,19.7ZM15.86,14H13V10h2.86a14.36,14.36,0,0,1,0,4Zm.69,4.57a12.15,12.15,0,0,0,1-2.57h1.4A8,8,0,0,1,16.55,18.57ZM19.74,14H17.88A16.16,16.16,0,0,0,18,12a16.28,16.28,0,0,0-.12-2h1.86a7.82,7.82,0,0,1,0,4Z"/></svg>',
                ),
                array(
                    'keys' => 'gold',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,11h8a1,1,0,0,0,.77-.37A1,1,0,0,0,17,9.8l-1-5A1,1,0,0,0,15,4H9a1,1,0,0,0-1,.8l-1,5a1,1,0,0,0,.21.83A1,1,0,0,0,8,11ZM9.82,6h4.36l.6,3H9.22ZM22,13.8a1,1,0,0,0-1-.8H15a1,1,0,0,0-1,.8l-1,5a1,1,0,0,0,.21.83A1,1,0,0,0,14,20h8a1,1,0,0,0,.77-.37A1,1,0,0,0,23,18.8ZM15.22,18l.6-3h4.36l.6,3ZM9,13H3a1,1,0,0,0-1,.8l-1,5a1,1,0,0,0,.21.83A1,1,0,0,0,2,20h8a1,1,0,0,0,.77-.37A1,1,0,0,0,11,18.8l-1-5A1,1,0,0,0,9,13ZM3.22,18l.6-3H8.18l.6,3Z"/></svg>',
                ),
                array(
                    'keys' => 'golf-ball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,9a1,1,0,1,0,1,1A1,1,0,0,0,14,9Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,14,6ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17,8a1,1,0,1,0,1,1A1,1,0,0,0,17,8Z"/></svg>',
                ),
                array(
                    'keys' => 'google-drive-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,14.44a.62.62,0,0,0,0-.13.61.61,0,0,1,0-.12l-.05-.12h0l-6-10.29A1,1,0,0,0,15,3.29H9a1,1,0,0,0-.5.13l-.11.08a.73.73,0,0,0-.09.08.58.58,0,0,0-.1.12s0,0-.06.08h0l-6,10.33a1,1,0,0,0,0,1l3,5.08h0a.83.83,0,0,0,.11.15l0,.06a1.1,1.1,0,0,0,.44.26h0a.83.83,0,0,0,.22,0H18a1,1,0,0,0,.86-.49l3-5.14h0l.05-.12a.61.61,0,0,1,0-.12.53.53,0,0,0,0-.13.51.51,0,0,0,0-.13A.59.59,0,0,0,22,14.44ZM6,17.73l-1.79-3.1L9,6.27l.87,1.5,1,1.66L7,15.91ZM12,11.41l1.26,2.16H10.72Zm5.43,7.3H7.7l1.84-3.14h9.72Zm-1.86-5.14L10.74,5.29h3.69l4.83,8.28Z"/></svg>',
                ),
                array(
                    'keys' => 'google-drive',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.4231,13.88785,15.33356,3.33792H8.66663l6.09,10.54993ZM8.08917,4.33835,2,14.88736l3.33356,5.77472,6.08911-10.54926Zm1.73273,10.549L6.48877,20.66208H18.66663L22,14.88736Z"/></svg>',
                ),
                array(
                    'keys' => 'google-hangouts-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.9917,7.69049a2,2,0,0,0,0,4l.01514-.00153v.50147a.501.501,0,0,1-.5.5,1,1,0,0,0,0,2,2.50232,2.50232,0,0,0,2.5-2.5v-2.5A.94144.94144,0,0,0,10.9765,9.54,1.99365,1.99365,0,0,0,8.9917,7.69049Zm2.99951-6.68854a9.78734,9.78734,0,0,0-1,19.52344V22.002a.99911.99911,0,0,0,1.23926.97071A12.53481,12.53481,0,0,0,21.69727,11.998a9.73409,9.73409,0,0,0-9.70606-10.9961ZM19.709,11.78223a10.54778,10.54778,0,0,1-6.71777,8.86035V19.57617a.99942.99942,0,0,0-1-1,7.78711,7.78711,0,1,1,7.78809-7.78711A7.94524,7.94524,0,0,1,19.709,11.78223ZM14.9917,7.69049a2,2,0,1,0,0,4l.01514-.00153v.50147a.501.501,0,0,1-.5.5,1,1,0,0,0,0,2,2.50232,2.50232,0,0,0,2.5-2.5v-2.5A.94144.94144,0,0,0,16.9765,9.54,1.99365,1.99365,0,0,0,14.9917,7.69049Z"/></svg>',
                ),
                array(
                    'keys' => 'google-hangouts',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.44411,9.05505a8.50456,8.50456,0,0,0-2.17292-4.334,8.40344,8.40344,0,0,0-1.62213-1.35748,8.48891,8.48891,0,0,0-3.6405-1.30927A4.15272,4.15272,0,0,1,12.52766,2H11.3932c-.01226.02863-.03857.01819-.05944.02014-.29212.02576-.58283.059-.87116.11365A8.45336,8.45336,0,0,0,5.28615,5.2384a8.35853,8.35853,0,0,0-1.8393,4.7085,8.58926,8.58926,0,0,0,.18476,2.52869,8.1479,8.1479,0,0,0,.62426,1.79c.02448.04871.04859.09742.07349.14606A8.601,8.601,0,0,0,6.1125,16.80835a8.5306,8.5306,0,0,0,5.76313,2.33246c.10015.0014.12744.02606.12683.12848-.00458.87353-.00263,1.74719-.00238,2.62085.00006.03393.00268.06775.00464.10986.02825-.01147.04595-.018.063-.02606A17.98894,17.98894,0,0,0,16.558,19.008q.40055-.36466.76892-.76246c.10529-.11334.20972-.22869.31525-.34191.163-.17432.30407-.36908.45776-.55262.17749-.21173.33679-.43676.494-.66327a11.03342,11.03342,0,0,0,.91852-1.5744c.13195-.27887.25756-.55993.36877-.84759a.09617.09617,0,0,0,.01105-.01612,10.277,10.277,0,0,0,.60058-2.439c.03607-.29126.05945-.58435.07422-.87726A8.14067,8.14067,0,0,0,20.44411,9.05505Zm-9.18994,2.81934a2.5047,2.5047,0,0,1-.84,1.87732c-.02844.02637-.056.05389-.08374.08087a2.68427,2.68427,0,0,1-.93378.48065,3.80048,3.80048,0,0,1-.44757.0849.2109.2109,0,0,1-.23492-.15216l.00116-.96814c.00567-.095-.0326-.19678.04352-.28058A.26578.26578,0,0,1,8.897,12.9129a1.77446,1.77446,0,0,0,.49414-.16845,1.13159,1.13159,0,0,0,.53808-.73169c.01215-.05011.02381-.10053.0354-.15088Q8.9438,11.86,7.92323,11.85852a.65268.65268,0,0,1-.17431-.018.413.413,0,0,1-.30652-.38532q-.00192-1.54339.00152-3.087a.46722.46722,0,0,1,.13837-.436.387.387,0,0,1,.25629-.10205q1.50083-.00027,3.00177-.00055a.41616.41616,0,0,1,.39929.52765.38789.38789,0,0,1,.0166.153C11.25649,9.63147,11.26277,10.75317,11.25417,11.87439Zm5.3031.005a2.55694,2.55694,0,0,1-1.55652,2.32789c-.02338.01-.04566.02294-.06848.03442l-.03815.01068-.02161.01227a4.5917,4.5917,0,0,1-.5888.12933.2158.2158,0,0,1-.26941-.21692c-.00153-.10736-.00232-.215-.00318-.32245l.00556-.57727c-.00086-.04254-.00238-.08471-.00226-.127.00018-.14783.057-.2102.24078-.25214a1.31856,1.31856,0,0,0,.63361-.29693,1.26351,1.26351,0,0,0,.37756-.73963l-1.8858-.0036c-.06836-.00012-.13678.00086-.20526-.0003a.419.419,0,0,1-.43244-.43982q.00047-1.52445.00238-3.04877l-.0017-.02936a.43441.43441,0,0,1,.20385-.45166A.38972.38972,0,0,1,13.16,7.83q1.49094-.00082,2.98187-.00086a.41625.41625,0,0,1,.39917.52771.39178.39178,0,0,1,.01654.15289Q16.55757,10.19455,16.55727,11.87939Z"/></svg>',
                ),
                array(
                    'keys' => 'google-play',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.91887,10.653c-.31445-.16992-3.01074-1.73438-4.02246-2.32324l-.00293-.002L4.6386,1.25262a1.679,1.679,0,0,0-1.40711-.1593c-.02618.0094-.05078.01886-.07623.03051a1.41835,1.41835,0,0,0-.17291.06922,1.51864,1.51864,0,0,0-.73828,1.36426V21.54266a1.43542,1.43542,0,0,0,.69238,1.2705,1.30761,1.30761,0,0,0,.15479.06373c.02893.01336.05651.025.08636.03552a1.37893,1.37893,0,0,0,.44635.0824,1.67263,1.67263,0,0,0,.83106-.23145c.38867-.22559,12.43847-7.18262,12.43847-7.18262L20.914,13.25945a1.52522,1.52522,0,0,0,.8418-1.334A1.49078,1.49078,0,0,0,20.91887,10.653ZM4.24407,19.839V4.10186l7.94012,7.85907Zm5.018-2.16168,4.34351-4.30957,1.14954,1.13782C13.49047,15.23583,11.35381,16.4696,9.26207,17.67736Zm4.3418-7.125L9.206,6.19933l5.55365,3.2063ZM16.55065,13.469l-1.52539-1.50977L16.553,10.44341c.72027.41828,1.84283,1.06934,2.6159,1.51429Z"/></svg>',
                ),
                array(
                    'keys' => 'google',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.60229,10.00391a1.00005,1.00005,0,0,0-.98388-.82227H12.2a.99974.99974,0,0,0-1,1V14.0498a.99974.99974,0,0,0,1,1h3.9624a3.65162,3.65162,0,0,1-1.13183,1.1875A5.0604,5.0604,0,0,1,12.2,17.02246a4.93525,4.93525,0,0,1-4.64624-3.4378L7.55347,13.583a4.90382,4.90382,0,0,1,0-3.167l.00024-.00165A4.9356,4.9356,0,0,1,12.2,6.97754,4.37756,4.37756,0,0,1,15.3313,8.19531a1.00053,1.00053,0,0,0,1.39844-.01562L19.5979,5.31152a.99918.99918,0,0,0-.02539-1.43847A10.62342,10.62342,0,0,0,12.2,1,10.949,10.949,0,0,0,2.37134,7.05878l-.00147.00177A10.92175,10.92175,0,0,0,1.2,12a11.07862,11.07862,0,0,0,1.16992,4.93945l.00147.00177A10.949,10.949,0,0,0,12.2,23a10.5255,10.5255,0,0,0,7.29468-2.687l.00073-.00049.00079-.00085.00019-.00013.00006-.00012a10.78575,10.78575,0,0,0,3.30365-8.08386A12.51533,12.51533,0,0,0,22.60229,10.00391ZM12.2,3a8.68219,8.68219,0,0,1,5.2085,1.67285L15.95483,6.126A6.46322,6.46322,0,0,0,12.2,4.97754,6.88648,6.88648,0,0,0,6.21069,8.52832L5.14148,7.69958l-.585-.45367A8.95257,8.95257,0,0,1,12.2,3ZM3.67944,14.90332a9.02957,9.02957,0,0,1,0-5.80664l1.78223,1.38184a6.85381,6.85381,0,0,0,0,3.042ZM12.2,21A8.9528,8.9528,0,0,1,4.5564,16.75391l.37841-.29352,1.27588-.98969A6.88482,6.88482,0,0,0,12.2,19.02246a7.27662,7.27662,0,0,0,3.30573-.75079L17.19739,19.585A8.88989,8.88989,0,0,1,12.2,21Zm6.52588-2.76074-.183-.142L17.16553,17.028a5.60626,5.60626,0,0,0,1.39966-2.79553.9998.9998,0,0,0-.9834-1.18262H13.2V11.18164h7.54883c.03418.3457.05127.69531.05127,1.0459A9.05156,9.05156,0,0,1,18.72583,18.23926Z"/></svg>',
                ),
                array(
                    'keys' => 'graduation-cap',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.49,10.19l-1-.55h0l-9-5-.11,0a1.06,1.06,0,0,0-.19-.06l-.19,0-.18,0a1.17,1.17,0,0,0-.2.06l-.11,0-9,5a1,1,0,0,0,0,1.74L4,12.76V17.5a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V12.76l2-1.12V14.5a1,1,0,0,0,2,0V11.06A1,1,0,0,0,21.49,10.19ZM16,17.5a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V13.87l4.51,2.5.15.06.09,0a1,1,0,0,0,.25,0h0a1,1,0,0,0,.25,0l.09,0a.47.47,0,0,0,.15-.06L16,13.87Zm-5-3.14L4.06,10.5,11,6.64l6.94,3.86Z"/></svg>',
                ),
                array(
                    'keys' => 'graph-bar',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6,13H2a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1H6a1,1,0,0,0,1-1V14A1,1,0,0,0,6,13ZM5,21H3V15H5ZM22,9H18a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V10A1,1,0,0,0,22,9ZM21,21H19V11h2ZM14,1H10A1,1,0,0,0,9,2V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V2A1,1,0,0,0,14,1ZM13,21H11V3h2Z"/></svg>',
                ),
                array(
                    'keys' => 'grid',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM11,20H4V16h7Zm0-6H4V10h7Zm9,6H13V16h7Zm0-6H13V10h7Zm0-6H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'grids',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM8,20H4V4H8Zm6,0H10V4h4Zm6,0H16V4h4Z"/></svg>',
                ),
                array(
                    'keys' => 'grin-tongue-wink-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.21,10.54a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41,3.08,3.08,0,0,0-4.24,0,1,1,0,1,0,1.41,1.41A1,1,0,0,1,9.21,10.54ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM15,9a1,1,0,1,0,1,1A1,1,0,0,0,15,9Zm0,4H9a1,1,0,0,0,0,2,3,3,0,0,0,6,0,1,1,0,0,0,0-2Zm-3,3a1,1,0,0,1-1-1h2A1,1,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'grin-tongue-wink',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17.62,9.13a3.08,3.08,0,0,0-4.24,0,1,1,0,0,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0A1,1,0,0,0,17.62,9.13ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6,2H9a1,1,0,0,0,0,2,3,3,0,0,0,6,0,1,1,0,0,0,0-2Zm-3,3a1,1,0,0,1-1-1h2A1,1,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'grin',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm3-9A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm3-7H9a1,1,0,0,0-1,1,4,4,0,0,0,8,0A1,1,0,0,0,15,13Zm-3,3a2,2,0,0,1-1.73-1h3.46A2,2,0,0,1,12,16Zm3-7a1,1,0,1,0,1,1A1,1,0,0,0,15,9Z"/></svg>',
                ),
                array(
                    'keys' => 'grip-horizontal-line',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,11H21a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Zm18,2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'hard-hat',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,13.17V13a8,8,0,0,0-2.42-5.74A7.84,7.84,0,0,0,14.4,5.38l-.05,0A8.24,8.24,0,0,0,11.76,5,8.21,8.21,0,0,0,4,13.17,3,3,0,0,0,5,19H19a3,3,0,0,0,1-5.83ZM19,17H5a1,1,0,0,1,0-2H7a1,1,0,0,0,0-2H6A6.41,6.41,0,0,1,9,7.85V11a1,1,0,0,0,2,0V7.09A7.34,7.34,0,0,1,11.82,7H12a5.56,5.56,0,0,1,1,.1V11a1,1,0,0,0,2,0V7.82a6.65,6.65,0,0,1,1.18.87A6,6,0,0,1,18,13H17a1,1,0,0,0,0,2h2a1,1,0,0,1,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'hdd',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,14.86a0,0,0,0,1,0,0v-.05a2.61,2.61,0,0,0-.1-.57L20.26,4.51a3,3,0,0,0-3-2.51H6.69A3,3,0,0,0,3.74,4.51L2.12,14.22a2.61,2.61,0,0,0-.1.57v.05a0,0,0,0,1,0,0C2,14.91,2,15,2,15v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15C22,15,22,14.91,22,14.86ZM5.71,4.83a1,1,0,0,1,1-.83H17.31a1,1,0,0,1,1,.83l1.2,7.22A2.63,2.63,0,0,0,19,12H5a2.63,2.63,0,0,0-.49.05ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15.08l.08-.46A1,1,0,0,1,5,14H19a1,1,0,0,1,.92.62l.08.46Zm-3-3a1,1,0,1,0,1,1A1,1,0,0,0,17,16Z"/></svg>',
                ),
                array(
                    'keys' => 'head-side-cough',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M4.29291,20.29291a1,1,0,1,0,1.41418,0A.99988.99988,0,0,0,4.29291,20.29291Zm-3-3a1,1,0,1,0,1.41418,0A.99988.99988,0,0,0,1.29291,17.29291Zm4-1.00073a1,1,0,1,0,1.41418,0A.99988.99988,0,0,0,5.29291,16.29218ZM16.15039,2.00342a7.06726,7.06726,0,0,0-7.28418,7.063V9.082L7.0957,12.84033A.99943.99943,0,0,0,8,14.2666h.86621v1.79981A1.9355,1.9355,0,0,0,10.7998,18H11.667v1.7998a1,1,0,0,0,2,0V17.98639A.99416.99416,0,0,0,13.59961,16l-.8324.0202A.94008.94008,0,0,0,12.667,16a.94011.94011,0,0,0-.12756.02576l-1.67322.04065V13.2666a.99974.99974,0,0,0-1-1H9.57715l1.20508-2.55908a.99032.99032,0,0,0,.09472-.46729c0-.01074-.00976-.16259-.01074-.17382A5.02527,5.02527,0,0,1,12.4043,5.43066a5.09178,5.09178,0,0,1,3.68554-1.42822A5.23852,5.23852,0,0,1,21,9.32129l-1.833,6.9873a1.0083,1.0083,0,0,0,.00586.53321l.93262,3.23486a1.00046,1.00046,0,0,0,.96094.72363,1.01739,1.01739,0,0,0,.27734-.03955.99991.99991,0,0,0,.68359-1.23779l-.85644-2.96924,1.7959-6.76416A1.03147,1.03147,0,0,0,23,9.5332V9.32129A7.25231,7.25231,0,0,0,16.15039,2.00342Z"/></svg>',
                ),
                array(
                    'keys' => 'head-side-mask',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.23047,2.00342A7.36652,7.36652,0,0,0,7.77734,4.11719,7.44119,7.44119,0,0,0,5.5,9.46533L3.65625,12.46289a.995.995,0,0,0-.15625.52v.04053a.99952.99952,0,0,0,.07031.34668l1.43946,3.87256c.01269.03418.02734.06689.043.09912A2.9843,2.9843,0,0,0,7.73633,19H8.5v2a1,1,0,0,0,2,0V19h1.99689l.00311.00049a.99907.99907,0,0,0,.32129-.05371l3.70026-1.25623a.99865.99865,0,0,0,.01751.12049l1,3.4663a1.00148,1.00148,0,0,0,.96094.72315,1.01777,1.01777,0,0,0,.27734-.03955,1.00043,1.00043,0,0,0,.6836-1.23828l-.92383-3.2002,1.92969-7.26611A1.03147,1.03147,0,0,0,20.5,10V9.77246A7.698,7.698,0,0,0,13.23047,2.00342ZM11.5,17H7.73633a.99477.99477,0,0,1-.874-.51318L5.93848,14H11.5Zm5.523-1.59137-3.523,1.196V13.72089l4.34479-1.44831Zm1.41211-5.38843a.973.973,0,0,0-.25147.03107L12.3374,12H6.28906l1.07422-1.74658a.99913.99913,0,0,0,.14746-.562c0-.01026-.00976-.18116-.01074-.19141A5.45491,5.45491,0,0,1,9.16992,5.55273a5.52222,5.52222,0,0,1,4-1.55029A5.6849,5.6849,0,0,1,18.5,9.77246Z"/></svg>',
                ),
                array(
                    'keys' => 'head-side',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.23047,2.00342A7.37247,7.37247,0,0,0,7.77734,4.11719,7.44044,7.44044,0,0,0,5.5,9.5v.03027L3.5957,13.57373A.99944.99944,0,0,0,4.5,15h1v2a2.00229,2.00229,0,0,0,2,2h1v2a1,1,0,0,0,2,0V19a1,1,0,0,0,0-2h-3V14a.99974.99974,0,0,0-1-1H6.07617L7.416,10.15576a.99036.99036,0,0,0,.09472-.46435c0-.01026-.00976-.18116-.01074-.19141A5.45491,5.45491,0,0,1,9.16992,5.55273a5.52688,5.52688,0,0,1,4-1.55029A5.6849,5.6849,0,0,1,18.5,9.77246l-1.9668,7.50488a1.01018,1.01018,0,0,0,.00586.5337l1,3.4663a1.00148,1.00148,0,0,0,.96094.72315,1.01777,1.01777,0,0,0,.27734-.03955,1.00043,1.00043,0,0,0,.6836-1.23828l-.92383-3.2002,1.92969-7.26611A1.03147,1.03147,0,0,0,20.5,10V9.77246A7.698,7.698,0,0,0,13.23047,2.00342Z"/></svg>',
                ),
                array(
                    'keys' => 'headphone-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.06934,5.93555a9.94468,9.94468,0,0,0-9.38868-2.6709.99992.99992,0,0,0,.43848,1.95117A8.0193,8.0193,0,0,1,20,13h-.33984a1,1,0,0,0,0,2H20v.33984a1,1,0,1,0,2,0V13A9.88842,9.88842,0,0,0,19.06934,5.93555ZM3.707,2.293A.99989.99989,0,0,0,2.293,3.707L4.72833,6.1424A9.96176,9.96176,0,0,0,2,13v7a1,1,0,0,0,1,1H6a3.00328,3.00328,0,0,0,3-3V16a3.00328,3.00328,0,0,0-3-3H4A7.96344,7.96344,0,0,1,6.14453,7.55859L15,16.41406V18a3.00328,3.00328,0,0,0,3,3h1.58594l.707.707A.99989.99989,0,0,0,21.707,20.293ZM6,15a1.0013,1.0013,0,0,1,1,1v2a1.0013,1.0013,0,0,1-1,1H4V15Z"/></svg>',
                ),
                array(
                    'keys' => 'headphones-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'headphones',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,3A10,10,0,0,0,2,13v7a1,1,0,0,0,1,1H6a3,3,0,0,0,3-3V16a3,3,0,0,0-3-3H4a8,8,0,0,1,16,0H18a3,3,0,0,0-3,3v2a3,3,0,0,0,3,3h3a1,1,0,0,0,1-1V13A10,10,0,0,0,12,3ZM6,15a1,1,0,0,1,1,1v2a1,1,0,0,1-1,1H4V15Zm14,4H18a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1h2Z"/></svg>',
                ),
                array(
                    'keys' => 'heart-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.16,4.61A6.27,6.27,0,0,0,12,4a6.27,6.27,0,0,0-8.16,9.48l7.45,7.45a1,1,0,0,0,1.42,0l7.45-7.45A6.27,6.27,0,0,0,20.16,4.61Zm-1.41,7.46L12,18.81,5.25,12.07a4.28,4.28,0,0,1,3-7.3,4.25,4.25,0,0,1,3,1.25,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6.05Z"/></svg>',
                ),
                array(
                    'keys' => 'heart-break',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.16,4.61A6.27,6.27,0,0,0,12,4a6.27,6.27,0,0,0-8.16,9.48l7.45,7.46a1,1,0,0,0,1.42,0l7.45-7.46A6.27,6.27,0,0,0,20.16,4.61Zm-1.41,7.45L12,18.81,5.25,12.06a4.26,4.26,0,0,1,5.54-6.45l-1.71,4a1,1,0,0,0,0,.83,1,1,0,0,0,.65.53l2.77.7L11.1,14.56a1,1,0,0,0,.46,1.34A1,1,0,0,0,12,16a1,1,0,0,0,.9-.56l2-4a1,1,0,0,0,0-.86,1.05,1.05,0,0,0-.67-.55l-2.83-.71,1.45-3.39a4.26,4.26,0,0,1,5.92,6.13Z"/></svg>',
                ),
                array(
                    'keys' => 'heart-medical',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,11H13V10a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V13h1a1,1,0,0,0,0-2Zm6.16-6A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.48Z"/></svg>',
                ),
                array(
                    'keys' => 'heart-rate',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11H17.06a.78.78,0,0,0-.21,0l-.17,0a1.3,1.3,0,0,0-.15.1,1.67,1.67,0,0,0-.16.12,1,1,0,0,0-.09.13,1.32,1.32,0,0,0-.12.2v0l-1.6,4.41L10.39,4.66a1,1,0,0,0-1.88,0L6.2,11H3a1,1,0,0,0,0,2H6.92L7.15,13l.15,0a.86.86,0,0,0,.16-.1,1.67,1.67,0,0,0,.16-.12l.09-.13a1,1,0,0,0,.12-.2v0L9.45,7.92l4.16,11.42a1,1,0,0,0,.94.66h0a1,1,0,0,0,.94-.66L17.79,13H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'heart-sign',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.41a6.27,6.27,0,0,0-8.16,9.48l6,6.05a3,3,0,0,0,4.24,0l6-6.05A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6,6a1,1,0,0,1-1.42,0l-6-6a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,6Z"/></svg>',
                ),
                array(
                    'keys' => 'heart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.16,5A6.29,6.29,0,0,0,12,4.36a6.27,6.27,0,0,0-8.16,9.48l6.21,6.22a2.78,2.78,0,0,0,3.9,0l6.21-6.22A6.27,6.27,0,0,0,20.16,5Zm-1.41,7.46-6.21,6.21a.76.76,0,0,1-1.08,0L5.25,12.43a4.29,4.29,0,0,1,0-6,4.27,4.27,0,0,1,6,0,1,1,0,0,0,1.42,0,4.27,4.27,0,0,1,6,0A4.29,4.29,0,0,1,18.75,12.43Z"/></svg>',
                ),
                array(
                    'keys' => 'heartbeat',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,10.41H18.5a1,1,0,0,0-.71.3L16.55,12l-2.8-3.19a1,1,0,0,0-1.46,0l-1.7,1.7H9a1,1,0,0,0,0,2h2a1,1,0,0,0,.71-.29L13,10.88l2.8,3.19a1,1,0,0,0,.72.34h0a1,1,0,0,0,.71-.29l1.7-1.71H21a1,1,0,0,0,0-2Zm-7.39,5.3-1.9,1.9a1,1,0,0,1-1.42,0L5.08,12.4a3.69,3.69,0,0,1,0-5.22,3.69,3.69,0,0,1,5.21,0,1,1,0,0,0,1.42,0,3.78,3.78,0,0,1,5.21,0,3.94,3.94,0,0,1,.58.75,1,1,0,0,0,1.72-1,6,6,0,0,0-.88-1.13A5.68,5.68,0,0,0,11,5.17,5.68,5.68,0,0,0,2,9.79a5.62,5.62,0,0,0,1.67,4L8.88,19a3,3,0,0,0,4.24,0L15,17.12a1,1,0,0,0,0-1.41A1,1,0,0,0,13.61,15.71Z"/></svg>',
                ),
                array(
                    'keys' => 'hindi-to-chinese',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.022,2h-2a1,1,0,0,0,0,2V6H7.83771A2.96481,2.96481,0,0,0,8.022,5,3,3,0,0,0,2.42383,3.5a1.00016,1.00016,0,1,0,1.73242,1A1.00171,1.00171,0,0,1,5.022,4a1,1,0,0,1,0,2,1,1,0,0,0,0,2,1,1,0,0,1,0,2,1.00171,1.00171,0,0,1-.86572-.5,1.00016,1.00016,0,1,0-1.73242,1A3,3,0,0,0,8.022,9a2.96481,2.96481,0,0,0-.18426-1H9.022v3a1,1,0,0,0,2,0V4a1,1,0,0,0,0-2Zm3,5h1a1.0013,1.0013,0,0,1,1,1V9a1,1,0,0,0,2,0V8a3.00328,3.00328,0,0,0-3-3h-1a1,1,0,0,0,0,2Zm-4,9h-1a1.0013,1.0013,0,0,1-1-1V14a1,1,0,0,0-2,0v1a3.00328,3.00328,0,0,0,3,3h1a1,1,0,0,0,0-2Zm11-1a1,1,0,0,0,0-2h-3v-.5a1,1,0,0,0-2,0V13h-3a1,1,0,0,0,0,2h5.18427a6.72756,6.72756,0,0,1-1.22553,2.52667,6.66828,6.66828,0,0,1-.62915-.98272.99972.99972,0,1,0-1.77929.9121,8.67791,8.67791,0,0,0,.9591,1.468A6.6182,6.6182,0,0,1,13.10645,20.023a1.00008,1.00008,0,0,0,.42675,1.9541,8.63506,8.63506,0,0,0,3.445-1.62164,8.72368,8.72368,0,0,0,3.46857,1.62115,1,1,0,1,0,.43066-1.95312,6.72477,6.72477,0,0,1-2.4461-1.09009A8.73637,8.73637,0,0,0,20.24371,15Z"/></svg>',
                ),
                array(
                    'keys' => 'history-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.44,2A10,10,0,0,0,4.56,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.06a1,1,0,0,0,0-2H5.66A8,8,0,1,1,11.44,20a1,1,0,1,0,0,2,10,10,0,1,0,0-20Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2h-1V9A1,1,0,0,0,11.44,8Z"/></svg>',
                ),
                array(
                    'keys' => 'history',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,1,1,4,12a1,1,0,0,0-2,0A10,10,0,1,0,12,2Zm0,6a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2H13V9A1,1,0,0,0,12,8Z"/></svg>',
                ),
                array(
                    'keys' => 'home-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"/></svg>',
                ),
                array(
                    'keys' => 'home',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.66,10.25l-9-8a1,1,0,0,0-1.32,0l-9,8a1,1,0,0,0-.27,1.11A1,1,0,0,0,3,12H4v9a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V12h1a1,1,0,0,0,.93-.64A1,1,0,0,0,21.66,10.25ZM13,20H11V17a1,1,0,0,1,2,0Zm5,0H15V17a3,3,0,0,0-6,0v3H6V12H18ZM5.63,10,12,4.34,18.37,10Z"/></svg>',
                ),
                array(
                    'keys' => 'horizontal-align-center',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,10H19V7a1,1,0,0,0-1-1H13V3a1,1,0,0,0-2,0V6H6A1,1,0,0,0,5,7v3H3a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h8v3a1,1,0,0,0,2,0V18h8a1,1,0,0,0,1-1V11A1,1,0,0,0,21,10ZM7,8H17v2H7Zm13,8H4V12H20Z"/></svg>',
                ),
                array(
                    'keys' => 'horizontal-align-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,10H16V7a1,1,0,0,0-1-1H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V18H21a1,1,0,0,0,1-1V11A1,1,0,0,0,21,10ZM4,8H14v2H4Zm16,8H4V12H20Z"/></svg>',
                ),
                array(
                    'keys' => 'horizontal-align-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2a1,1,0,0,0-1,1V6H9A1,1,0,0,0,8,7v3H3a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1H20v3a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM20,16H4V12H20Zm0-6H10V8H20Z"/></svg>',
                ),
                array(
                    'keys' => 'horizontal-distribution-center',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,5H18V3a1,1,0,0,0-2,0V5H15a1,1,0,0,0-1,1V18a1,1,0,0,0,1,1h1v2a1,1,0,0,0,2,0V19h1a1,1,0,0,0,1-1V6A1,1,0,0,0,19,5ZM18,17H16V7h2ZM11,4H9V3A1,1,0,0,0,7,3V4H5A1,1,0,0,0,4,5V19a1,1,0,0,0,1,1H7v1a1,1,0,0,0,2,0V20h2a1,1,0,0,0,1-1V5A1,1,0,0,0,11,4ZM10,18H6V6h4Z"/></svg>',
                ),
                array(
                    'keys' => 'horizontal-distribution-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,4H6V3A1,1,0,0,0,4,3V21a1,1,0,0,0,2,0V20h5a1,1,0,0,0,1-1V5A1,1,0,0,0,11,4ZM10,18H6V6h4ZM19,5H16V3a1,1,0,0,0-2,0V21a1,1,0,0,0,2,0V19h3a1,1,0,0,0,1-1V6A1,1,0,0,0,19,5ZM18,17H16V7h2Z"/></svg>',
                ),
                array(
                    'keys' => 'horizontal-distribution-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2a1,1,0,0,0-1,1V4H13a1,1,0,0,0-1,1V19a1,1,0,0,0,1,1h5v1a1,1,0,0,0,2,0V3A1,1,0,0,0,19,2ZM18,18H14V6h4ZM9,2A1,1,0,0,0,8,3V5H5A1,1,0,0,0,4,6V18a1,1,0,0,0,1,1H8v2a1,1,0,0,0,2,0V3A1,1,0,0,0,9,2ZM8,17H6V7H8Z"/></svg>',
                ),
                array(
                    'keys' => 'hospital-square-sign',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,6a.99974.99974,0,0,0-1,1v4H10V7A1,1,0,0,0,8,7V17a1,1,0,0,0,2,0V13h4v4a1,1,0,0,0,2,0V7A.99974.99974,0,0,0,15,6Zm4-4H5A3.00328,3.00328,0,0,0,2,5V19a3.00328,3.00328,0,0,0,3,3H19a3.00328,3.00328,0,0,0,3-3V5A3.00328,3.00328,0,0,0,19,2Zm1,17a1.001,1.001,0,0,1-1,1H5a1.001,1.001,0,0,1-1-1V5A1.001,1.001,0,0,1,5,4H19a1.001,1.001,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'hospital-symbol',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,7a.99974.99974,0,0,0-1,1v3H10V8A1,1,0,0,0,8,8v8a1,1,0,0,0,2,0V13h4v3a1,1,0,0,0,2,0V8A.99974.99974,0,0,0,15,7ZM12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'hospital',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12.5,16.5h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm0-4h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-5,4h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm0-4h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm14-6h-3v-4a.99974.99974,0,0,0-1-1H6.5a.99974.99974,0,0,0-1,1v4h-3a.99974.99974,0,0,0-1,1v14a.99974.99974,0,0,0,1,1h19a.99974.99974,0,0,0,1-1V7.5A.99974.99974,0,0,0,21.5,6.5Zm-1,14H3.5V8.5h3a.99974.99974,0,0,0,1-1v-4h9v4a.99974.99974,0,0,0,1,1h3Zm-4-8a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM13.5,7H13V6.5a1,1,0,0,0-2,0V7h-.5a1,1,0,0,0,0,2H11v.5a1,1,0,0,0,2,0V9h.5a1,1,0,0,0,0-2Zm4,9.5h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'hourglass',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.9917,21.002h-1V19.335a5.00057,5.00057,0,0,0-.29956-1.67773c-.01093-.02936-.0224-.05658-.03589-.08454a4.97694,4.97694,0,0,0-.66455-1.23675l-1.3999-1.86719a3.01933,3.01933,0,0,1-.6001-1.80078V11.6582a3.02108,3.02108,0,0,1,.87842-2.12109l.65722-.65723A4.94566,4.94566,0,0,0,17.92365,6.0415c.00054-.01391.008-.02551.008-.03955l-.00281-.01373a5.01836,5.01836,0,0,0,.06287-.64349V3.002h1a1,1,0,0,0,0-2h-14a1,1,0,0,0,0,2h1V5.34473a5.01836,5.01836,0,0,0,.06287.64349L6.05176,6.002c0,.014.00744.02564.008.03955a4.94571,4.94571,0,0,0,1.3963,2.83838l.65723.65723A3.02108,3.02108,0,0,1,8.9917,11.6582V12.668a3.02212,3.02212,0,0,1-.59961,1.80078L6.99121,16.33594a4.98221,4.98221,0,0,0-.66437,1.23718c-.0133.02771-.02472.05463-.03552.08368A5.00309,5.00309,0,0,0,5.9917,19.335v1.667h-1a1,1,0,0,0,0,2h14a1,1,0,0,0,0-2Zm-11-16v-2h8v2Zm.87842,2.46387A2.97036,2.97036,0,0,1,8.49323,7.002h6.99694a2.97094,2.97094,0,0,1-.37689.46387l-.65723.65723a4.9603,4.9603,0,0,0-1.42187,2.8789h-2.085A4.96025,4.96025,0,0,0,9.52734,8.123ZM9.99219,15.668a5.03688,5.03688,0,0,0,.98828-2.666h2.02246a5.03332,5.03332,0,0,0,.98877,2.666l1.00012,1.334H8.99133Zm5.99951,5.334h-8V19.335a2.954,2.954,0,0,1,.02722-.333h7.94556a2.954,2.954,0,0,1,.02722.333Z"/></svg>',
                ),
                array(
                    'keys' => 'house-user',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.66406,10.25244l-9-8a.99893.99893,0,0,0-1.32812,0l-9,8a.99991.99991,0,0,0,1.32812,1.49512L4,11.449V21a.99974.99974,0,0,0,1,1H19a.99974.99974,0,0,0,1-1V11.449l.33594.29859a.99991.99991,0,0,0,1.32812-1.49512ZM9.18427,20a2.98208,2.98208,0,0,1,5.63146,0ZM10.5,14.5A1.5,1.5,0,1,1,12,16,1.50164,1.50164,0,0,1,10.5,14.5ZM18,20H16.89893a5.00092,5.00092,0,0,0-2.25867-3.22821A3.46849,3.46849,0,0,0,15.5,14.5a3.5,3.5,0,0,0-7,0,3.46849,3.46849,0,0,0,.85974,2.27179A5.00092,5.00092,0,0,0,7.10107,20H6V9.6712l6-5.33331L18,9.6712Z"/></svg>',
                ),
                array(
                    'keys' => 'html3-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7.95215,8.00044h6.98633l-.17719,2H9.99121a1,1,0,0,0,0,2h4.59284L14.32031,14.977l-2.3291.52832L9.66309,14.976l-.09571-1.06445a1,1,0,1,0-1.99218.17774l.16015,1.79a1.00142,1.00142,0,0,0,.77442.88672l3.25976.74024a1.0188,1.0188,0,0,0,.44336,0l3.26074-.74024a1.00139,1.00139,0,0,0,.77442-.88769l.43158-4.86792.002-.01-.00079-.00391.34649-3.9082a1.001,1.001,0,0,0-.99609-1.08789H7.95215a1,1,0,0,0,0,2ZM20.6543,2.32563a1.002,1.002,0,0,0-.73828-.32519H4.06641a.99963.99963,0,0,0-.9961,1.08887L4.51367,19.28364a.999.999,0,0,0,.72754.874l6.47266,1.80566a.99028.99028,0,0,0,.53711,0l6.49023-1.8125a.999.999,0,0,0,.72754-.874l1.44336-16.1875A1.00166,1.00166,0,0,0,20.6543,2.32563Zm-3.11621,16.085-5.55567,1.55176L6.44434,18.41743,5.15918,4.00044H18.82324Z"/></svg>',
                ),
                array(
                    'keys' => 'html3',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M3.19467,2,4.79734,19.99433,11.98947,22l7.2119-2.01315L20.80533,2ZM17.476,6.12274l-.53371,5.99468.00193.03234-.00255.07415v-.00068l-.37922,4.19135-.04178.37236L12,18.03717v.00063l-.00366.00317L7.48367,16.78309l-.30574-3.46518h2.213l.15692,1.76226,2.45276.6644L12,15.74569l2.46141-.6743.26028-2.86933H9.57589L9.53173,11.717l-.10093-1.1364-.05224-.61022h5.53877l.20163-2.2317H6.68232L6.638,7.2542l-.10026-1.137L6.48482,5.507H17.52887Zm0,0"/></svg>',
                ),
                array(
                    'keys' => 'html5-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.46777,2.3252A1.00007,1.00007,0,0,0,20.73,2H3.27a1.00039,1.00039,0,0,0-.99609,1.08887l1.52,17a.99944.99944,0,0,0,.72851.87451l7.2002,2A.99628.99628,0,0,0,11.99023,23a1.01206,1.01206,0,0,0,.26709-.03613l7.21973-2a1.00055,1.00055,0,0,0,.729-.875l1.52-17A1,1,0,0,0,21.46777,2.3252Zm-3.19238,16.896L11.99072,20.9624,5.72461,19.22168,4.36328,4H19.63672ZM7.81982,13h6.895l-.32714,3.271-2.56788.917L8.65625,16.05811a1.00017,1.00017,0,1,0-.67285,1.88378l3.5,1.25a1.00291,1.00291,0,0,0,.67285,0l3.5-1.25a1.00044,1.00044,0,0,0,.65869-.84228l.5-5A1.00064,1.00064,0,0,0,15.81982,11H8.72461L8.4248,8h7.895a1,1,0,0,0,0-2h-9a1.00064,1.00064,0,0,0-.99511,1.09961l.5,5A1.00012,1.00012,0,0,0,7.81982,13Z"/></svg>',
                ),
                array(
                    'keys' => 'html5',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M3.1825,2.00012,4.78735,20.00079l7.20191,1.99933,7.22168-2.00207L20.8175,2.00012ZM17.32507,7.88739H8.87683l.20178,2.26074h8.04554l-.60584,6.778L12,18.17834v.00043l-.01013.00275L7.46753,16.92615,7.1582,13.45972H9.37439l.1571,1.76074,2.45874.66388.00208-.00049v-.00018l2.46228-.66461.25635-2.86323H7.05957L6.46411,5.67969h11.0586Z"/></svg>',
                ),
                array(
                    'keys' => 'hunting',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,9a3,3,0,1,0,3,3A3,3,0,0,0,12,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,13Zm9-2H19.93A8,8,0,0,0,13,4.07V3a1,1,0,0,0-2,0V4.07A8,8,0,0,0,4.07,11H3a1,1,0,0,0,0,2H4.07A8,8,0,0,0,11,19.93V21a1,1,0,0,0,2,0V19.93A8,8,0,0,0,19.93,13H21a1,1,0,0,0,0-2Zm-9,7a6,6,0,1,1,6-6A6,6,0,0,1,12,18Z"/></svg>',
                ),
                array(
                    'keys' => 'image-alt-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,20.29l-.93-.93-.09-.1-.06-.07-.5-.5L20,18.62l-5.18-5.2-.09-.08-3.2-3.21L11.43,10,3.71,2.29A1,1,0,0,0,2.29,3.71l1,1A3,3,0,0,0,3,6V18a3,3,0,0,0,3,3H18a2.9,2.9,0,0,0,1.27-.31l0,0h0s0,0,.05,0l.95,1a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM5,6.41,8.24,9.65a2.84,2.84,0,0,0-.67.48L5,12.71ZM6,19a1,1,0,0,1-1-1V15.54l4-4a.81.81,0,0,1,1.1,0L17.59,19ZM9.66,5H18a1,1,0,0,1,1,1v5.94l0,0a1,1,0,1,0-1.42,1.42l1.74,1.74a1,1,0,0,0,1.42,0,1,1,0,0,0,.29-.72h0V6a3,3,0,0,0-3-3H9.66a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'image-block',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.54,2.46A5,5,0,1,0,22,6,5,5,0,0,0,20.54,2.46ZM14,6a3,3,0,0,1,3-3,3,3,0,0,1,1.29.3l-4,4A3,3,0,0,1,14,6Zm5.12,2.12a3.08,3.08,0,0,1-3.4.57l4-4A3,3,0,0,1,20,6,3,3,0,0,1,19.12,8.12ZM19,13a1,1,0,0,0-1,1v.39L16.52,12.9a2.87,2.87,0,0,0-3.93,0l-.7.71L9.41,11.12a2.87,2.87,0,0,0-3.93,0L4,12.61V7A1,1,0,0,1,5,6H9A1,1,0,0,0,9,4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,.95-.17l.09,0A3,3,0,0,0,20,19.44a1.43,1.43,0,0,0,0-.22V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.89a.79.79,0,0,1,1.09,0l3.19,3.18h0L15.46,20Zm13-1a1,1,0,0,1-.18.54L13.3,15l.71-.7a.79.79,0,0,1,1.09,0L18,17.21Z"/></svg>',
                ),
                array(
                    'keys' => 'image-broken',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,14.54,19.21,12a1,1,0,0,0-1.42,0L15,14.84,12.21,12a1,1,0,0,0-1.42,0L8.5,14.34,6.21,12a1,1,0,0,0-1.42,0l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0-.08.38V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15.25a1,1,0,0,0-.08-.38A1,1,0,0,0,21.71,14.54ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15.66l1.5-1.5,2.29,2.3a1,1,0,0,0,1.42,0l2.29-2.3L14.29,17a1,1,0,0,0,1.42,0l2.79-2.8,1.5,1.5ZM19,2H5A3,3,0,0,0,2,5v5.26a1.17,1.17,0,0,0,0,.27s0,.07,0,.1a1,1,0,0,0,1.66.31L5.5,9.16l2.29,2.3a1,1,0,0,0,1.42,0l2.29-2.3L14.29,12a1,1,0,0,0,1.42,0l2.79-2.8,1.77,1.78a1,1,0,0,0,1.66-.31.28.28,0,0,0,0-.09.88.88,0,0,0,.06-.28V5A3,3,0,0,0,19,2Zm1,5.84L19.21,7a1,1,0,0,0-1.42,0L15,9.84,12.21,7a1,1,0,0,0-1.42,0L8.5,9.34,6.21,7A1,1,0,0,0,4.79,7L4,7.84V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'image-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,2.3a1,1,0,0,0-1.41,0L16.92,5.6,15.7,4.4a1,1,0,0,0-1.4,1.43l1.92,1.88a1,1,0,0,0,1.4,0l4.08-4A1,1,0,0,0,21.71,2.3ZM19,9a1,1,0,0,0-1,1v4.39l-1.48-1.48a2.77,2.77,0,0,0-3.93,0l-.7.7L9.41,11.12a2.79,2.79,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h6a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V10A1,1,0,0,0,19,9ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.45,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.78.78,0,0,1,1.1,0L18,17.22Z"/></svg>',
                ),
                array(
                    'keys' => 'image-download',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22.71,6.29a1,1,0,0,0-1.42,0L20,7.59V2a1,1,0,0,0-2,0V7.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l3,3a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3A1,1,0,0,0,22.71,6.29ZM19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h8a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21Z"/></svg>',
                ),
                array(
                    'keys' => 'image-edit',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.73682,3.751,19.31689,1.33105a.99964.99964,0,0,0-1.41406,0L13.32275,5.91113a1.00013,1.00013,0,0,0-.293.707V9.03809a1.00005,1.00005,0,0,0,1,1H16.4502a1.00014,1.00014,0,0,0,.707-.293L21.73682,5.165A.99964.99964,0,0,0,21.73682,3.751ZM16.03613,8.03809H15.02979V7.03223l3.58007-3.58008L19.61572,4.458ZM19,11a1,1,0,0,0-1,1v2.3916l-1.48047-1.48047a2.78039,2.78039,0,0,0-3.92822,0l-.698.698L9.40723,11.123a2.777,2.777,0,0,0-3.92432,0L4,12.606V7A1.0013,1.0013,0,0,1,5,6h6a1,1,0,0,0,0-2H5A3.00328,3.00328,0,0,0,2,7V19a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V12A1,1,0,0,0,19,11ZM5,20a1.0013,1.0013,0,0,1-1-1V15.43408l2.897-2.897a.79926.79926,0,0,1,1.09619,0l3.168,3.16711c.00849.00916.0116.02179.02045.03064L15.44714,20Zm13-1a.97137.97137,0,0,1-.17877.53705l-4.51386-4.51386.698-.698a.77979.77979,0,0,1,1.1001,0L18,17.21973Z"/></svg>',
                ),
                array(
                    'keys' => 'image-lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,5.18V4a3,3,0,0,0-6,0V5.18A3,3,0,0,0,12,8v2a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V8A3,3,0,0,0,20,5.18ZM16,4a1,1,0,0,1,2,0V5H16Zm4,6a1,1,0,0,1-1,1H15a1,1,0,0,1-1-1V8a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1Zm-1,5a1,1,0,0,0-1,1v3a.89.89,0,0,1-.18.53L9.41,11.12a2.86,2.86,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h5a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16A1,1,0,0,0,19,15ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0L15.46,20Z"/></svg>',
                ),
                array(
                    'keys' => 'image-minus',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21,4.00781H17a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2ZM19,8a1,1,0,0,0-1,1v5.3916l-1.48047-1.48047a2.78039,2.78039,0,0,0-3.92822,0l-.698.698L9.40723,11.123a2.777,2.777,0,0,0-3.92432,0L4,12.606V7A1.0013,1.0013,0,0,1,5,6h8a1,1,0,0,0,0-2H5A3.00328,3.00328,0,0,0,2,7V19a3.00328,3.00328,0,0,0,3,3H17a3.00328,3.00328,0,0,0,3-3V9A1,1,0,0,0,19,8ZM5,20a1.0013,1.0013,0,0,1-1-1V15.43408l2.897-2.897a.79926.79926,0,0,1,1.09619,0l3.168,3.16711c.00849.00916.0116.02179.02045.03064L15.44714,20Zm13-1a.97137.97137,0,0,1-.17877.53705l-4.51386-4.51386.698-.698a.77979.77979,0,0,1,1.1001,0L18,17.21973Z"/></svg>',
                ),
                array(
                    'keys' => 'image-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,10a1,1,0,0,0-1,1v3.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.71L9.41,11.12a2.79,2.79,0,0,0-3.93,0L4,12.61V7A1,1,0,0,1,5,6h8a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19.22A2.79,2.79,0,0,0,4.78,22H17.22a2.88,2.88,0,0,0,.8-.12h0a2.74,2.74,0,0,0,2-2.65V11A1,1,0,0,0,19,10ZM5,20a1,1,0,0,1-1-1V15.43l2.89-2.89a.78.78,0,0,1,1.1,0L15.46,20Zm13-1a1,1,0,0,1-.18.54L13.3,15l.71-.7a.77.77,0,0,1,1.1,0L18,17.21ZM21,4H20V3a1,1,0,0,0-2,0V4H17a1,1,0,0,0,0,2h1V7a1,1,0,0,0,2,0V6h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'image-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,13a1,1,0,0,0-1,1v.39l-1.48-1.48a2.77,2.77,0,0,0-3.93,0l-.7.7L9.41,11.12a2.86,2.86,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h8a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.45,20Zm13-1a1,1,0,0,1-.18.53L13.31,15l.7-.7a.78.78,0,0,1,1.1,0L18,17.22ZM19,2a3,3,0,0,0-2.6,1.5,1,1,0,0,0,.37,1.37,1,1,0,0,0,1.36-.37A1,1,0,0,1,20,5a1,1,0,0,1-1,1,1,1,0,0,0,0,2,3,3,0,0,0,0-6Zm.38,7.08A1,1,0,0,0,18.8,9l-.18.06-.18.09-.15.13A1,1,0,0,0,18,10a1,1,0,0,0,.29.71,1,1,0,0,0,1.42,0A1,1,0,0,0,20,10a1,1,0,0,0-.62-.92Z"/></svg>',
                ),
                array(
                    'keys' => 'image-redo',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5,1.5a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75,1,1,0,0,0-1.32-1.51,3,3,0,1,1,.25-4.25H18.5a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1v-3A1,1,0,0,0,21.5,1.5Zm-3,12a1,1,0,0,0-1,1v.39L16,13.41a2.77,2.77,0,0,0-3.93,0l-.7.7L8.91,11.62a2.79,2.79,0,0,0-3.93,0L3.5,13.1V7.5a1,1,0,0,1,1-1h5a1,1,0,0,0,0-2h-5a3,3,0,0,0-3,3v12a3,3,0,0,0,3,3h12a3,3,0,0,0,3-3v-5A1,1,0,0,0,18.5,13.5Zm-14,7a1,1,0,0,1-1-1V15.93L6.4,13a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15,20.5Zm13-1a1,1,0,0,1-.18.53l-4.51-4.51.7-.7a.78.78,0,0,1,1.1,0l2.89,2.9Z"/></svg>',
                ),
                array(
                    'keys' => 'image-resize-landscape',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,11H2a1,1,0,0,0-1,1v9a1,1,0,0,0,1,1H12.86c.05,0,.09,0,.14,0a1,1,0,0,0,1-1V12A1,1,0,0,0,13,11ZM7.44,20l1.93-1.93a.3.3,0,0,1,.5,0L11.79,20ZM12,17.38l-.72-.71a2.41,2.41,0,0,0-3.33,0L4.61,20H3V13h9ZM2,4.11a1,1,0,0,0,.86-.49A1.05,1.05,0,0,0,3.05,3,1,1,0,0,0,2,2,1,1,0,0,0,1,3v.1A1,1,0,0,0,2,4.11ZM9.91,4h.19a1,1,0,0,0,0-2H9.91a1,1,0,0,0,0,2ZM2,8.78a1,1,0,0,0,1-1V7.56a1,1,0,1,0-2,0v.22A1,1,0,0,0,2,8.78ZM14.09,2H13.9a1,1,0,0,0,0,2h.19a1,1,0,0,0,0-2ZM5.91,4H6.1a1,1,0,0,0,0-2H5.91a1,1,0,0,0,0,2ZM22,6.4a1,1,0,0,0-1,1v.21a1,1,0,0,0,2,0V7.4A1,1,0,0,0,22,6.4ZM17.12,20h-.24a1,1,0,1,0,0,2h.24a1,1,0,0,0,0-2ZM21.9,2A1,1,0,0,0,21,3a1,1,0,0,0,.1.42A1,1,0,0,0,23,3.11V3A1.09,1.09,0,0,0,21.9,2ZM22,10.9a1,1,0,0,0-1,1v.22a1,1,0,0,0,2,0V11.9A1,1,0,0,0,22,10.9ZM18.09,2H17.9a1,1,0,0,0,0,2h.19a1,1,0,0,0,0-2ZM22,20a.93.93,0,0,0-.44.11A1,1,0,0,0,21,21,1,1,0,0,0,22,22a1.09,1.09,0,0,0,1-1.1A1,1,0,0,0,22,20Zm0-4.56a1,1,0,0,0-1,1v.22a1,1,0,1,0,2,0V16.4A1,1,0,0,0,22,15.4Z"/></svg>',
                ),
                array(
                    'keys' => 'image-resize-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,8.1a1,1,0,0,0,1-1V6.91a1,1,0,0,0-2,0V7.1A1,1,0,0,0,3,8.1Zm0-4A1,1,0,0,0,3.42,4,1,1,0,0,0,3.1,2H3A1.09,1.09,0,0,0,2,3.1,1,1,0,0,0,3,4.05Zm17.39-.19A1,1,0,0,0,22,3a1,1,0,0,0-1-1h-.1a1,1,0,0,0-.51,1.86ZM11.89,4h.22a1,1,0,0,0,0-2h-.22a1,1,0,0,0,0,2ZM7.39,4H7.6a1,1,0,0,0,0-2H7.39a1,1,0,0,0,0,2ZM21,20a1,1,0,0,0-.42.1A1,1,0,0,0,20.9,22H21a1.09,1.09,0,0,0,1-1.1A1,1,0,0,0,21,20ZM14,11a1,1,0,0,0-1-1H3.27A1.08,1.08,0,0,0,3,10,1,1,0,0,0,2,11V21a1,1,0,0,0,1,1H13.1a1,1,0,0,0,.9-1.42Zm-2,9H5.52l3.91-3.9a.33.33,0,0,1,.47,0L12,18.19Zm0-4.63-.68-.69a2.35,2.35,0,0,0-3.31,0l-4,4V12h8Zm9,0a1,1,0,0,0-1,1v.21a1,1,0,0,0,2,0V16.4A1,1,0,0,0,21,15.4Zm0-9a1,1,0,0,0-1,1V7.6a1,1,0,1,0,2,0V7.39A1,1,0,0,0,21,6.39Zm0,4.5a1,1,0,0,0-1,1v.22a1,1,0,0,0,2,0v-.22A1,1,0,0,0,21,10.89ZM17.1,20h-.2a1,1,0,1,0,0,2h.2a1,1,0,0,0,0-2ZM16.61,4a1,1,0,0,0,0-2H16.4a1,1,0,1,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'image-search',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,13a1,1,0,0,0-1,1v.39l-1.48-1.48a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.87,2.87,0,0,0-3.93,0L4,12.61V7A1,1,0,0,1,5,6H9A1,1,0,0,0,9,4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.89a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.45,20Zm13-1a1,1,0,0,1-.18.54L13.31,15l.7-.69a.77.77,0,0,1,1.1,0L18,17.22Zm3.71-8.71L20,8.57a4.31,4.31,0,1,0-6.72.79,4.27,4.27,0,0,0,3,1.26A4.34,4.34,0,0,0,18.57,10l1.72,1.73a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,10.29ZM18,8a2.32,2.32,0,1,1,0-3.27A2.32,2.32,0,0,1,18,8Z"/></svg>',
                ),
                array(
                    'keys' => 'image-share',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,7a2,2,0,0,0-1.18.39l-1.75-.8L19,5.71A2,2,0,0,0,20,6a2,2,0,1,0-2-2l-1.89.87A2,2,0,1,0,15,8.5a1.88,1.88,0,0,0,.92-.24l2.1,1A2,2,0,1,0,20,7Zm-1,6a1,1,0,0,0-1,1v.39l-1.48-1.48a2.77,2.77,0,0,0-3.93,0l-.7.7L9.41,11.12a2.79,2.79,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h5a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.45,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.78.78,0,0,1,1.1,0L18,17.22Z"/></svg>',
                ),
                array(
                    'keys' => 'image-shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22.13,2.36a1,1,0,0,0-.84-.2,2.7,2.7,0,0,1-2.2-.47,1,1,0,0,0-1.18,0,2.7,2.7,0,0,1-2.2.47,1,1,0,0,0-.84.2,1,1,0,0,0-.37.78V6.45a4.63,4.63,0,0,0,1.84,3.7l1.57,1.16a1,1,0,0,0,1.18,0l1.57-1.16a4.63,4.63,0,0,0,1.84-3.7V3.14A1,1,0,0,0,22.13,2.36ZM20.5,6.45a2.62,2.62,0,0,1-1,2.09l-1,.72-1-.72a2.62,2.62,0,0,1-1-2.09V4.22a4.81,4.81,0,0,0,2-.54,4.81,4.81,0,0,0,2,.54Zm-2,7.05a1,1,0,0,0-1,1v.39L16,13.41a2.77,2.77,0,0,0-3.93,0l-.7.7L8.91,11.62a2.85,2.85,0,0,0-3.93,0L3.5,13.1V7.5a1,1,0,0,1,1-1h7a1,1,0,0,0,0-2h-7a3,3,0,0,0-3,3v12a3,3,0,0,0,3,3h12a3,3,0,0,0,3-3v-5A1,1,0,0,0,18.5,13.5Zm-14,7a1,1,0,0,1-1-1V15.93L6.4,13a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15,20.5Zm13-1a1,1,0,0,1-.18.53l-4.51-4.51.7-.7a.78.78,0,0,1,1.1,0l2.89,2.9Z"/></svg>',
                ),
                array(
                    'keys' => 'image-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.5,4H10a1,1,0,0,0,0,2H19.5a1,1,0,0,1,1,1v6.76l-1.88-1.88a3,3,0,0,0-1.14-.71,1,1,0,1,0-.64,1.9.82.82,0,0,1,.36.23l3.31,3.29a.66.66,0,0,0,0,.15.83.83,0,0,0,0,.15,1.18,1.18,0,0,0,.13.18.48.48,0,0,0,.09.11.9.9,0,0,0,.2.14.6.6,0,0,0,.11.06.91.91,0,0,0,.37.08,1,1,0,0,0,1-1V7A3,3,0,0,0,19.5,4ZM3.21,2.29A1,1,0,0,0,1.79,3.71L3.18,5.1A3,3,0,0,0,2.5,7V17a3,3,0,0,0,3,3H18.09l1.7,1.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM4.5,7a1,1,0,0,1,.12-.46L7.34,9.25a3,3,0,0,0-1,.63L4.5,11.76Zm1,11a1,1,0,0,1-1-1V14.58l3.3-3.29a1,1,0,0,1,1.4,0L15.91,18Z"/></svg>',
                ),
                array(
                    'keys' => 'image-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,10a1,1,0,0,0-1,1v3.39l-1.48-1.48a2.77,2.77,0,0,0-3.93,0l-.7.7L9.41,11.12a2.79,2.79,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h8a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V11A1,1,0,0,0,19,10ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.45,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.78.78,0,0,1,1.1,0L18,17.22ZM20.41,5l1.3-1.29a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L19,3.59,17.71,2.3a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41L17.59,5l-1.3,1.3a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0L19,6.42l1.29,1.29a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41Z"/></svg>',
                ),
                array(
                    'keys' => 'image-upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z"/></svg>',
                ),
                array(
                    'keys' => 'image-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a2.81,2.81,0,0,0,.49-.05l.3-.07.07,0h0l.05,0,.37-.14.13-.07c.1-.06.21-.11.31-.18a3.79,3.79,0,0,0,.38-.32l.07-.09a2.69,2.69,0,0,0,.27-.32l.09-.13a2.31,2.31,0,0,0,.18-.35,1,1,0,0,0,.07-.15c.05-.12.08-.25.12-.38l0-.15A2.6,2.6,0,0,0,22,19V5A3,3,0,0,0,19,2ZM5,20a1,1,0,0,1-1-1V14.69l3.29-3.3h0a1,1,0,0,1,1.42,0L17.31,20Zm15-1a1,1,0,0,1-.07.36,1,1,0,0,1-.08.14.94.94,0,0,1-.09.12l-5.35-5.35.88-.88a1,1,0,0,1,1.42,0h0L20,16.69Zm0-5.14L18.12,12a3.08,3.08,0,0,0-4.24,0l-.88.88L10.12,10a3.08,3.08,0,0,0-4.24,0L4,11.86V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'image',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4ZM5,18a1,1,0,0,1-1-1V14.58l3.3-3.29a1,1,0,0,1,1.4,0L15.41,18Zm15-1a1,1,0,0,1-1,1h-.77l-3.81-3.83.88-.88a1,1,0,0,1,1.4,0L20,16.58Zm0-3.24-1.88-1.87a3.06,3.06,0,0,0-4.24,0l-.88.88L10.12,9.89a3.06,3.06,0,0,0-4.24,0L4,11.76V7A1,1,0,0,1,5,6H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'images',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,15V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H15A3,3,0,0,0,18,15ZM4,5A1,1,0,0,1,5,4H15a1,1,0,0,1,1,1V9.36L14.92,8.27a2.56,2.56,0,0,0-1.81-.75h0a2.58,2.58,0,0,0-1.81.75l-.91.91-.81-.81a2.93,2.93,0,0,0-4.11,0L4,9.85Zm.12,10.45A.94.94,0,0,1,4,15V12.67L6.88,9.79a.91.91,0,0,1,1.29,0L9,10.6Zm8.6-5.76a.52.52,0,0,1,.39-.17h0a.52.52,0,0,1,.39.17L16,12.18V15a1,1,0,0,1-1,1H6.4ZM21,6a1,1,0,0,0-1,1V17a3,3,0,0,1-3,3H7a1,1,0,0,0,0,2H17a5,5,0,0,0,5-5V7A1,1,0,0,0,21,6Z"/></svg>',
                ),
                array(
                    'keys' => 'import',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V15a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14Zm-9.71,1.71a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l4-4a1,1,0,0,0-1.42-1.42L13,12.59V3a1,1,0,0,0-2,0v9.59l-2.29-2.3a1,1,0,1,0-1.42,1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'inbox',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.05566,2h-14a3.00328,3.00328,0,0,0-3,3V19a3.00328,3.00328,0,0,0,3,3h14a3.00328,3.00328,0,0,0,3-3V5A3.00328,3.00328,0,0,0,19.05566,2Zm-14,2h14a1.001,1.001,0,0,1,1,1v8H17.59082a1.99687,1.99687,0,0,0-1.66406.89062L14.52051,16H9.59082L8.18457,13.89062A1.99687,1.99687,0,0,0,6.52051,13H4.05566V5A1.001,1.001,0,0,1,5.05566,4Zm14,16h-14a1.001,1.001,0,0,1-1-1V15H6.52051l1.40625,2.10938A1.99687,1.99687,0,0,0,9.59082,18h4.92969a1.99687,1.99687,0,0,0,1.66406-.89062L17.59082,15h2.46484v4A1.001,1.001,0,0,1,19.05566,20Z"/></svg>',
                ),
                array(
                    'keys' => 'incoming-call',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.55,9a1.07,1.07,0,0,0,.39.07h4a1,1,0,0,0,0-2H18.35l3.29-3.29a1,1,0,1,0-1.41-1.41L16.94,5.65V4.06a1,1,0,1,0-2,0v4a1.07,1.07,0,0,0,.07.39A1,1,0,0,0,15.55,9Zm3.89,4c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.06,1.06,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z"/></svg>',
                ),
                array(
                    'keys' => 'info-circle',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20Zm0-8.5a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,11.5Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,7.5Z"/></svg>',
                ),
                array(
                    'keys' => 'info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,10a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V11A1,1,0,0,0,12,10Zm0-4a1.25,1.25,0,1,0,1.25,1.25A1.25,1.25,0,0,0,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'instagram-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,9.52A2.48,2.48,0,1,0,14.48,12,2.48,2.48,0,0,0,12,9.52Zm9.93-2.45a6.53,6.53,0,0,0-.42-2.26,4,4,0,0,0-2.32-2.32,6.53,6.53,0,0,0-2.26-.42C15.64,2,15.26,2,12,2s-3.64,0-4.93.07a6.53,6.53,0,0,0-2.26.42A4,4,0,0,0,2.49,4.81a6.53,6.53,0,0,0-.42,2.26C2,8.36,2,8.74,2,12s0,3.64.07,4.93a6.86,6.86,0,0,0,.42,2.27,3.94,3.94,0,0,0,.91,1.4,3.89,3.89,0,0,0,1.41.91,6.53,6.53,0,0,0,2.26.42C8.36,22,8.74,22,12,22s3.64,0,4.93-.07a6.53,6.53,0,0,0,2.26-.42,3.89,3.89,0,0,0,1.41-.91,3.94,3.94,0,0,0,.91-1.4,6.6,6.6,0,0,0,.42-2.27C22,15.64,22,15.26,22,12S22,8.36,21.93,7.07Zm-2.54,8A5.73,5.73,0,0,1,19,16.87,3.86,3.86,0,0,1,16.87,19a5.73,5.73,0,0,1-1.81.35c-.79,0-1,0-3.06,0s-2.27,0-3.06,0A5.73,5.73,0,0,1,7.13,19a3.51,3.51,0,0,1-1.31-.86A3.51,3.51,0,0,1,5,16.87a5.49,5.49,0,0,1-.34-1.81c0-.79,0-1,0-3.06s0-2.27,0-3.06A5.49,5.49,0,0,1,5,7.13a3.51,3.51,0,0,1,.86-1.31A3.59,3.59,0,0,1,7.13,5a5.73,5.73,0,0,1,1.81-.35h0c.79,0,1,0,3.06,0s2.27,0,3.06,0A5.73,5.73,0,0,1,16.87,5a3.51,3.51,0,0,1,1.31.86A3.51,3.51,0,0,1,19,7.13a5.73,5.73,0,0,1,.35,1.81c0,.79,0,1,0,3.06S19.42,14.27,19.39,15.06Zm-1.6-7.44a2.38,2.38,0,0,0-1.41-1.41A4,4,0,0,0,15,6c-.78,0-1,0-3,0s-2.22,0-3,0a4,4,0,0,0-1.38.26A2.38,2.38,0,0,0,6.21,7.62,4.27,4.27,0,0,0,6,9c0,.78,0,1,0,3s0,2.22,0,3a4.27,4.27,0,0,0,.26,1.38,2.38,2.38,0,0,0,1.41,1.41A4.27,4.27,0,0,0,9,18.05H9c.78,0,1,0,3,0s2.22,0,3,0a4,4,0,0,0,1.38-.26,2.38,2.38,0,0,0,1.41-1.41A4,4,0,0,0,18.05,15c0-.78,0-1,0-3s0-2.22,0-3A3.78,3.78,0,0,0,17.79,7.62ZM12,15.82A3.81,3.81,0,0,1,8.19,12h0A3.82,3.82,0,1,1,12,15.82Zm4-6.89a.9.9,0,0,1,0-1.79h0a.9.9,0,0,1,0,1.79Z"/></svg>',
                ),
                array(
                    'keys' => 'instagram',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"/></svg>',
                ),
                array(
                    'keys' => 'intercom-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.99121,15.00044a.99942.99942,0,0,0,1-1v-8a1,1,0,1,0-2,0v8A.99943.99943,0,0,0,9.99121,15.00044Zm4,0a.99942.99942,0,0,0,1-1v-8a1,1,0,1,0-2,0v8A.99943.99943,0,0,0,13.99121,15.00044Zm-8-2a.99942.99942,0,0,0,1-1v-4a1,1,0,0,0-2,0v4A.99943.99943,0,0,0,5.99121,13.00044Zm14-12h-16a3.00328,3.00328,0,0,0-3,3v16a3.00328,3.00328,0,0,0,3,3h16a3.00328,3.00328,0,0,0,3-3v-16A3.00328,3.00328,0,0,0,19.99121,1.00044Zm1,19a1.00067,1.00067,0,0,1-1,1h-16a1.00067,1.00067,0,0,1-1-1v-16a1.00067,1.00067,0,0,1,1-1h16a1.00067,1.00067,0,0,1,1,1Zm-3.64355-4.5918a8.82089,8.82089,0,0,1-5.35645,1.5918,8.98692,8.98692,0,0,1-5.35644-1.5918,1.00017,1.00017,0,1,0-1.28711,1.53125,10.79981,10.79981,0,0,0,6.64355,2.06055,10.79989,10.79989,0,0,0,6.64356-2.06055,1.00017,1.00017,0,0,0-1.28711-1.53125Zm.64355-8.4082a.99942.99942,0,0,0-1,1v4a1,1,0,1,0,2,0v-4A.99942.99942,0,0,0,17.99121,7.00044Z"/></svg>',
                ),
                array(
                    'keys' => 'intercom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.5,2H4.5A2.5,2.5,0,0,0,2,4.5v15A2.5,2.5,0,0,0,4.5,22h15A2.5,2.5,0,0,0,22,19.5V4.5A2.5,2.5,0,0,0,19.5,2ZM14.67,5.67A.66.66,0,0,1,15.34,5a.68.68,0,0,1,.66.66v8.9a.67.67,0,0,1-1.33,0Zm-3.34-.34A.67.67,0,0,1,12,4.66h0a.67.67,0,0,1,.67.67V15a.67.67,0,0,1-1.34,0ZM8,5.67a.67.67,0,0,1,1.33,0v8.9a.66.66,0,0,1-.67.66A.68.68,0,0,1,8,14.57ZM4.67,7A.67.67,0,0,1,6,7v6a.67.67,0,0,1-.67.66A.67.67,0,0,1,4.67,13ZM19.1,17.17A11.3,11.3,0,0,1,12,19.33a11.3,11.3,0,0,1-7.1-2.16.67.67,0,0,1,.87-1A10.2,10.2,0,0,0,12,18a10.15,10.15,0,0,0,6.23-1.84.67.67,0,0,1,.87,1ZM19.33,13A.67.67,0,0,1,18,13V7a.67.67,0,0,1,.67-.66.66.66,0,0,1,.66.66Z"/></svg>',
                ),
                array(
                    'keys' => 'invoice',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'italic',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,6H11a1,1,0,0,0,0,2h1.52l-3.2,8H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H11.48l3.2-8H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'jackhammer',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.85,15.69a1,1,0,0,0-1.41,0l-2.06,2.06a1,1,0,0,0,.45,1.67l.26.07-.8.8a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0,.26-1,1,1,0,0,0-.71-.71L18,17.94l.83-.84A1,1,0,0,0,18.85,15.69ZM7.91,19.49l.26-.07a1,1,0,0,0,.45-1.67L6.56,15.69A1,1,0,0,0,5.15,17.1l.83.84L5.72,18a1,1,0,0,0-.71.71,1,1,0,0,0,.26,1l2,2a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM21,4a1,1,0,0,0-1,1H17a3,3,0,0,0-3-3H10A3,3,0,0,0,7,5H4A1,1,0,0,0,2,5V7A1,1,0,0,0,4,7H7V9a3,3,0,0,0,2,2.83V13a2,2,0,0,0,2,2v6a1,1,0,0,0,2,0V15a2,2,0,0,0,2-2V11.83A3,3,0,0,0,17,9V7h3a1,1,0,0,0,2,0V5A1,1,0,0,0,21,4ZM15,9a1,1,0,0,1-1,1,1,1,0,0,0-1,1v2H11V11a1,1,0,0,0-1-1A1,1,0,0,1,9,9V5a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1ZM12,6a1,1,0,0,0-1,1V8a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'java-script',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.478,14.8829a4.06111,4.06111,0,0,1-2.18725-.39825,1.4389,1.4389,0,0,1-.53547-1.01019.22184.22184,0,0,0-.22662-.21942c-.31659-.00385-.63312-.003-.94965-.00043a.2113.2113,0,0,0-.23138.18628,2.33854,2.33854,0,0,0,.75305,1.84454,3.99135,3.99135,0,0,0,2.22827.8382,8.06151,8.06151,0,0,0,2.53308-.10755,3.12591,3.12591,0,0,0,1.67823-.90442,2.33824,2.33824,0,0,0,.396-2.23077,1.869,1.869,0,0,0-1.2304-1.09454c-1.28077-.4494-2.66431-.41541-3.97-.7569-.22668-.07135-.50366-.1488-.60467-.38879a.85461.85461,0,0,1,.28418-.95478,2.5576,2.5576,0,0,1,1.34875-.33581,4.07051,4.07051,0,0,1,1.88416.26959,1.43564,1.43564,0,0,1,.68677.99219.243.243,0,0,0,.2276.23565c.31433.00641.62878.00171.94311.00214a.22791.22791,0,0,0,.24732-.16772,2.43369,2.43369,0,0,0-1.18665-2.106,5.8791,5.8791,0,0,0-3.2182-.49243V8.08341a3.50546,3.50546,0,0,0-2.17615.87438,2.1746,2.1746,0,0,0-.43438,2.26264,1.92964,1.92964,0,0,0,1.21838,1.06177c1.27649.46106,2.67554.31311,3.96442.72082.25116.08521.54364.21552.6206.49506a.9907.9907,0,0,1-.26965.94616A2.97065,2.97065,0,0,1,14.478,14.8829Zm5.81891-8.44537q-3.73837-2.114-7.47845-4.22418a1.67742,1.67742,0,0,0-1.63733,0Q7.4556,4.31715,3.72968,6.42075a1.54242,1.54242,0,0,0-.8042,1.34271V16.2377a1.55266,1.55266,0,0,0,.8352,1.355c.71351.38837,1.40674.81629,2.13318,1.17884a3.06373,3.06373,0,0,0,2.73822.07525,2.1275,2.1275,0,0,0,.99482-1.92114c.00555-2.79669.00085-5.59351.00213-8.39026a.21981.21981,0,0,0-.20727-.25415c-.31739-.00513-.63526-.003-.95264-.00085a.20935.20935,0,0,0-.228.21368c-.00427,2.77875.00086,5.55829-.00256,8.33746a.94053.94053,0,0,1-.609.88373,1.53242,1.53242,0,0,1-1.23993-.16595q-.99152-.56-1.983-1.11988a.23714.23714,0,0,1-.13464-.23529q0-4.19383,0-8.38726a.2589.2589,0,0,1,.157-.2602Q8.1423,5.4553,11.85419,3.35953a.258.258,0,0,1,.29163.00043Q15.859,5.452,19.57184,7.5455a.262.262,0,0,1,.15613.26142Q19.72733,12,19.72712,16.19376a.242.242,0,0,1-.13294.23828q-3.65643,2.06753-7.31677,4.12909c-.11658.06494-.25458.16943-.39093.09076-.6391-.36176-1.27039-.73755-1.90735-1.10273a.20589.20589,0,0,0-.22968-.01379,5.21834,5.21834,0,0,1-.88208.41162c-.13806.05591-.30792.07184-.40295.19989a1.31566,1.31566,0,0,0,.43127.31061q1.11741.647,2.236,1.29285a1.62967,1.62967,0,0,0,1.65539.046q3.7261-2.101,7.45185-4.20392a1.55627,1.55627,0,0,0,.83563-1.35474V7.76346A1.53956,1.53956,0,0,0,20.29694,6.43753Z"/></svg>',
                ),
                array(
                    'keys' => 'kayak',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.12,16.88a3,3,0,0,0-3.4-.58l-1.15-1.14A24,24,0,0,0,21.78,6.3,3.19,3.19,0,0,0,17.7,2.22,24,24,0,0,0,8.84,7.43L7.7,6.28a3,3,0,1,0-4.82.84A3,3,0,0,0,5,8a3,3,0,0,0,1.28-.3L7.43,8.84A24,24,0,0,0,2.22,17.7,3.24,3.24,0,0,0,3,21,3.17,3.17,0,0,0,5.22,22a3.74,3.74,0,0,0,1.08-.17,24,24,0,0,0,8.86-5.21l1.14,1.15a3,3,0,1,0,4.82-.84ZM5.71,5.7h0A1,1,0,0,1,4.29,4.29,1,1,0,0,1,5.71,5.7Zm12.6-1.57a1.6,1.6,0,0,1,.47-.08,1.16,1.16,0,0,1,.83.34,1.23,1.23,0,0,1,.26,1.3,22.09,22.09,0,0,1-2.13,4.64L13.67,6.26A22.09,22.09,0,0,1,18.31,4.13ZM5.69,19.87a1.2,1.2,0,0,1-1.56-1.56,22.09,22.09,0,0,1,2.13-4.64l4.07,4.07A22.09,22.09,0,0,1,5.69,19.87ZM12,16.59,7.41,12a21.29,21.29,0,0,1,1.43-1.74l4.91,4.91A21.29,21.29,0,0,1,12,16.59Zm3.15-2.84L10.25,8.84A21.29,21.29,0,0,1,12,7.41l4.6,4.6A21.29,21.29,0,0,1,15.16,13.75Zm4.55,6a1,1,0,1,1-1.42-1.41h0a1,1,0,0,1,1.41,0A1,1,0,0,1,19.71,19.71Z"/></svg>',
                ),
                array(
                    'keys' => 'key-skeleton-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,6.53,20.29,5.12l1.42-1.41a1,1,0,1,0-1.42-1.42L9.75,12.83a5,5,0,1,0,1.42,1.42l4.88-4.89,1.41,1.42a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L17.46,8l1.42-1.42L20.29,8a1,1,0,0,0,.71.29A1,1,0,0,0,21.71,8,1,1,0,0,0,21.71,6.53ZM7,20a3,3,0,1,1,3-3A3,3,0,0,1,7,20Z"/></svg>',
                ),
                array(
                    'keys' => 'key-skeleton',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,4.41l.71-.7a1,1,0,1,0-1.42-1.42L18.89,3.7h0L16.06,6.53h0L9.75,12.83a5,5,0,1,0,1.42,1.42l5.59-5.6,2.12,2.13a1,1,0,1,0,1.41-1.42L18.17,7.24l1.42-1.41.7.7a1,1,0,1,0,1.42-1.41ZM7,20a3,3,0,1,1,3-3A3,3,0,0,1,7,20Z"/></svg>',
                ),
                array(
                    'keys' => 'keyboard-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6.71,9.29a1,1,0,0,0-1.42,0,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21A.84.84,0,0,0,6,11a1,1,0,0,0,.92-1.38A1,1,0,0,0,6.71,9.29ZM10,11a1,1,0,0,0,.92-1.38,1,1,0,0,0-.21-.33A1,1,0,0,0,9.81,9a.6.6,0,0,0-.19.06l-.18.09-.15.12A1.05,1.05,0,0,0,9,10a1,1,0,0,0,1,1ZM6.38,13.08a1,1,0,0,0-.76,0A1,1,0,0,0,5,14a1,1,0,0,0,1.38.92,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,7,14a1,1,0,0,0-.29-.71A.93.93,0,0,0,6.38,13.08ZM14,13H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm.71-3.71a1,1,0,0,0-1.42,0,1,1,0,0,0-.21.33A1,1,0,1,0,15,10a.84.84,0,0,0-.08-.38A1,1,0,0,0,14.71,9.29Zm3.85,3.88a.76.76,0,0,0-.18-.09,1,1,0,0,0-.76,0,1.15,1.15,0,0,0-.33.21A1.05,1.05,0,0,0,17,14a1,1,0,1,0,2,0,1.05,1.05,0,0,0-.29-.71ZM20,5H4A3,3,0,0,0,1,8v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V8A3,3,0,0,0,20,5Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H20a1,1,0,0,1,1,1ZM18.71,9.29A1,1,0,0,0,17,10a1,1,0,1,0,1.92-.38A1,1,0,0,0,18.71,9.29Z"/></svg>',
                ),
                array(
                    'keys' => 'keyboard-hide',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6.71,10.29a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.3-1.3A1,1,0,0,0,6.71,10.29ZM9.29,7.71A1,1,0,0,0,10,8a.84.84,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76,1.15,1.15,0,0,0-.21-.33,1,1,0,0,0-1.42,0,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76A1.15,1.15,0,0,0,9.29,7.71ZM6.71,6.29A1,1,0,0,0,5,7a1,1,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,6,8a.84.84,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,6.71,6.29Zm6.58,12L12,19.59l-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l2-2a1,1,0,0,0-1.42-1.42Zm5.42-12A1,1,0,0,0,17,7a.84.84,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33,1,1,0,0,0,1.42,0,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,19,7a1,1,0,0,0-.08-.38A1.15,1.15,0,0,0,18.71,6.29ZM14,10H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm6-8H4A3,3,0,0,0,1,5v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V5A1,1,0,0,1,4,4H20a1,1,0,0,1,1,1Zm-2.29-2.71a1,1,0,0,0-.33-.21.92.92,0,0,0-.76,0,1.15,1.15,0,0,0-.33.21A1.05,1.05,0,0,0,17,11a1,1,0,1,0,1.92-.38A1,1,0,0,0,18.71,10.29ZM13.62,6.08a1.15,1.15,0,0,0-.33.21A1.05,1.05,0,0,0,13,7a1,1,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,14,8a.84.84,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,15,7a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,13.62,6.08Z"/></svg>',
                ),
                array(
                    'keys' => 'keyboard-show',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6.71,10.29A1,1,0,0,0,5,11a1,1,0,1,0,1.92-.38A1,1,0,0,0,6.71,10.29ZM9.29,7.71A1,1,0,0,0,10,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,11,7a1.05,1.05,0,0,0-.29-.71l-.15-.12-.18-.09A.6.6,0,0,0,10.19,6a1,1,0,0,0-.9.27,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76A1.15,1.15,0,0,0,9.29,7.71ZM6.56,6.17a.76.76,0,0,0-.18-.09L6.2,6a1,1,0,0,0-.91.27,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21A.84.84,0,0,0,6,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,7,7a1.05,1.05,0,0,0-.29-.71Zm6.15,12.12a1,1,0,0,0-1.42,0l-2,2a1,1,0,0,0,1.42,1.42L12,20.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6-8a1,1,0,0,0-1.42,0,1,1,0,0,0-.21.33,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,19,11a.84.84,0,0,0-.08-.38A1,1,0,0,0,18.71,10.29ZM14,10H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm6-8H4A3,3,0,0,0,1,5v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V5A1,1,0,0,1,4,4H20a1,1,0,0,1,1,1ZM17.62,6.08a.93.93,0,0,0-.33.21A1.05,1.05,0,0,0,17,7a1,1,0,0,0,.08.38,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,18,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,19,7a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,17.62,6.08Zm-3.06.09-.18-.09L14.2,6a1,1,0,0,0-.58.06.93.93,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33A1,1,0,0,0,14,8a1,1,0,0,0,.71-.29,1.15,1.15,0,0,0,.21-.33A1,1,0,0,0,15,7a1.05,1.05,0,0,0-.29-.71Z"/></svg>',
                ),
                array(
                    'keys' => 'keyboard',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.21,13.29a.93.93,0,0,0-.33-.21,1,1,0,0,0-.76,0,.9.9,0,0,0-.54.54,1,1,0,1,0,1.84,0A1,1,0,0,0,6.21,13.29ZM13.5,11h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm-4,0h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm-3-2h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM20,5H4A3,3,0,0,0,1,8v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V8A3,3,0,0,0,20,5Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H20a1,1,0,0,1,1,1Zm-6-3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm3.5-4h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm.71,4.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,.93.93,0,0,0-.33.21,1,1,0,0,0-.21.33A1,1,0,1,0,19.5,14a.84.84,0,0,0-.08-.38A1,1,0,0,0,19.21,13.29Z"/></svg>',
                ),
                array(
                    'keys' => 'keyhole-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,8a2,2,0,0,0-2,2,2,2,0,0,0,1,1.72V15a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10,2,2,0,0,0,12,8Zm0-6A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'keyhole-square-full',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,11.72V15a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10a2,2,0,0,0-4,0A2,2,0,0,0,11,11.72ZM21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'keyhole-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM12,8a2,2,0,0,0-2,2,2,2,0,0,0,1,1.72V15a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10,2,2,0,0,0,12,8Z"/></svg>',
                ),
                array(
                    'keys' => 'kid',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,10a1,1,0,1,0-1,1A1,1,0,0,0,10,10Zm4.5,4.06a1,1,0,0,0-1.37.36,1.3,1.3,0,0,1-2.26,0,1,1,0,0,0-1.37-.36,1,1,0,0,0-.37,1.36,3.31,3.31,0,0,0,5.74,0A1,1,0,0,0,14.5,14.06ZM15,9a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18A8,8,0,0,1,9,4.57,3,3,0,0,0,9,5a3,3,0,0,0,3,3,1,1,0,0,0,0-2,1,1,0,0,1,0-2,8,8,0,0,1,0,16Z"/></svg>',
                ),
                array(
                    'keys' => 'label-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,12a1,1,0,1,0,1-1A1,1,0,0,0,15,12Zm6.71-.71-5-5A1,1,0,0,0,16,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3H16a1,1,0,0,0,.71-.29l5-5A1,1,0,0,0,21.71,11.29ZM15.59,16H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8H15.59l4,4Z"/></svg>',
                ),
                array(
                    'keys' => 'label',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,11.29l-5-5A1,1,0,0,0,16,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3H16a1,1,0,0,0,.71-.29l5-5A1,1,0,0,0,21.71,11.29ZM15.59,16H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8H15.59l4,4Z"/></svg>',
                ),
                array(
                    'keys' => 'lamp',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,2.78A1,1,0,0,0,17,2H7a1,1,0,0,0-1,.78l-2,9a1,1,0,0,0,.2.85A1,1,0,0,0,5,13H8.94A8.26,8.26,0,0,1,9,14a8.92,8.92,0,0,1-2.57,6.3A1,1,0,0,0,7.14,22h9.72a1,1,0,0,0,.71-1.7A8.92,8.92,0,0,1,15,14a8.26,8.26,0,0,1,.06-1H16v2a1,1,0,0,0,2,0V13h1a1,1,0,0,0,.78-.37,1,1,0,0,0,.2-.85ZM9.22,20A10.9,10.9,0,0,0,11,14c0-.33,0-.67-.05-1h2.1c0,.33-.05.67-.05,1a10.9,10.9,0,0,0,1.78,6Zm-3-9L7.8,4h8.4l1.55,7Z"/></svg>',
                ),
                array(
                    'keys' => 'language',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.05566,12h-2a1,1,0,0,0,0,2v2H17.8714a2.96481,2.96481,0,0,0,.18426-1A2.99955,2.99955,0,0,0,12.458,13.50049a.99992.99992,0,1,0,1.73242.999A1.0009,1.0009,0,0,1,15.05566,14a1,1,0,0,1,0,2,1,1,0,0,0,0,2,1,1,0,1,1,0,2,1.0009,1.0009,0,0,1-.86523-.49951.99992.99992,0,1,0-1.73242.999A2.99955,2.99955,0,0,0,18.05566,19a2.96481,2.96481,0,0,0-.18426-1h1.18426v3a1,1,0,0,0,2,0V14a1,1,0,1,0,0-2ZM9.08594,11.24268a.99963.99963,0,1,0,1.93945-.48536L9.26855,3.72754a2.28044,2.28044,0,0,0-4.4248,0L3.08594,10.75732a.99963.99963,0,1,0,1.93945.48536L5.58618,9H8.52545ZM6.0863,7l.6969-2.78711a.29222.29222,0,0,1,.5459,0L8.02563,7Zm7.96936,0h1a1.001,1.001,0,0,1,1,1V9a1,1,0,0,0,2,0V8a3.00328,3.00328,0,0,0-3-3h-1a1,1,0,0,0,0,2Zm-4,9h-1a1.001,1.001,0,0,1-1-1V14a1,1,0,0,0-2,0v1a3.00328,3.00328,0,0,0,3,3h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'laptop-cloud',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M4.5,10H10a3,3,0,0,0,1.07-5.8,4,4,0,0,0-7.48,1A2.5,2.5,0,0,0,4.5,10Zm0-3a1,1,0,0,0,1-1,2,2,0,0,1,3.89-.64,1,1,0,0,0,.78.66A1,1,0,0,1,11,7a1,1,0,0,1-1,1H4.5a.5.5,0,0,1,0-1ZM21,16H20V9a3,3,0,0,0-3-3H16a1,1,0,0,0,0,2h1a1,1,0,0,1,1,1v7H6V13a1,1,0,0,0-2,0v3H3a1,1,0,0,0-1,1v2a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V17A1,1,0,0,0,21,16Zm-1,3a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V18H20Z"/></svg>',
                ),
                array(
                    'keys' => 'laptop-connection',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,18H14.82A3,3,0,0,0,13,16.18V13h7a1,1,0,0,0,0-2H19V5a3,3,0,0,0-3-3H8A3,3,0,0,0,5,5v6H4a1,1,0,0,0,0,2h7v3.18A3,3,0,0,0,9.18,18H3a1,1,0,0,0,0,2H9.18a3,3,0,0,0,5.64,0H21a1,1,0,0,0,0-2ZM7,11V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1v6Zm5,9a1,1,0,1,1,1-1A1,1,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'laptop',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14H20V7a3,3,0,0,0-3-3H7A3,3,0,0,0,4,7v7H3a1,1,0,0,0-1,1v2a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A1,1,0,0,0,21,14ZM6,7A1,1,0,0,1,7,6H17a1,1,0,0,1,1,1v7H6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V16H20Z"/></svg>',
                ),
                array(
                    'keys' => 'laughing',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.16,12.21a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L14.79,10l.79-.79a1,1,0,1,0-1.42-1.42l-1.5,1.5a1,1,0,0,0,0,1.42Zm-5.08,0,1.5-1.5a1,1,0,0,0,0-1.42l-1.5-1.5A1,1,0,0,0,7.66,9.21l.8.79-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29A1,1,0,0,0,9.08,12.21Zm5.28,2a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'layer-group-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.26,5,12,4l7,4L15.85,9.83a1,1,0,0,0-.37,1.36,1,1,0,0,0,1.37.37L21.5,8.87a1,1,0,0,0,0-1.74l-9-5.2a1,1,0,0,0-1,0L9.26,3.23A1,1,0,0,0,8.89,4.6,1,1,0,0,0,10.26,5ZM3.71,2.29A1,1,0,0,0,2.29,3.71L4.54,6l-2,1.17a1,1,0,0,0,0,1.74l9,5.2a1,1,0,0,0,1,0l.1-.06,1.07,1.07-1.67,1L3.5,11.13a1,1,0,1,0-1,1.74l9,5.2a1,1,0,0,0,.5.13,1,1,0,0,0,.5-.13l2.63-1.52,1.07,1.07L12,20,3.5,15.13a1,1,0,0,0-1,1.74l9,5.2a1,1,0,0,0,1,0l5.17-3,2.62,2.63a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM5,8l1-.58,2.75,2.75Zm15.5,3.13-2.12,1.22a1,1,0,0,0,1,1.74l2.12-1.22a1,1,0,1,0-1-1.74Z"/></svg>',
                ),
                array(
                    'keys' => 'layer-group',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M2.5,8.86l9,5.2a1,1,0,0,0,1,0l9-5.2A1,1,0,0,0,22,8a1,1,0,0,0-.5-.87l-9-5.19a1,1,0,0,0-1,0l-9,5.19A1,1,0,0,0,2,8,1,1,0,0,0,2.5,8.86ZM12,4l7,4-7,4L5,8Zm8.5,7.17L12,16,3.5,11.13a1,1,0,0,0-1.37.37,1,1,0,0,0,.37,1.36l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,.37-1.36A1,1,0,0,0,20.5,11.13Zm0,4L12,20,3.5,15.13a1,1,0,0,0-1.37.37,1,1,0,0,0,.37,1.36l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,.37-1.36A1,1,0,0,0,20.5,15.13Z"/></svg>',
                ),
                array(
                    'keys' => 'layers-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H9A1,1,0,0,0,8,3V7H6A1,1,0,0,0,5,8v4H3a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V19h4a1,1,0,0,0,1-1V16h4a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM10,20H4V14h6Zm5-3H12V13a1,1,0,0,0-1-1H7V9h8Zm5-3H17V8a1,1,0,0,0-1-1H10V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'layers-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.49,13.94l-.34.2a1,1,0,0,0-.35,1.37,1,1,0,0,0,.86.49,1,1,0,0,0,.51-.14l.34-.2a1,1,0,0,0-1-1.72ZM11.65,6.36,12,6.15l7,4-1.76,1a1,1,0,0,0,.5,1.87,1,1,0,0,0,.5-.13l3.26-1.89a1,1,0,0,0,0-1.74l-9-5.19a1,1,0,0,0-1,0l-.85.49a1,1,0,0,0,1,1.74ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.93,7.34l-3.43,2a1,1,0,0,0,0,1.74l9,5.2a1.09,1.09,0,0,0,.5.13,1.13,1.13,0,0,0,.5-.13L14,15.4l1.45,1.46-3.44,2L3.5,13.93a1,1,0,0,0-1,1.74l9,5.2a1,1,0,0,0,1,0l4.41-2.55,3.38,3.39a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm8.29,12L5,10.19,7.4,8.81l5.12,5.13Z"/></svg>',
                ),
                array(
                    'keys' => 'layers',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M2.5,10.56l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,0-1.73l-9-5.2a1,1,0,0,0-1,0l-9,5.2a1,1,0,0,0,0,1.73ZM12,5.65l7,4-7,4.05L5,9.69Zm8.5,7.79L12,18.35,3.5,13.44a1,1,0,0,0-1.37.36,1,1,0,0,0,.37,1.37l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,.37-1.37A1,1,0,0,0,20.5,13.44Z"/></svg>',
                ),
                array(
                    'keys' => 'left-arrow-from-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,11H5.41l2.3-2.29A1,1,0,1,0,6.29,7.29l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,13H17a1,1,0,0,0,0-2Zm4-7a1,1,0,0,0-1,1V19a1,1,0,0,0,2,0V5A1,1,0,0,0,21,4Z"/></svg>',
                ),
                array(
                    'keys' => 'left-arrow-to-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11H9.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H21a1,1,0,0,0,0-2ZM3,3A1,1,0,0,0,2,4V20a1,1,0,0,0,2,0V4A1,1,0,0,0,3,3Z"/></svg>',
                ),
                array(
                    'keys' => 'left-indent-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,5A1,1,0,0,0,8,6V18a1,1,0,0,0,2,0V6A1,1,0,0,0,9,5Zm4,2h8a1,1,0,0,0,0-2H13a1,1,0,0,0,0,2ZM5.77,9.69a1,1,0,0,0-1.41-.13l-2,1.67a1,1,0,0,0,0,1.54l2,1.67a1,1,0,0,0,1.41-.13,1,1,0,0,0-.13-1.41L4.56,12l1.08-.9A1,1,0,0,0,5.77,9.69ZM21,9H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0,4H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0,4H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'left-indent',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7Zm0,4H13a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2ZM21.77,9.69a1,1,0,0,0-1.41-.12l-2,1.66a1,1,0,0,0,0,1.54l2,1.66a1,1,0,0,0,.64.24,1,1,0,0,0,.77-.36,1,1,0,0,0-.13-1.41L20.56,12l1.08-.9A1,1,0,0,0,21.77,9.69ZM21,17H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3,15H13a1,1,0,0,0,0-2H3a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'left-to-right-text-direction',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.42,17.62a1,1,0,0,0-.21-.33l-3-3a1,1,0,0,0-1.42,1.42L18.09,17H3.5a1,1,0,0,0,0,2H18.09l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3-3a1,1,0,0,0,.21-.33A1,1,0,0,0,21.42,17.62ZM8.5,10v4a1,1,0,0,0,2,0V4h2V14a1,1,0,0,0,2,0V4h1a1,1,0,0,0,0-2h-7a4,4,0,0,0,0,8Zm0-6V8a2,2,0,0,1,0-4Z"/></svg>',
                ),
                array(
                    'keys' => 'letter-chinese-a',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,5H13V4a1,1,0,0,0-2,0V5H4A1,1,0,0,0,4,7H15.88214a14.49252,14.49252,0,0,1-3.94067,7.95227A14.42561,14.42561,0,0,1,8.66406,9.67041a1.0002,1.0002,0,0,0-1.88867.65918,16.41412,16.41412,0,0,0,3.68012,5.95825,14.29858,14.29858,0,0,1-5.769,2.73511A1.00015,1.00015,0,0,0,4.89941,21a1.01758,1.01758,0,0,0,.21485-.023,16.297,16.297,0,0,0,6.831-3.31885A16.38746,16.38746,0,0,0,18.78711,20.977a1,1,0,0,0,.42578-1.9541,14.38226,14.38226,0,0,1-5.78955-2.73316A16.4802,16.4802,0,0,0,17.89233,7H20a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'letter-english-a',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.97021,19.75732,15.34912,5.27246A2.9958,2.9958,0,0,0,12.43848,3h-.877A2.9958,2.9958,0,0,0,8.65088,5.27246L5.02979,19.75732a1.0001,1.0001,0,0,0,1.94042.48536L8.28082,15h7.43836l1.31061,5.24268a1.0001,1.0001,0,0,0,1.94042-.48536ZM8.78082,13l1.81049-7.24219A.99825.99825,0,0,1,11.56152,5h.877a.99825.99825,0,0,1,.97021.75781L15.21918,13Z"/></svg>',
                ),
                array(
                    'keys' => 'letter-hindi-a',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.022,3h-5a1,1,0,0,0,0,2h1.5v6H11.57208a4.95124,4.95124,0,0,0,1.02558-3A5,5,0,0,0,3.26758,5.5.99974.99974,0,1,0,4.999,6.5,3.00021,3.00021,0,1,1,7.59766,11a1,1,0,0,0,0,2A3,3,0,1,1,4.999,17.5a.99974.99974,0,0,0-1.73144,1A5,5,0,0,0,12.59766,16a4.95124,4.95124,0,0,0-1.02558-3H16.522v7a1,1,0,0,0,2,0V5h1.5a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'letter-japanese-a',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.47168,11.99707a4.86537,4.86537,0,0,0-4.00049-2.2038A5.59215,5.59215,0,0,0,16.34082,8.769a.9997.9997,0,1,0-1.94531.46192,3.55342,3.55342,0,0,1,.0827.60132,13.57729,13.57729,0,0,0-3.257.82189c.02252-1.20385.07678-2.40728.19672-3.60729l.03827-.38221a33.43522,33.43522,0,0,0,3.48224-.66418l.12011-.02979a1,1,0,1,0-.48047-1.9414l-.12207.03027c-.92163.23047-1.85565.40448-2.79394.5506l.15137-1.51056a1.00009,1.00009,0,0,0-1.99024-.19922L9.627,4.85962C8.69312,4.94336,7.75665,5,6.81836,5a1,1,0,0,0,0,2c.87054,0,1.7395-.04639,2.60681-.1142A46.66015,46.66015,0,0,0,9.222,11.58386c-.13421.07324-.26965.14209-.40264.21936a16.4074,16.4074,0,0,0-1.94922,1.31055l-.02246.01807a13.7396,13.7396,0,0,0-2.64844,2.70068,3.00419,3.00419,0,0,0,2.94629,4.71875A9.74034,9.74034,0,0,0,9.98328,19.5379a.99564.99564,0,0,0,1.82141-.70245c-.02423-.1452-.03534-.29193-.05811-.43732a13.83775,13.83775,0,0,0,1.314-1.15545,13.16694,13.16694,0,0,0,2.10168-2.729c.02289-.03949.04212-.0791.06445-.11865.118-.21057.22944-.422.33179-.63495.05383-.11108.1023-.22174.15155-.33282.05994-.13623.11719-.27222.17047-.40882.05646-.14361.10981-.28662.15845-.42968.03235-.09583.06055-.19123.08948-.28693.05133-.16882.10174-.3371.142-.50427l.005-.01776a3.01462,3.01462,0,0,1,2.46582,1.21972c1.01856,1.76709-.96289,4.977-4.417,7.15479a.99976.99976,0,1,0,1.0664,1.6914C19.88965,19.00977,22.07422,14.77734,20.47168,11.99707ZM6.7959,18.58252a1.00469,1.00469,0,0,1-.97949-1.57373,11.89343,11.89343,0,0,1,2.291-2.32275l.02637-.02149c.35388-.27692.742-.539,1.144-.793.0611,1.19537.17285,2.38684.32593,3.57489A8.18484,8.18484,0,0,1,6.7959,18.58252Zm7.32977-6.583a8.16646,8.16646,0,0,1-.31616.78137c-.0556.1189-.118.23774-.18018.35694q-.14419.27851-.3106.55432c-.08466.13953-.17188.27887-.26514.41742a11.48078,11.48078,0,0,1-1.40711,1.719c-.06982.06983-.14343.1333-.2146.201q-.16314-1.5975-.21124-3.20276a12.51276,12.51276,0,0,1,2.94-.93237C14.149,11.9295,14.13794,11.96436,14.12567,11.99951Z"/></svg>',
                ),
                array(
                    'keys' => 'life-ring',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,11.05c0-.11,0-.22,0-.33l-.09-.6-.09-.39c0-.17-.08-.34-.13-.51s-.08-.27-.13-.4a2.17,2.17,0,0,1-.07-.24s0,0,0-.05a10.1,10.1,0,0,0-5.9-5.9s0,0-.05,0l-.23-.07-.42-.13c-.15,0-.31-.08-.46-.12l-.46-.1-.46-.07c-.16,0-.31,0-.48-.06s-.35,0-.52,0L12,2l-.39,0c-.17,0-.35,0-.52,0s-.32,0-.48.06l-.46.07-.46.1c-.15,0-.31.07-.46.12l-.42.13-.23.07s0,0-.05,0a10.1,10.1,0,0,0-5.9,5.9s0,0,0,.05a2.17,2.17,0,0,1-.07.24c0,.13-.09.26-.13.4s-.09.34-.13.51l-.09.39-.09.6c0,.11,0,.22,0,.33,0,.31,0,.63,0,.95s0,.64,0,.95c0,.11,0,.22,0,.33l.09.6.09.39c0,.17.08.34.13.51s.08.27.13.4a2.17,2.17,0,0,1,.07.24.43.43,0,0,1,0,.07,10,10,0,0,0,5.89,5.88s0,0,.05,0l.24.07.4.13.51.13.39.09.6.09.33,0c.31,0,.63.05.95.05s.64,0,.95-.05l.33,0,.6-.09.39-.09.51-.13.4-.13.24-.07s0,0,.05,0a10,10,0,0,0,5.89-5.88.43.43,0,0,1,0-.07c0-.08.05-.16.07-.24s.09-.26.13-.4.09-.34.13-.51l.09-.39.09-.6c0-.11,0-.22,0-.33,0-.31.05-.63.05-.95S22,11.36,22,11.05Zm-6.3-6.16a8,8,0,0,1,3.46,3.46l-2.86,1a5.14,5.14,0,0,0-1.64-1.64Zm-5.36-.7c.21-.05.41-.08.61-.11l.24,0a8.24,8.24,0,0,1,1.72,0l.24,0c.2,0,.4.06.61.11h.06l-1,2.86A4.49,4.49,0,0,0,12,7a4.4,4.4,0,0,0-.73.06l-1-2.86Zm-1.94.7,1,2.86A5.14,5.14,0,0,0,7.75,9.39l-2.86-1A8,8,0,0,1,8.35,4.89ZM4.19,13.71a4.17,4.17,0,0,1-.1-.6c0-.09,0-.17,0-.25a7.42,7.42,0,0,1,0-1.72c0-.08,0-.16,0-.25a4.17,4.17,0,0,1,.1-.6s0,0,0-.06l2.86,1a4.47,4.47,0,0,0,0,1.46l-2.86,1S4.19,13.73,4.19,13.71Zm4.16,5.4a8,8,0,0,1-3.46-3.46l2.86-1a5.14,5.14,0,0,0,1.64,1.64Zm5.36.7c-.21.05-.41.08-.61.11l-.24,0a8.24,8.24,0,0,1-1.72,0l-.24,0c-.2,0-.4-.06-.61-.11h-.06l1-2.86a4.47,4.47,0,0,0,1.46,0l1,2.86Zm-.67-5h0c-.17.06-.34.1-.5.14a2.73,2.73,0,0,1-1,0c-.16,0-.33-.08-.5-.14h0A3,3,0,0,1,9.2,13v0a3.23,3.23,0,0,1-.14-.51,2.63,2.63,0,0,1,0-1A3.23,3.23,0,0,1,9.19,11v0A3,3,0,0,1,11,9.2h0c.17-.06.34-.1.5-.14a2.73,2.73,0,0,1,1,0c.16,0,.33.08.5.14h0A3,3,0,0,1,14.8,11v0a3.23,3.23,0,0,1,.14.51,2.63,2.63,0,0,1,0,1,3.23,3.23,0,0,1-.14.51v0A3,3,0,0,1,13,14.8Zm2.61,4.31-1-2.86a5.14,5.14,0,0,0,1.64-1.64l2.86,1A8,8,0,0,1,15.65,19.11ZM20,12.86c0,.08,0,.16,0,.25a4.17,4.17,0,0,1-.1.6s0,0,0,.06l-2.86-1a4.47,4.47,0,0,0,0-1.46l2.86-1s0,0,0,.06a4.17,4.17,0,0,1,.1.6c0,.09,0,.17,0,.25a7.42,7.42,0,0,1,0,1.72Z"/></svg>',
                ),
                array(
                    'keys' => 'lightbulb-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.09,2.82a8,8,0,0,0-6.68-1.66A8,8,0,0,0,4.14,7.48a8.07,8.07,0,0,0,1.72,6.65A4.54,4.54,0,0,1,7,17v3a3,3,0,0,0,3,3h4a3,3,0,0,0,3-3V17.19A5.17,5.17,0,0,1,18.22,14a8,8,0,0,0-1.13-11.2ZM15,20a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V19h6Zm1.67-7.24A7.13,7.13,0,0,0,15,17H13V14a1,1,0,0,0-2,0v3H9a6.5,6.5,0,0,0-1.6-4.16,6,6,0,0,1,3.39-9.72A6,6,0,0,1,18,9,5.89,5.89,0,0,1,16.67,12.76Z"/></svg>',
                ),
                array(
                    'keys' => 'lightbulb',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.45,12.46a7,7,0,0,0-1-9.83,7.09,7.09,0,0,0-5.92-1.4,7,7,0,0,0-4,11.15,4.76,4.76,0,0,1,1.08,2.86v.29A2,2,0,0,0,7,16.93v2a2,2,0,0,0,2,2v1a1,1,0,0,0,2,0v-1h2v1a1,1,0,0,0,2,0v-1a2,2,0,0,0,2-2v-2a2,2,0,0,0-.57-1.4V15.1A4.26,4.26,0,0,1,17.45,12.46ZM9,18.93v-2h6v2Zm6.89-7.72a6.18,6.18,0,0,0-1.46,3.72H9.56a6.67,6.67,0,0,0-1.5-3.78,5,5,0,0,1,2.84-8A5,5,0,0,1,17,8.07,4.92,4.92,0,0,1,15.89,11.21Z"/></svg>',
                ),
                array(
                    'keys' => 'line-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,3.29a1,1,0,0,0-1.42,0l-18,18a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l18-18A1,1,0,0,0,21.71,3.29Z"/></svg>',
                ),
                array(
                    'keys' => 'line-spacing',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.29,9.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2-2a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2,2A1,1,0,0,0,3.71,9.71L4,9.41v5.18l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2a1,1,0,0,0-1.42-1.42l-.29.3V9.41ZM11,8H21a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm10,3H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0,5H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'line',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13.78,9.46h0a.38.38,0,0,0-.38.38v1.67L12,9.65a.4.4,0,0,0-.33-.19h0a.38.38,0,0,0-.38.38v2.84a.38.38,0,0,0,.38.38h0a.38.38,0,0,0,.38-.38V11l1.39,1.91,0,0h0a.27.27,0,0,0,.15.11.32.32,0,0,0,.14,0h0A.33.33,0,0,0,14,13l.1-.07h0a.39.39,0,0,0,.11-.27V9.84A.38.38,0,0,0,13.78,9.46ZM9.2,12.27H8.14V9.84a.38.38,0,0,0-.38-.38h0a.38.38,0,0,0-.38.38v2.84a.38.38,0,0,0,.38.38H9.2a.39.39,0,0,0,.39-.38v0A.39.39,0,0,0,9.2,12.27Zm1.11-2.81h0a.39.39,0,0,0-.39.38v2.84a.39.39,0,0,0,.39.38h0a.38.38,0,0,0,.38-.38V9.84A.38.38,0,0,0,10.31,9.46ZM17.91,2H6.09A4.1,4.1,0,0,0,2,6.09V17.91A4.1,4.1,0,0,0,6.09,22H17.91A4.1,4.1,0,0,0,22,17.91V6.09A4.1,4.1,0,0,0,17.91,2Zm.31,12.28a1.55,1.55,0,0,1-.13.17h0a5.5,5.5,0,0,1-.8.8c-2,1.87-5.36,4.11-5.81,3.76s.64-1.76-.53-2a1,1,0,0,1-.25,0h0c-3.44-.48-6-2.89-6-5.78,0-3.25,3.29-5.88,7.34-5.88s7.34,2.63,7.34,5.88A5,5,0,0,1,18.22,14.28ZM16.51,9.47H15a.38.38,0,0,0-.38.38v2.84a.38.38,0,0,0,.38.38h1.48a.38.38,0,0,0,.38-.38v0a.38.38,0,0,0-.38-.38H15.45v-.6h1.06a.39.39,0,0,0,.38-.39v0a.38.38,0,0,0-.38-.38H15.45v-.61h1.06a.38.38,0,0,0,.38-.38v0A.38.38,0,0,0,16.51,9.47Z"/></svg>',
                ),
                array(
                    'keys' => 'link-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12.11,15.39,8.23,19.27a2.47,2.47,0,0,1-3.5,0,2.46,2.46,0,0,1,0-3.5l3.88-3.88a1,1,0,1,0-1.42-1.42L3.31,14.36a4.48,4.48,0,0,0,6.33,6.33l3.89-3.88a1,1,0,0,0-1.42-1.42Zm-3.28-.22a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l4.92-4.92a1,1,0,1,0-1.42-1.42L8.83,13.75A1,1,0,0,0,8.83,15.17ZM21,18H20V17a1,1,0,0,0-2,0v1H17a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V20h1a1,1,0,0,0,0-2Zm-4.19-4.47,3.88-3.89a4.48,4.48,0,0,0-6.33-6.33L10.47,7.19a1,1,0,1,0,1.42,1.42l3.88-3.88a2.47,2.47,0,0,1,3.5,0,2.46,2.46,0,0,1,0,3.5l-3.88,3.88a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0Z"/></svg>',
                ),
                array(
                    'keys' => 'link-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.11,15.39,8.23,19.27a2.52,2.52,0,0,1-3.5,0,2.47,2.47,0,0,1,0-3.5l3.88-3.88a1,1,0,1,0-1.42-1.42L3.31,14.36a4.48,4.48,0,0,0,6.33,6.33l3.89-3.88a1,1,0,0,0-1.42-1.42ZM20.69,3.31a4.49,4.49,0,0,0-6.33,0L10.47,7.19a1,1,0,1,0,1.42,1.42l3.88-3.88a2.52,2.52,0,0,1,3.5,0,2.47,2.47,0,0,1,0,3.5l-3.88,3.88a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l3.88-3.89A4.49,4.49,0,0,0,20.69,3.31ZM8.83,15.17a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l4.92-4.92a1,1,0,1,0-1.42-1.42L8.83,13.75A1,1,0,0,0,8.83,15.17Z"/></svg>',
                ),
                array(
                    'keys' => 'link-broken',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4.76,10.59a1,1,0,0,0,.26-2L3.26,8.15a1,1,0,1,0-.52,1.93l1.76.47A.78.78,0,0,0,4.76,10.59ZM8.62,5a1,1,0,0,0,1,.74.82.82,0,0,0,.26,0,1,1,0,0,0,.7-1.22l-.47-1.76a1,1,0,1,0-1.93.52Zm4.83,10A1,1,0,0,0,12,15L8.5,18.56a2.21,2.21,0,0,1-3.06,0,2.15,2.15,0,0,1,0-3.06L9,12a1,1,0,1,0-1.41-1.41L4,14.08A4.17,4.17,0,1,0,9.92,20l3.53-3.53A1,1,0,0,0,13.45,15ZM5.18,6.59a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41L5.3,3.89A1,1,0,0,0,3.89,5.3Zm16.08,7.33-1.76-.47A1,1,0,1,0,19,15.38l1.76.47.26,0a1,1,0,0,0,.26-2ZM15.38,19a1,1,0,0,0-1.23-.7,1,1,0,0,0-.7,1.22l.47,1.76a1,1,0,0,0,1,.74,1.15,1.15,0,0,0,.26,0,1,1,0,0,0,.71-1.23Zm3.44-1.57a1,1,0,0,0-1.41,1.41l1.29,1.29a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM21.2,7A4.16,4.16,0,0,0,14.08,4L10.55,7.56A1,1,0,1,0,12,9L15.5,5.44a2.21,2.21,0,0,1,3.06,0,2.15,2.15,0,0,1,0,3.06L15,12a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0L20,9.92A4.19,4.19,0,0,0,21.2,7Z"/></svg>',
                ),
                array(
                    'keys' => 'link-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,12a1,1,0,0,0,1,1h6a1,1,0,0,0,0-2H9A1,1,0,0,0,8,12Zm2,3H7A3,3,0,0,1,7,9h3a1,1,0,0,0,0-2H7A5,5,0,0,0,7,17h3a1,1,0,0,0,0-2Zm7-8H14a1,1,0,0,0,0,2h3a3,3,0,0,1,0,6H14a1,1,0,0,0,0,2h3A5,5,0,0,0,17,7Z"/></svg>',
                ),
                array(
                    'keys' => 'link',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,17.55,8.23,19.27a2.47,2.47,0,0,1-3.5-3.5l4.54-4.55a2.46,2.46,0,0,1,3.39-.09l.12.1a1,1,0,0,0,1.4-1.43A2.75,2.75,0,0,0,14,9.59a4.46,4.46,0,0,0-6.09.22L3.31,14.36a4.48,4.48,0,0,0,6.33,6.33L11.37,19A1,1,0,0,0,10,17.55ZM20.69,3.31a4.49,4.49,0,0,0-6.33,0L12.63,5A1,1,0,0,0,14,6.45l1.73-1.72a2.47,2.47,0,0,1,3.5,3.5l-4.54,4.55a2.46,2.46,0,0,1-3.39.09l-.12-.1a1,1,0,0,0-1.4,1.43,2.75,2.75,0,0,0,.23.21,4.47,4.47,0,0,0,6.09-.22l4.55-4.55A4.49,4.49,0,0,0,20.69,3.31Z"/></svg>',
                ),
                array(
                    'keys' => 'linkedin-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.5,8.999a5.41868,5.41868,0,0,0-2.56543.64453A.99918.99918,0,0,0,14,8.999H10a.99943.99943,0,0,0-1,1v12a.99942.99942,0,0,0,1,1h4a.99942.99942,0,0,0,1-1v-5.5a1,1,0,1,1,2,0v5.5a.99942.99942,0,0,0,1,1h4a.99942.99942,0,0,0,1-1v-7.5A5.50685,5.50685,0,0,0,17.5,8.999Zm3.5,12H19v-4.5a3,3,0,1,0-6,0v4.5H11v-10h2v.70313a1.00048,1.00048,0,0,0,1.78125.625A3.48258,3.48258,0,0,1,21,14.499Zm-14-12H3a.99943.99943,0,0,0-1,1v12a.99942.99942,0,0,0,1,1H7a.99942.99942,0,0,0,1-1v-12A.99943.99943,0,0,0,7,8.999Zm-1,12H4v-10H6ZM5.01465,1.542A3.23283,3.23283,0,1,0,4.958,7.999h.02832a3.23341,3.23341,0,1,0,.02832-6.457ZM4.98633,5.999H4.958A1.22193,1.22193,0,0,1,3.58887,4.77051c0-.7461.55957-1.22852,1.42578-1.22852A1.2335,1.2335,0,0,1,6.41113,4.77051C6.41113,5.5166,5.85156,5.999,4.98633,5.999Z"/></svg>',
                ),
                array(
                    'keys' => 'linkedin',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.47,2H3.53A1.45,1.45,0,0,0,2.06,3.43V20.57A1.45,1.45,0,0,0,3.53,22H20.47a1.45,1.45,0,0,0,1.47-1.43V3.43A1.45,1.45,0,0,0,20.47,2ZM8.09,18.74h-3v-9h3ZM6.59,8.48h0a1.56,1.56,0,1,1,0-3.12,1.57,1.57,0,1,1,0,3.12ZM18.91,18.74h-3V13.91c0-1.21-.43-2-1.52-2A1.65,1.65,0,0,0,12.85,13a2,2,0,0,0-.1.73v5h-3s0-8.18,0-9h3V11A3,3,0,0,1,15.46,9.5c2,0,3.45,1.29,3.45,4.06Z"/></svg>',
                ),
                array(
                    'keys' => 'lira-sign',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,12a1,1,0,0,0-1,1,7.00787,7.00787,0,0,1-7,7V11.13538l5.2168-1.15931a.99986.99986,0,0,0-.4336-1.95214L10,9.08685V7.13538l5.2168-1.15931a.99986.99986,0,1,0-.4336-1.95214L10,5.08685V3A1,1,0,0,0,8,3V5.53131l-2.2168.49262a.99986.99986,0,1,0,.4336,1.95214L8,7.57983V9.53131l-2.2168.49262a.99986.99986,0,1,0,.4336,1.95214L8,11.57983V21a1,1,0,0,0,1,1h1a9.01047,9.01047,0,0,0,9-9A1,1,0,0,0,18,12Z"/></svg>',
                ),
                array(
                    'keys' => 'list-ui-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3.5,6a1,1,0,1,0,1,1A1,1,0,0,0,3.5,6Zm4,2h14a1,1,0,0,0,0-2H7.5a1,1,0,0,0,0,2Zm0,3a1,1,0,1,0,1,1A1,1,0,0,0,7.5,11Zm4,5a1,1,0,1,0,1,1A1,1,0,0,0,11.5,16Zm10-5h-10a1,1,0,0,0,0,2h10a1,1,0,0,0,0-2Zm0,5h-6a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'list-ul',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'location-arrow-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.68,17.65l-7-14a3,3,0,0,0-5.36,0l-7,14a3,3,0,0,0,3.9,4.08l5.37-2.4h0a1.06,1.06,0,0,1,.82,0l5.37,2.4a3,3,0,0,0,3.9-4.08Zm-2,2a1,1,0,0,1-1.13.22l-5.37-2.39a3,3,0,0,0-2.44,0L5.41,19.9a1,1,0,0,1-1.3-1.35l7-14a1,1,0,0,1,1.78,0l7,14A1,1,0,0,1,19.72,19.68Z"/></svg>',
                ),
                array(
                    'keys' => 'location-arrow',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.15,2.86a2.89,2.89,0,0,0-3-.71L4,6.88a2.9,2.9,0,0,0-.12,5.47l5.24,2h0a.93.93,0,0,1,.53.52l2,5.25A2.87,2.87,0,0,0,14.36,22h.07a2.88,2.88,0,0,0,2.69-2L21.85,5.83A2.89,2.89,0,0,0,21.15,2.86ZM20,5.2,15.22,19.38a.88.88,0,0,1-.84.62.92.92,0,0,1-.87-.58l-2-5.25a2.91,2.91,0,0,0-1.67-1.68l-5.25-2A.9.9,0,0,1,4,9.62a.88.88,0,0,1,.62-.84L18.8,4.05A.91.91,0,0,1,20,5.2Z"/></svg>',
                ),
                array(
                    'keys' => 'location-pin-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,10.8a2,2,0,1,0-2-2A2,2,0,0,0,12,10.8Zm-.71,6.91a1,1,0,0,0,1.42,0l4.09-4.1a6.79,6.79,0,1,0-9.6,0ZM7.23,8.34A4.81,4.81,0,0,1,9.36,4.79a4.81,4.81,0,0,1,5.28,0,4.82,4.82,0,0,1,.75,7.41L12,15.59,8.61,12.2A4.77,4.77,0,0,1,7.23,8.34ZM19,20H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'location-point',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,4.48a8.45,8.45,0,0,0-12,12l5.27,5.28a1,1,0,0,0,1.42,0L18,16.43A8.45,8.45,0,0,0,18,4.48ZM16.57,15,12,19.59,7.43,15a6.46,6.46,0,1,1,9.14,0ZM9,7.41a4.32,4.32,0,0,0,0,6.1,4.31,4.31,0,0,0,7.36-3,4.24,4.24,0,0,0-1.26-3.05A4.3,4.3,0,0,0,9,7.41Zm4.69,4.68a2.33,2.33,0,1,1,.67-1.63A2.33,2.33,0,0,1,13.64,12.09Z"/></svg>',
                ),
                array(
                    'keys' => 'lock-access',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H15a1,1,0,0,0,0,2h5V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2Zm0,12a1,1,0,0,0-1,1v5H15a1,1,0,0,0,0,2h6a1,1,0,0,0,1-1V15A1,1,0,0,0,21,14ZM12,6A3,3,0,0,0,9,9v1a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2h6a2,2,0,0,0,2-2V12a2,2,0,0,0-2-2V9A3,3,0,0,0,12,6ZM11,9a1,1,0,0,1,2,0v1H11Zm4,7H9V12h6ZM3,10A1,1,0,0,0,4,9V4H9A1,1,0,0,0,9,2H3A1,1,0,0,0,2,3V9A1,1,0,0,0,3,10ZM9,20H4V15a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1H9a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'lock-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,13a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V14A1,1,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'lock-open-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,13a1.49,1.49,0,0,0-1,2.61V17a1,1,0,0,0,2,0V15.61A1.49,1.49,0,0,0,12,13Zm5-4H9V7a3,3,0,0,1,5.12-2.13,3.08,3.08,0,0,1,.78,1.38,1,1,0,1,0,1.94-.5,5.09,5.09,0,0,0-1.31-2.29A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9Zm1,10a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'lock-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.84,5.38a2,2,0,0,1,2.57.21A2,2,0,0,1,14,7v3a1,1,0,0,0,1,1h1a1,1,0,0,1,1,1v.34a1,1,0,0,0,2,0V12a3,3,0,0,0-3-3V7a4,4,0,0,0-1.17-2.83,4.06,4.06,0,0,0-5.19-.39,1,1,0,1,0,1.2,1.6ZM21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71L7.62,9A3,3,0,0,0,5,12v6a3,3,0,0,0,3,3h8a3,3,0,0,0,2.39-1.2l1.9,1.91a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM16,19H8a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H9.59l2.07,2.07A1,1,0,0,0,11,14v2a1,1,0,0,0,2,0V14.41l3.93,3.93A1,1,0,0,1,16,19Z"/></svg>',
                ),
                array(
                    'keys' => 'lock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,9V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'luggage-cart',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M2,13.5v2a1,1,0,0,0,1,1H13a3,3,0,0,0,6,0h2a1,1,0,0,0,1-1v-8a3,3,0,0,0-3-3H9a3,3,0,0,0-3,3v7H4v-1a1,1,0,0,0-2,0Zm13,3a1,1,0,1,1,1,1A1,1,0,0,1,15,16.5Zm-7-6H20v4H18.22a3,3,0,0,0-4.44,0H8Zm0-3a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1v1H8Z"/></svg>',
                ),
                array(
                    'keys' => 'mailbox-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,13h2a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm8,7H18V9h1a1,1,0,0,0,0-2H17.91A6,6,0,0,0,6.09,7H5A1,1,0,0,0,5,9H6V20H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2ZM12,4a4,4,0,0,1,3.86,3H8.14A4,4,0,0,1,12,4Zm4,16H8V18h8Zm0-4H8V9h8Z"/></svg>',
                ),
                array(
                    'keys' => 'mailbox',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,12h2a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm9-6H12V4h1a1,1,0,0,0,0-2H11a1,1,0,0,0-1,1V6H7a4,4,0,0,0-4,4v6a1,1,0,0,0,1,1h6v4a1,1,0,0,0,2,0V17h8a1,1,0,0,0,1-1V10A4,4,0,0,0,17,6Zm-4,4v5H5V10A2,2,0,0,1,7,8h6.56A3.91,3.91,0,0,0,13,10Zm6,5H15V10a2,2,0,0,1,4,0Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.46,9.63A8.5,8.5,0,0,0,7.3,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05ZM12,6a4.5,4.5,0,1,0,4.5,4.5A4.51,4.51,0,0,0,12,6Zm0,7a2.5,2.5,0,1,1,2.5-2.5A2.5,2.5,0,0,1,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-edit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.46,9.63A8.5,8.5,0,1,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Zm-2.81-8.8a1,1,0,0,0-1.42,0L8.79,9.83a1,1,0,0,0-.29.7V13a1,1,0,0,0,1,1h2.42a1,1,0,0,0,.71-.29l3.58-3.58a1,1,0,0,0,0-1.41ZM11.51,12h-1V11l2.58-2.58,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-info',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,12,10Zm8.46-.32A8.5,8.5,0,0,0,7.3,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05ZM12.92,7.57a.56.56,0,0,0-.09-.17l-.12-.15A1,1,0,0,0,11.8,7L11.62,7l-.18.09-.15.13-.12.15a.56.56,0,0,0-.09.17.6.6,0,0,0-.06.19A1.23,1.23,0,0,0,11,8a.88.88,0,0,0,.08.39,1.11,1.11,0,0,0,.21.32,1.06,1.06,0,0,0,.33.22,1.07,1.07,0,0,0,.76,0,1.19,1.19,0,0,0,.33-.22,1.11,1.11,0,0,0,.21-.32A1,1,0,0,0,13,8a1.23,1.23,0,0,0,0-.19A.6.6,0,0,0,12.92,7.57Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,9.45H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm6.46.18A8.5,8.5,0,1,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,9.45H13v-1a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm6.46.18A8.5,8.5,0,1,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.44,13.11,12.27,13a1,1,0,0,0-1.09.22.87.87,0,0,0-.22.32,1,1,0,0,0-.08.39,1,1,0,0,0,.08.38,1.07,1.07,0,0,0,.54.54,1,1,0,0,0,.38.08,1.09,1.09,0,0,0,.39-.08,1,1,0,0,0,.32-.22,1,1,0,0,0,0-1.41ZM11.88,6A2.75,2.75,0,0,0,9.5,7.32a1,1,0,1,0,1.73,1A.77.77,0,0,1,11.88,8a.75.75,0,1,1,0,1.5,1,1,0,1,0,0,2,2.75,2.75,0,1,0,0-5.5Zm8.58,3.68A8.5,8.5,0,0,0,7.3,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.41,6.53a2.24,2.24,0,0,1-1.82-.39,1,1,0,0,0-1.18,0,2.24,2.24,0,0,1-1.82.39,1,1,0,0,0-.84.2,1,1,0,0,0-.37.78v2.9A4.14,4.14,0,0,0,10,13.74l1.37,1a1,1,0,0,0,1.18,0l1.37-1a4.14,4.14,0,0,0,1.66-3.33V7.51a1,1,0,0,0-.37-.78A1,1,0,0,0,14.41,6.53Zm-.79,3.88a2.15,2.15,0,0,1-.85,1.73l-.77.57-.77-.57a2.15,2.15,0,0,1-.85-1.73V8.57A4.22,4.22,0,0,0,12,8.12a4.22,4.22,0,0,0,1.62.45Zm6.84-.78A8.5,8.5,0,0,0,7.3,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.63,5.49a6,6,0,0,1,7.21,7.2,1,1,0,0,0,.74,1.21.9.9,0,0,0,.23,0,1,1,0,0,0,1-.76,8,8,0,0,0-9.61-9.62,1,1,0,0,0,.46,2ZM21.71,20.07,17.44,15.8h0L3.71,2.07a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41L5.5,6.69A8,8,0,0,0,6.34,17l4.95,4.95a1,1,0,0,0,1.42,0l4-4,3.56,3.56a1,1,0,0,0,1.42-1.41Zm-9.59-6.76a2,2,0,0,1-1.53-.57A2,2,0,0,1,10,11.21ZM12,19.81,7.76,15.57a6,6,0,0,1-.82-7.44L8.41,9.6a4,4,0,0,0,.76,4.55A4,4,0,0,0,12,15.33a3.93,3.93,0,0,0,1.73-.41l1.58,1.58Z"/></svg>',
                ),
                array(
                    'keys' => 'map-marker',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2a8,8,0,0,0-8,8c0,5.4,7.05,11.5,7.35,11.76a1,1,0,0,0,1.3,0C13,21.5,20,15.4,20,10A8,8,0,0,0,12,2Zm0,17.65c-2.13-2-6-6.31-6-9.65a6,6,0,0,1,12,0C18,13.34,14.13,17.66,12,19.65ZM12,6a4,4,0,1,0,4,4A4,4,0,0,0,12,6Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,12Z"/></svg>',
                ),
                array(
                    'keys' => 'map-pin-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,11.9V17a1,1,0,0,0,2,0V11.9a5,5,0,1,0-2,0ZM12,4A3,3,0,1,1,9,7,3,3,0,0,1,12,4Zm4.21,10.42a1,1,0,1,0-.42,2C18.06,16.87,19,17.68,19,18c0,.58-2.45,2-7,2s-7-1.42-7-2c0-.32.94-1.13,3.21-1.62a1,1,0,1,0-.42-2C4.75,15.08,3,16.39,3,18c0,2.63,4.53,4,9,4s9-1.37,9-4C21,16.39,19.25,15.08,16.21,14.42Z"/></svg>',
                ),
                array(
                    'keys' => 'map-pin',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.37,12.79a1,1,0,0,0-.74,1.86C17.09,15.23,18,16.13,18,17c0,1.42-2.46,3-6,3s-6-1.58-6-3c0-.87.91-1.77,2.37-2.35a1,1,0,0,0-.74-1.86C5.36,13.69,4,15.26,4,17c0,2.8,3.51,5,8,5s8-2.2,8-5C20,15.26,18.64,13.69,16.37,12.79ZM11,9.86V17a1,1,0,0,0,2,0V9.86a4,4,0,1,0-2,0ZM12,4a2,2,0,1,1-2,2A2,2,0,0,1,12,4Z"/></svg>',
                ),
                array(
                    'keys' => 'map',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.32,5.05l-6-2h-.07a.7.7,0,0,0-.14,0h-.23l-.13,0h-.07L9,5,3.32,3.05a1,1,0,0,0-.9.14A1,1,0,0,0,2,4V18a1,1,0,0,0,.68.95l6,2h0a1,1,0,0,0,.62,0h0L15,19.05,20.68,21A1.19,1.19,0,0,0,21,21a.94.94,0,0,0,.58-.19A1,1,0,0,0,22,20V6A1,1,0,0,0,21.32,5.05ZM8,18.61,4,17.28V5.39L8,6.72Zm6-1.33-4,1.33V6.72l4-1.33Zm6,1.33-4-1.33V5.39l4,1.33Z"/></svg>',
                ),
                array(
                    'keys' => 'mars',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.42,4.12a1,1,0,0,0-.54-.54,1,1,0,0,0-.38-.08h-4a1,1,0,0,0,0,2h1.59l-2.4,2.4A7,7,0,1,0,16.1,9.31l2.4-2.4V8.5a1,1,0,0,0,2,0v-4A1,1,0,0,0,20.42,4.12ZM14,17A5,5,0,1,1,14,10h0A5,5,0,0,1,14,17Z"/></svg>',
                ),
                array(
                    'keys' => 'master-card',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.26465,5.27441a6.68141,6.68141,0,0,0-3.27295.85505,6.72754,6.72754,0,1,0,0,11.745,6.72551,6.72551,0,1,0,3.27295-12.6ZM10.23712,16.457a4.66714,4.66714,0,0,1-1.51837.27252,4.72754,4.72754,0,0,1,0-9.45508,4.66688,4.66688,0,0,1,1.51837.27253,6.68737,6.68737,0,0,0,0,8.91ZM11.9917,15.3996a4.69542,4.69542,0,0,1,0-6.79529,4.69542,4.69542,0,0,1,0,6.79529Zm3.27295,1.32989a4.66709,4.66709,0,0,1-1.51837-.27252,6.68737,6.68737,0,0,0,0-8.91,4.66683,4.66683,0,0,1,1.51837-.27253,4.72754,4.72754,0,0,1,0,9.45508Z"/></svg>',
                ),
                array(
                    'keys' => 'maximize-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41l5.79,5.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM21,16a1,1,0,0,0-1,1v1.59l-5.79-5.8a1,1,0,0,0-1.42,1.42L18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17A1,1,0,0,0,21,16Z"/></svg>',
                ),
                array(
                    'keys' => 'medal',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.38,5.76a1,1,0,0,0-.47-.61l-5.2-3a1,1,0,0,0-1.37.36L12,6.57,9.66,2.51a1,1,0,0,0-1.37-.36l-5.2,3a1,1,0,0,0-.47.61,1,1,0,0,0,.1.75l4,6.83A5.91,5.91,0,0,0,6,16a6,6,0,1,0,11.34-2.72l3.9-6.76A1,1,0,0,0,21.38,5.76ZM5,6.38l3.46-2L11.68,10A5.94,5.94,0,0,0,8,11.58ZM12,20a4,4,0,0,1-4-4,4,4,0,0,1,4-4,4,4,0,1,1,0,8Zm4-8.45a5.9,5.9,0,0,0-1.86-1.15L13.16,8.57l2.42-4.19,3.46,2Z"/></svg>',
                ),
                array(
                    'keys' => 'medical-drip',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,6H15V4h2a1,1,0,0,0,0-2H9A5,5,0,0,0,4,7V21a1,1,0,0,0,2,0V7A3,3,0,0,1,9,4h4V6H11A3,3,0,0,0,8,9v4.93a3,3,0,0,0,1.34,2.5L11,17.54V18a2,2,0,0,0,2,2v1a1,1,0,0,0,2,0V20a2,2,0,0,0,2-2v-.46l1.66-1.11A3,3,0,0,0,20,13.93V9A3,3,0,0,0,17,6Zm-1,5h2v1H17a1,1,0,0,0,0,2h1a1,1,0,0,1-.44.76l-2.1,1.41A1,1,0,0,0,15,17v1H13V17a1,1,0,0,0-.45-.83l-2.1-1.41a1,1,0,0,1-.45-.83V9a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1H16a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'medical-square-full',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20ZM7,14.79H9v2a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1v-2h2a1,1,0,0,0,1-1v-4a1,1,0,0,0-1-1H15v-2a1,1,0,0,0-1-1H10a1,1,0,0,0-1,1v2H7a1,1,0,0,0-1,1v4A1,1,0,0,0,7,14.79Zm1-4h2a1,1,0,0,0,1-1v-2h2v2a1,1,0,0,0,1,1h2v2H14a1,1,0,0,0-1,1v2H11v-2a1,1,0,0,0-1-1H8Z"/></svg>',
                ),
                array(
                    'keys' => 'medical-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM17,9H15V7a1,1,0,0,0-1-1H10A1,1,0,0,0,9,7V9H7a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H9v2a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V15h2a1,1,0,0,0,1-1V10A1,1,0,0,0,17,9Zm-1,4H14a1,1,0,0,0-1,1v2H11V14a1,1,0,0,0-1-1H8V11h2a1,1,0,0,0,1-1V8h2v2a1,1,0,0,0,1,1h2Z"/></svg>',
                ),
                array(
                    'keys' => 'medium-m',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.20905,6.41669H22V4.08331H14.51978l-2.48584,9.16663h-.068L9.50269,4.08331H2V6.41663h.76837A.89578.89578,0,0,1,3.5,7.11139v9.83032a.84093.84093,0,0,1-.73163.6416H2v2.33338H8V17.58331H6.5V7.25h.08752L10.0451,19.91669h2.712L16.25989,7.25h.07355V17.58331H14.83337v2.33338H22V17.58331h-.79095a.83931.83931,0,0,1-.70905-.6416V7.11145A.8976.8976,0,0,1,21.20905,6.41669Z"/></svg>',
                ),
                array(
                    'keys' => 'medkit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10,17h1v1a1,1,0,0,0,2,0V17h1a1,1,0,0,0,0-2H13V14a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2ZM19,6H17V5a3,3,0,0,0-3-3H10A3,3,0,0,0,7,5V6H5A3,3,0,0,0,2,9V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A3,3,0,0,0,19,6ZM9,5a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V6H9ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V9A1,1,0,0,1,5,8H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'meeting-board',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7,10H9A1,1,0,0,0,9,8H7a1,1,0,0,0,0,2ZM21,4H13V3a1,1,0,0,0-2,0V4H3A1,1,0,0,0,2,5V15a3,3,0,0,0,3,3H9.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L11,19.41V21a1,1,0,0,0,2,0V19.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L14.41,18H19a3,3,0,0,0,3-3V5A1,1,0,0,0,21,4ZM20,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V6H20ZM7,14h6a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'megaphone',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.99121,2.002a.99943.99943,0,0,0-1,1v.63672a9.03617,9.03617,0,0,1-7,3.36328h-6a3.00328,3.00328,0,0,0-3,3v2a3.00328,3.00328,0,0,0,3,3H6.475L4.07227,20.6084A.99931.99931,0,0,0,4.99121,22.002h4a.99857.99857,0,0,0,.91895-.60644L12.63391,15.04a9.02805,9.02805,0,0,1,6.3573,3.32507V19.002a1,1,0,0,0,2,0v-16A.99942.99942,0,0,0,19.99121,2.002Zm-14,11a1.00067,1.00067,0,0,1-1-1v-2a1.00068,1.00068,0,0,1,1-1h1v4Zm2.34082,7H6.50781l2.14258-5h1.82422ZM18.99121,15.5238a11.052,11.052,0,0,0-7-2.52185h-3v-4h3a11.05281,11.05281,0,0,0,7-2.52234Z"/></svg>',
                ),
                array(
                    'keys' => 'meh-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11h1a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm6,3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm0-5H14a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'meh-closed-eye',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.21,10.54a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41,3.08,3.08,0,0,0-4.24,0,1,1,0,1,0,1.41,1.41A1,1,0,0,1,9.21,10.54ZM15,14H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm2.62-4.87a3.08,3.08,0,0,0-4.24,0,1,1,0,0,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0A1,1,0,0,0,17.62,9.13ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'meh',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6,3H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm0-5a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'message',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.34,9.32l-14-7a3,3,0,0,0-4.08,3.9l2.4,5.37h0a1.06,1.06,0,0,1,0,.82l-2.4,5.37A3,3,0,0,0,5,22a3.14,3.14,0,0,0,1.35-.32l14-7a3,3,0,0,0,0-5.36Zm-.89,3.57-14,7a1,1,0,0,1-1.35-1.3l2.39-5.37A2,2,0,0,0,6.57,13h6.89a1,1,0,0,0,0-2H6.57a2,2,0,0,0-.08-.22L4.1,5.41a1,1,0,0,1,1.35-1.3l14,7a1,1,0,0,1,0,1.78Z"/></svg>',
                ),
                array(
                    'keys' => 'metro',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.71,14.29a1.00157,1.00157,0,0,0-1.08984-.21.90087.90087,0,0,0-.54.54,1.00008,1.00008,0,1,0,1.83984,0A1.14718,1.14718,0,0,0,8.71,14.29Zm8,0a1.04669,1.04669,0,0,0-1.41992,0,1.14718,1.14718,0,0,0-.21.33008A.98919.98919,0,0,0,15.29,15.71a1.14718,1.14718,0,0,0,.33008.21.94107.94107,0,0,0,.75976,0,1.16044,1.16044,0,0,0,.33008-.21.98919.98919,0,0,0,.21-1.08984A1.14718,1.14718,0,0,0,16.71,14.29Zm2.59943,4.60528a4.97014,4.97014,0,0,0,1.78436-4.8172l-1.5-8A5.00038,5.00038,0,0,0,14.68066,2H9.31934A5.00038,5.00038,0,0,0,4.40625,6.07812l-1.5,8a4.97014,4.97014,0,0,0,1.78436,4.8172L3.293,20.293A.99989.99989,0,1,0,4.707,21.707l1.86914-1.86914A5.00576,5.00576,0,0,0,7.81934,20h8.36132a5.00576,5.00576,0,0,0,1.24317-.16211L19.293,21.707A.99989.99989,0,0,0,20.707,20.293ZM6.37109,6.44727A3.0021,3.0021,0,0,1,9.31934,4h5.36132a3.0021,3.0021,0,0,1,2.94825,2.44727l.34668,1.84893a7.95514,7.95514,0,0,1-11.95118,0ZM18.48828,16.916A2.9899,2.9899,0,0,1,16.18066,18H7.81934a3.00057,3.00057,0,0,1-2.94825-3.55273l.71106-3.79236a9.95447,9.95447,0,0,0,12.8357,0l.71106,3.79236A2.99028,2.99028,0,0,1,18.48828,16.916Z"/></svg>',
                ),
                array(
                    'keys' => 'microphone-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.5,3.73a2,2,0,0,1,2.95-.14A2,2,0,0,1,14,5V8.41a1,1,0,0,0,2,0V5A4,4,0,0,0,9,2.47,1,1,0,1,0,10.5,3.73Zm8.22,9.54.2,0a1,1,0,0,0,1-.81A7.91,7.91,0,0,0,20,11a1,1,0,0,0-2,0,5.54,5.54,0,0,1-.11,1.1A1,1,0,0,0,18.72,13.27Zm3,6.06-18-18a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41L8,8.48V11a4,4,0,0,0,6,3.46l1.46,1.46A6,6,0,0,1,6,11a1,1,0,0,0-2,0,8,8,0,0,0,7,7.93V21H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V18.93a7.87,7.87,0,0,0,3.85-1.59l3.4,3.4a1,1,0,0,0,1.42-1.41ZM12,13a2,2,0,0,1-2-2v-.52l2.45,2.46A1.74,1.74,0,0,1,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'microphone',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,15a4,4,0,0,0,4-4V5A4,4,0,0,0,8,5v6A4,4,0,0,0,12,15ZM10,5a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0Zm10,6a1,1,0,0,0-2,0A6,6,0,0,1,6,11a1,1,0,0,0-2,0,8,8,0,0,0,7,7.93V21H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V18.93A8,8,0,0,0,20,11Z"/></svg>',
                ),
                array(
                    'keys' => 'microscope',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,21.00537H14.81573a2.96355,2.96355,0,0,0,.143-.59173A8.04382,8.04382,0,0,0,20,13.00537a7.94487,7.94487,0,0,0-2.12744-5.42248l.63721-.63758a.99138.99138,0,0,0,.24121-.39062l.708-2.12207a.9997.9997,0,0,0-.24121-1.02344L17.0957,1.2876a.99874.99874,0,0,0-1.02343-.2417l-2.1211.70752a.99655.99655,0,0,0-.39062.2417L7.19824,8.35791a.9995.9995,0,0,0-.00006,1.41394L5.78223,11.1875a.99963.99963,0,0,0,0,1.41406l2.12207,2.1211a.99965.99965,0,0,0,1.41406,0l1.41406-1.41407.002.002a.99963.99963,0,0,0,1.41406,0l4.30945-4.31208A5.95544,5.95544,0,0,1,18,13.00537a6.048,6.048,0,0,1-3.45483,5.43085,2.97642,2.97642,0,0,0-5.12458.063,6.822,6.822,0,0,1-1.119-.55469A.98851.98851,0,0,0,9,17.00537a.99974.99974,0,0,0-1-1H4a1,1,0,0,0,0,2H5.33142A8.81386,8.81386,0,0,0,9.04779,20.478a2.95521,2.95521,0,0,0,.13654.5274H4a1,1,0,0,0,0,2H20a1,1,0,0,0,0-2ZM8.61133,12.60156l-.708-.707.708-.70752.707.70752Zm8.31738-6.90332L11.44141,11.189l-2.12207-2.124,5.48828-5.48877,1.31152-.4375,1.24707,1.24756ZM12,21.00537a1,1,0,1,1,1-1A1.001,1.001,0,0,1,12,21.00537Z"/></svg>',
                ),
                array(
                    'keys' => 'minus-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'minus-path',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.18,4h2.1a1,1,0,0,0,0-2H8.18a1,1,0,0,0,0,2ZM3,11.28a1,1,0,0,0,1-1V8.18a1,1,0,0,0-2,0v2.1A1,1,0,0,0,3,11.28ZM14.46,4a1,1,0,0,0,2,0V3a1,1,0,0,0-1-1h-1a1,1,0,0,0,0,2ZM21,7.54H16.46a1,1,0,1,0-2,0H8.54a1,1,0,0,0-1,1v5.92a1,1,0,1,0,0,2V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8.54A1,1,0,0,0,21,7.54ZM20,20H9.54V15.47h0V9.54H20ZM4,2H3A1,1,0,0,0,2,3V4A1,1,0,0,0,4,4,1,1,0,0,0,4,2ZM4,14.46a1,1,0,0,0-2,0v1a1,1,0,0,0,1,1H4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'minus-square-full',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,13h6a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2ZM21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'minus-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Zm-4-8H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,11H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'missed-call',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6,7.49a1,1,0,0,0,1-1V5.9L9.88,8.78a3,3,0,0,0,4.24,0l4.59-4.59a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L12.71,7.36a1,1,0,0,1-1.42,0L8.41,4.49H9a1,1,0,0,0,0-2H6a1,1,0,0,0-.92.61A1.09,1.09,0,0,0,5,3.49v3A1,1,0,0,0,6,7.49Zm15.94,7.36a16.27,16.27,0,0,0-19.88,0,2.69,2.69,0,0,0-1,2,2.66,2.66,0,0,0,.78,2.07L3.6,20.72A2.68,2.68,0,0,0,7.06,21l.47-.32a8.13,8.13,0,0,1,1-.55,1.85,1.85,0,0,0,1-2.3l-.09-.24a10.49,10.49,0,0,1,5.22,0l-.09.24a1.85,1.85,0,0,0,1,2.3,8.13,8.13,0,0,1,1,.55l.47.32a2.58,2.58,0,0,0,1.54.5,2.72,2.72,0,0,0,1.92-.79l1.81-1.82A2.66,2.66,0,0,0,23,16.83,2.69,2.69,0,0,0,21.94,14.85ZM20.8,17.49,19,19.3a.68.68,0,0,1-.86.1c-.19-.14-.38-.27-.59-.4a11.65,11.65,0,0,0-1.09-.61l.4-1.09a1,1,0,0,0-.6-1.28,12.42,12.42,0,0,0-8.5,0,1,1,0,0,0-.6,1.28l.4,1.1a9.8,9.8,0,0,0-1.1.6l-.58.4A.66.66,0,0,1,5,19.3L3.2,17.49A.67.67,0,0,1,3,17a.76.76,0,0,1,.28-.53,14.29,14.29,0,0,1,17.44,0A.76.76,0,0,1,21,17,.67.67,0,0,1,20.8,17.49Z"/></svg>',
                ),
                array(
                    'keys' => 'mobile-android-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,2H8A3,3,0,0,0,5,5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V18H17Zm0-3H7V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'mobile-android',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,16.29l-.15-.12a.76.76,0,0,0-.18-.09L12.2,16a1,1,0,0,0-.91.27,1.15,1.15,0,0,0-.21.33,1,1,0,0,0,1.3,1.31,1.46,1.46,0,0,0,.33-.22,1,1,0,0,0,.21-1.09A1,1,0,0,0,12.71,16.29ZM16,2H8A3,3,0,0,0,5,5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'mobile-vibrate',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.88,14.12,9.73,14l-.18-.1-.18-.05a1,1,0,0,0-.9.27.83.83,0,0,0-.22.33.94.94,0,0,0,0,.76,1.07,1.07,0,0,0,.54.54,1,1,0,0,0,.38.08,1.09,1.09,0,0,0,.39-.08.87.87,0,0,0,.32-.22,1,1,0,0,0,.22-.32,1,1,0,0,0,.07-.38.84.84,0,0,0-.08-.38A.93.93,0,0,0,9.88,14.12ZM3.51,8.76a1,1,0,0,0,.71-.3L8.46,4.22a1,1,0,0,0,0-1.41,1,1,0,0,0-1.41,0L2.81,7.05a1,1,0,0,0,0,1.41A1,1,0,0,0,3.51,8.76Zm17.68,6.78a1,1,0,0,0-1.41,0l-4.24,4.24a1,1,0,0,0,.7,1.71,1,1,0,0,0,.71-.3L21.19,17A1,1,0,0,0,21.19,15.54Zm.17-5.66a3,3,0,0,0-.87-2.12L16.24,3.51a3.08,3.08,0,0,0-4.24,0L3.51,12a3,3,0,0,0,0,4.24l4.25,4.25h0a3,3,0,0,0,4.24,0L20.49,12A3,3,0,0,0,21.36,9.88Zm-2.29.71-8.48,8.48a1,1,0,0,1-1.42,0h0L4.93,14.83a1,1,0,0,1,0-1.42l8.48-8.48a1,1,0,0,1,1.42,0l4.24,4.24a1,1,0,0,1,0,1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'modem',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.48,13.13a.65.65,0,0,0-.05-.2.89.89,0,0,0-.08-.17.86.86,0,0,0-.1-.16l-.16-.13L21,12.38,6.28,3.88a1,1,0,0,0-1,1.74l11.49,6.63H3.5a1,1,0,0,0-1,1v4a3,3,0,0,0,3,3h13a3,3,0,0,0,3-3v-4S21.48,13.17,21.48,13.13Zm-2,4.12a1,1,0,0,1-1,1H5.5a1,1,0,0,1-1-1v-3h15Zm-3,0a1,1,0,1,0-1-1A1,1,0,0,0,16.5,17.25Z"/></svg>',
                ),
                array(
                    'keys' => 'money-bill-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6,11a1,1,0,1,0,1,1A1,1,0,0,0,6,11Zm5.86-1.55h0L4.71,2.29A1,1,0,0,0,3.29,3.71L4.59,5H4A3,3,0,0,0,1,8v8a3,3,0,0,0,3,3H18.59l2.7,2.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm-.74,2.09,1.34,1.34A1,1,0,0,1,12,13a1,1,0,0,1-1-1A1,1,0,0,1,11.12,11.54ZM4,17a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H6.59l3.1,3.1A3,3,0,0,0,9,12a3,3,0,0,0,3,3,3,3,0,0,0,1.9-.69L16.59,17ZM20,5H12.66a1,1,0,0,0,0,2H20a1,1,0,0,1,1,1v7.34a1,1,0,1,0,2,0V8A3,3,0,0,0,20,5Zm-1,7a1,1,0,1,0-1,1A1,1,0,0,0,19,12Z"/></svg>',
                ),
                array(
                    'keys' => 'money-bill-stack',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,1H4A3,3,0,0,0,1,4V20a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V4A3,3,0,0,0,20,1ZM8,21H4a1,1,0,0,1-1-1V18.82A3,3,0,0,0,4,19H8Zm0-4H4a1,1,0,0,1-1-1V14.82A3,3,0,0,0,4,15H8Zm0-4H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H8Zm6,8H10V15h4Zm0-8H10V3h4Zm7,7a1,1,0,0,1-1,1H16V19h4a3,3,0,0,0,1-.18Zm0-4a1,1,0,0,1-1,1H16V15h4a3,3,0,0,0,1-.18Zm0-4a1,1,0,0,1-1,1H16V3h4a1,1,0,0,1,1,1ZM18,7a1,1,0,1,0,1,1A1,1,0,0,0,18,7ZM6,9A1,1,0,1,0,5,8,1,1,0,0,0,6,9Z"/></svg>',
                ),
                array(
                    'keys' => 'money-bill',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6,11a1,1,0,1,0,1,1A1,1,0,0,0,6,11Zm12,0a1,1,0,1,0,1,1A1,1,0,0,0,18,11Zm2-6H4A3,3,0,0,0,1,8v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V8A3,3,0,0,0,20,5Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H20a1,1,0,0,1,1,1ZM12,9a3,3,0,1,0,3,3A3,3,0,0,0,12,9Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'money-insert',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.46,6,11,5.41V9a1,1,0,0,0,2,0V5.41l.54.55A1,1,0,0,0,15,6a1,1,0,0,0,0-1.42L12.71,2.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21L9,4.54A1,1,0,0,0,10.46,6ZM12,12a3,3,0,1,0,3,3A3,3,0,0,0,12,12Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,16ZM5,15a1,1,0,1,0,1-1A1,1,0,0,0,5,15Zm14,0a1,1,0,1,0-1,1A1,1,0,0,0,19,15Zm1-7H16a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1v8a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H8A1,1,0,0,0,8,8H4a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V11A3,3,0,0,0,20,8Z"/></svg>',
                ),
                array(
                    'keys' => 'money-stack',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,17H2a1,1,0,0,0,0,2H22a1,1,0,0,0,0-2Zm0,4H2a1,1,0,0,0,0,2H22a1,1,0,0,0,0-2ZM6,7A1,1,0,1,0,7,8,1,1,0,0,0,6,7ZM20,1H4A3,3,0,0,0,1,4v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V4A3,3,0,0,0,20,1Zm1,11a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3H20a1,1,0,0,1,1,1ZM12,5a3,3,0,1,0,3,3A3,3,0,0,0,12,5Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,9Zm6-2a1,1,0,1,0,1,1A1,1,0,0,0,18,7Z"/></svg>',
                ),
                array(
                    'keys' => 'money-withdraw',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,12a3,3,0,1,0,3,3A3,3,0,0,0,12,12Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,16Zm-.71-6.29a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21L15,7.46A1,1,0,1,0,13.54,6L13,6.59V3a1,1,0,0,0-2,0V6.59L10.46,6A1,1,0,0,0,9,7.46ZM19,15a1,1,0,1,0-1,1A1,1,0,0,0,19,15Zm1-7H17a1,1,0,0,0,0,2h3a1,1,0,0,1,1,1v8a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H7A1,1,0,0,0,7,8H4a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V11A3,3,0,0,0,20,8ZM5,15a1,1,0,1,0,1-1A1,1,0,0,0,5,15Z"/></svg>',
                ),
                array(
                    'keys' => 'money-withdrawal',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,2H2A1,1,0,0,0,1,3v8a1,1,0,0,0,1,1H5v9a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1V12h3a1,1,0,0,0,1-1V3A1,1,0,0,0,22,2ZM7,20V18a2,2,0,0,1,2,2Zm10,0H15a2,2,0,0,1,2-2Zm0-4a4,4,0,0,0-4,4H11a4,4,0,0,0-4-4V8H17Zm4-6H19V7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v3H3V4H21Zm-9,5a3,3,0,1,0-3-3A3,3,0,0,0,12,15Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,12,11Z"/></svg>',
                ),
                array(
                    'keys' => 'moneybag-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,7H16V6a3,3,0,0,0-3-3H11A3,3,0,0,0,8,6V7H5a3,3,0,0,0-3,3v8a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V10A3,3,0,0,0,19,7ZM10,6a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V7H10ZM4,10A1,1,0,0,1,5,9H6a2,2,0,0,1-2,2Zm1,9a1,1,0,0,1-1-1V17a2,2,0,0,1,2,2Zm15-1a1,1,0,0,1-1,1H18a2,2,0,0,1,2-2Zm0-3a4,4,0,0,0-4,4H8a4,4,0,0,0-4-4V13A4,4,0,0,0,8,9h8a4,4,0,0,0,4,4Zm0-4a2,2,0,0,1-2-2h1a1,1,0,0,1,1,1Zm-8,0a3,3,0,1,0,3,3A3,3,0,0,0,12,11Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,15Z"/></svg>',
                ),
                array(
                    'keys' => 'moneybag',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,11a3,3,0,1,0,3,3A3,3,0,0,0,12,11Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,15Zm7-9H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H5A3,3,0,0,0,2,9V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A3,3,0,0,0,19,6ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10ZM4,9A1,1,0,0,1,5,8H6a2,2,0,0,1-2,2ZM5,20a1,1,0,0,1-1-1V18a2,2,0,0,1,2,2Zm15-1a1,1,0,0,1-1,1H18a2,2,0,0,1,2-2Zm0-3a4,4,0,0,0-4,4H8a4,4,0,0,0-4-4V12A4,4,0,0,0,8,8h8a4,4,0,0,0,4,4Zm0-6a2,2,0,0,1-2-2h1a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'monitor-heart-rate',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,19a1,1,0,0,0,.38-.08,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.12-.16.56.56,0,0,0,.09-.17A.64.64,0,0,0,10,18.2a1.36,1.36,0,0,0,0-.2,1,1,0,0,0-.08-.38.9.9,0,0,0-.54-.54A1,1,0,0,0,8.8,17l-.18.06a.56.56,0,0,0-.17.09,1,1,0,0,0-.16.12,1,1,0,0,0-.21.33A1,1,0,0,0,8,18a1,1,0,0,0,1,1Zm-3.71-.29a1.15,1.15,0,0,0,.33.21A1,1,0,0,0,6,19l.19,0a.6.6,0,0,0,.19-.06.76.76,0,0,0,.18-.09l.15-.12a1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,7,18a1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.56.56,0,0,0-.09-.17,1,1,0,0,0-.12-.16,1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21,1,1,0,0,0-.12.16.56.56,0,0,0-.09.17A.64.64,0,0,0,5,17.8,1.36,1.36,0,0,0,5,18a1,1,0,0,0,.08.38A1.15,1.15,0,0,0,5.29,18.71ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V16H20Zm0-5H4V10H8a1,1,0,0,0,.71-.29L10,8.46l2.8,3.2a1,1,0,0,0,.72.34h0a1,1,0,0,0,.71-.29L15.91,10H20Zm0-6H15.5a1,1,0,0,0-.71.29L13.55,9.54l-2.8-3.2a1,1,0,0,0-1.46,0L7.59,8H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'monitor',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H7.64l-.58,1a2,2,0,0,0,0,2,2,2,0,0,0,1.75,1h6.46A2,2,0,0,0,17,21a2,2,0,0,0,0-2l-.59-1H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM8.77,20,10,18H14l1.2,2ZM20,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V14H20Zm0-3H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'moon-eclipse',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2a10,10,0,0,0-2.14.24l-.12,0a10,10,0,0,0-.1,19.44l.14,0A9.57,9.57,0,0,0,12,22,10,10,0,0,0,12,2ZM10,19.74A8,8,0,0,1,10,4.26a8,8,0,0,1,0,15.48Zm4.53-.16a10,10,0,0,0,0-15.16,8,8,0,0,1,0,15.16Z"/></svg>',
                ),
                array(
                    'keys' => 'moon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>',
                ),
                array(
                    'keys' => 'moonset',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,19H8a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Zm9-4H18.84A8.18,8.18,0,0,0,20,12.05a1,1,0,0,0-.34-.93,1,1,0,0,0-1-.19,6,6,0,0,1-1.92.32,6.06,6.06,0,0,1-6.06-6,6.93,6.93,0,0,1,.1-1,1,1,0,0,0-.35-.92,1,1,0,0,0-1-.18A8.06,8.06,0,0,0,4,10.68,8,8,0,0,0,5.27,15H4a1,1,0,0,0,0,2H20a1,1,0,0,0,0-2Zm-3.72,0H7.83a6,6,0,0,1,.88-9.36,8.06,8.06,0,0,0,8.05,7.61,7,7,0,0,0,.79,0A6.08,6.08,0,0,1,16.28,15ZM16,19H15a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'mountains-sun',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,10a4,4,0,1,0-4-4A4,4,0,0,0,18,10Zm0-6a2,2,0,1,1-2,2A2,2,0,0,1,18,4Zm-1.15,8.47a1,1,0,0,0-1.7,0l-1,1.63L10.86,8.5a1,1,0,0,0-1.72,0l-7,12A1,1,0,0,0,3,22H21a1,1,0,0,0,.85-1.53ZM10.45,20H4.74L10,11l2.94,5-1.25,2Zm2.35,0,1.49-2.37L15,16.57h0L16,14.89,19.2,20Z"/></svg>',
                ),
                array(
                    'keys' => 'mountains',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.85,17.47l-5-8a1,1,0,0,0-1.7,0l-1,1.63L10.86,5.5a1,1,0,0,0-1.72,0l-7,12A1,1,0,0,0,3,19H21a1,1,0,0,0,.85-1.53ZM10.45,17H4.74L10,8l2.93,5Zm2.35,0L15,13.57h0L16,11.89,19.2,17Z"/></svg>',
                ),
                array(
                    'keys' => 'mouse-alt-2',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A7,7,0,0,0,5,9v6a7,7,0,0,0,14,0V9A7,7,0,0,0,12,2Zm5,13A5,5,0,0,1,7,15V9a5,5,0,0,1,4-4.9V12a1,1,0,0,0,2,0V4.1A5,5,0,0,1,17,9Z"/></svg>',
                ),
                array(
                    'keys' => 'mouse-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,6a1,1,0,0,0-1,1V9a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6Zm0-4A7,7,0,0,0,5,9v6a7,7,0,0,0,14,0V9A7,7,0,0,0,12,2Zm5,13A5,5,0,0,1,7,15V9A5,5,0,0,1,17,9Z"/></svg>',
                ),
                array(
                    'keys' => 'mouse',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A7,7,0,0,0,5,9v6a7,7,0,0,0,14,0V9A7,7,0,0,0,12,2ZM7,9a5,5,0,0,1,4-4.9V10H7Zm10,6A5,5,0,0,1,7,15V12H17Zm0-5H13V4.1A5,5,0,0,1,17,9Z"/></svg>',
                ),
                array(
                    'keys' => 'multiply',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'music-note',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.12,2.21A1,1,0,0,0,18.26,2l-8,2A1,1,0,0,0,9.5,5V15.35A3.45,3.45,0,0,0,8,15a3.5,3.5,0,1,0,3.5,3.5V10.78L18.74,9l.07,0L19,8.85l.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.58.58,0,0,0,0-.19.24.24,0,0,0,0-.08V3A1,1,0,0,0,19.12,2.21ZM8,20a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,8,20ZM17.5,7.22l-6,1.5V5.78l6-1.5Z"/></svg>',
                ),
                array(
                    'keys' => 'music-tune-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,7.33a1,1,0,0,0,1-1V5.78l6-1.5V7.22L14.7,8.3a1,1,0,0,0,.24,2l.24,0L20.24,9l.07,0,.19-.09.15-.1a.93.93,0,0,0,.13-.15.78.78,0,0,0,.1-.15.55.55,0,0,0,.06-.18.65.65,0,0,0,0-.19A.24.24,0,0,0,21,8V3a1,1,0,0,0-1.24-1l-8,2A1,1,0,0,0,11,5V6.33A1,1,0,0,0,12,7.33Zm9.71,13-9-9h0l-9-9A1,1,0,0,0,2.29,3.71L11,12.41v2.94A3.45,3.45,0,0,0,9.5,15,3.5,3.5,0,1,0,13,18.5V14.41l7.29,7.3a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM9.5,20A1.5,1.5,0,1,1,11,18.5,1.5,1.5,0,0,1,9.5,20Z"/></svg>',
                ),
                array(
                    'keys' => 'music',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg>',
                ),
                array(
                    'keys' => 'n-a',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6H18a3,3,0,0,0-3,3v8a1,1,0,0,0,2,0V13h3v4a1,1,0,0,0,2,0V9A3,3,0,0,0,19,6Zm1,5H17V9a1,1,0,0,1,1-1h1a1,1,0,0,1,1,1ZM8,6A1,1,0,0,0,7,7v5.76L3.89,6.55A1,1,0,0,0,2,7V17a1,1,0,0,0,2,0V11.24l3.11,6.21A1,1,0,0,0,8,18a.91.91,0,0,0,.23,0A1,1,0,0,0,9,17V7A1,1,0,0,0,8,6Zm4-2a1,1,0,0,0-1,1V19a1,1,0,0,0,2,0V5A1,1,0,0,0,12,4Z"/></svg>',
                ),
                array(
                    'keys' => 'navigator',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.17,9.23l-14-5.78a3,3,0,0,0-4,3.7L3.71,12,2.13,16.85A3,3,0,0,0,2.94,20a3,3,0,0,0,2,.8,3,3,0,0,0,1.15-.23l14.05-5.78a3,3,0,0,0,0-5.54ZM5.36,18.7a1,1,0,0,1-1.06-.19,1,1,0,0,1-.27-1L5.49,13H19.22ZM5.49,11,4,6.53a1,1,0,0,1,.27-1A1,1,0,0,1,5,5.22a1,1,0,0,1,.39.08L19.22,11Z"/></svg>',
                ),
                array(
                    'keys' => 'nerd',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.41,8.65s0,0,0-.06A10,10,0,0,0,2.63,8.53a.85.85,0,0,0-.08.24A9.87,9.87,0,0,0,2,12,10,10,0,1,0,21.41,8.65ZM12,4a8,8,0,0,1,6.92,4h-1.2a3,3,0,0,0-4.62.22A3.17,3.17,0,0,0,12,8a3.17,3.17,0,0,0-1.1.22A3,3,0,0,0,6.28,8H5.08A8,8,0,0,1,12,4Zm4.5,6a1,1,0,1,1-1-1A1,1,0,0,1,16.5,10Zm-7,0a1,1,0,1,1-1-1A1,1,0,0,1,9.5,10ZM12,20a8,8,0,0,1-8-8,8.24,8.24,0,0,1,.26-2H5.5a3,3,0,0,0,6,.18,1,1,0,0,1,1,0,3,3,0,0,0,6-.18h1.24A8.24,8.24,0,0,1,20,12,8,8,0,0,1,12,20Zm2.36-5.77a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54Z"/></svg>',
                ),
                array(
                    'keys' => 'newspaper',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,11H16a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm0,4H16a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM11,9h6a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2ZM21,3H7A1,1,0,0,0,6,4V7H3A1,1,0,0,0,2,8V18a3,3,0,0,0,3,3H18a4,4,0,0,0,4-4V4A1,1,0,0,0,21,3ZM6,18a1,1,0,0,1-2,0V9H6Zm14-1a2,2,0,0,1-2,2H7.82A3,3,0,0,0,8,18V5H20Zm-9-4h1a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm0,4h1a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'ninja',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.44,5.34l-.06-.07a10,10,0,0,0-14.76,0l-.06.07A10,10,0,1,0,22,12,9.93,9.93,0,0,0,19.44,5.34ZM12,4a7.87,7.87,0,0,1,3.86,1H8.14A7.87,7.87,0,0,1,12,4ZM5.76,7H18.24a8,8,0,0,1,1.69,4H4.07A8,8,0,0,1,5.76,7ZM12,20a8,8,0,0,1-7.93-7H19.93A8,8,0,0,1,12,20ZM8,8A1,1,0,1,0,9,9,1,1,0,0,0,8,8Zm6,0a1,1,0,1,0,1,1A1,1,0,0,0,14,8Zm-3,9.93a1,1,0,0,0,.49.13,1,1,0,0,0,.87-.51A3,3,0,0,1,15,16a1,1,0,0,0,0-2,5,5,0,0,0-4.37,2.57A1,1,0,0,0,11,17.93Z"/></svg>',
                ),
                array(
                    'keys' => 'no-entry',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,20H19.76L15.37,4.2A3,3,0,0,0,12.48,2h-1A3,3,0,0,0,8.63,4.2L4.24,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM10.56,4.73a1,1,0,0,1,1-.73h1a1,1,0,0,1,1,.73L14.35,8H9.65ZM9.09,10h5.82L16,14H8ZM6.32,20l1.11-4h9.14l1.11,4Z"/></svg>',
                ),
                array(
                    'keys' => 'notebooks',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,6a1,1,0,0,0-1,1V17a3,3,0,0,1-3,3H7a1,1,0,0,0,0,2H17a5,5,0,0,0,5-5V7A1,1,0,0,0,21,6Zm-3,9V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H15A3,3,0,0,0,18,15ZM10,4h2V8.86l-.36-.3a1,1,0,0,0-1.28,0l-.36.3ZM4,15V5A1,1,0,0,1,5,4H8v7a1,1,0,0,0,1.65.76L11,10.63l1.35,1.13A1,1,0,0,0,13,12a1.06,1.06,0,0,0,.42-.09A1,1,0,0,0,14,11V4h1a1,1,0,0,1,1,1V15a1,1,0,0,1-1,1H5A1,1,0,0,1,4,15Z"/></svg>',
                ),
                array(
                    'keys' => 'notes',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,14H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0-4H10a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-6H17V3a1,1,0,0,0-2,0V4H13V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H4A1,1,0,0,0,3,5V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V5A1,1,0,0,0,20,4ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V6H7V7A1,1,0,0,0,9,7V6h2V7a1,1,0,0,0,2,0V6h2V7a1,1,0,0,0,2,0V6h2Z"/></svg>',
                ),
                array(
                    'keys' => 'object-group',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,10H14V8a1,1,0,0,0-1-1H8A1,1,0,0,0,7,8v5a1,1,0,0,0,1,1h2v2a1,1,0,0,0,1,1h5a1,1,0,0,0,1-1V11A1,1,0,0,0,16,10Zm-6,1v1H9V9h3v1H11A1,1,0,0,0,10,11Zm5,4H12V12h3Zm6,3.28V5.72A2,2,0,1,0,18.28,3H5.72A2,2,0,1,0,3,5.72V18.28A2,2,0,1,0,5.72,21H18.28A2,2,0,1,0,21,18.28Zm-2,0a1.91,1.91,0,0,0-.72.72H5.72A1.91,1.91,0,0,0,5,18.28V5.72A1.91,1.91,0,0,0,5.72,5H18.28a1.91,1.91,0,0,0,.72.72Z"/></svg>',
                ),
                array(
                    'keys' => 'object-ungroup',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,18.28V11.72A2,2,0,1,0,18.28,9H15V5.72A2,2,0,1,0,12.28,3H5.72A2,2,0,1,0,3,5.72v6.56A2,2,0,1,0,5.72,15H9v3.28A2,2,0,1,0,11.72,21h6.56A2,2,0,1,0,21,18.28ZM8,10a2,2,0,0,0,1,1.72V13H5.72A1.91,1.91,0,0,0,5,12.28V5.72A1.91,1.91,0,0,0,5.72,5h6.56a1.91,1.91,0,0,0,.72.72V9H11.72A2,2,0,0,0,8,10Zm5,1v1.28a1.91,1.91,0,0,0-.72.72H11V11.72a1.91,1.91,0,0,0,.72-.72Zm6,7.28a1.91,1.91,0,0,0-.72.72H11.72a1.91,1.91,0,0,0-.72-.72V15h1.28A2,2,0,1,0,15,12.28V11h3.28a1.91,1.91,0,0,0,.72.72Z"/></svg>',
                ),
                array(
                    'keys' => 'octagon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,7.57,16.44,2.29A1.05,1.05,0,0,0,15.73,2H8.27a1.05,1.05,0,0,0-.71.29L2.29,7.57a1,1,0,0,0-.29.7v7.46a1,1,0,0,0,.29.7l5.27,5.28a1.05,1.05,0,0,0,.71.29h7.46a1.05,1.05,0,0,0,.71-.29l5.27-5.28a1,1,0,0,0,.29-.7V8.27A1,1,0,0,0,21.71,7.57ZM20,15.31,15.31,20H8.69L4,15.31V8.69L8.69,4h6.62L20,8.69Z"/></svg>',
                ),
                array(
                    'keys' => 'opera-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.9707,5.00044c-3.64355,0-3.64355,5.12207-3.64355,6.85742,0,1.95313,0,7.14258,3.66015,7.14258,3.6543,0,3.6543-5.16211,3.6543-7.10547C15.6416,7.31977,14.40625,5.00044,11.9707,5.00044Zm.0166,12c-1.10156,0-1.66015-1.73047-1.66015-5.19531,0-2.19141.28515-4.80469,1.64355-4.80469,1.4541,0,1.6709,3.0664,1.6709,4.89453C13.6416,15.28267,13.085,17.00044,11.9873,17.00044Zm.001-16C5.93652,1.00044,1.71,5.48188,1.71,11.89888c0,5.457,3.84668,11.10156,10.28516,11.10156,6.43359,0,10.27832-5.64453,10.27832-11.10156C22.27344,5.48188,18.044,1.00044,11.98828,1.00044Zm.00684,20c-5.18653,0-8.28516-4.62793-8.28516-9.10156,0-5.32227,3.32715-8.89844,8.27832-8.89844,4.95606,0,8.28516,3.57617,8.28516,8.89844C20.27344,16.37251,17.17676,21.00044,11.99512,21.00044Z"/></svg>',
                ),
                array(
                    'keys' => 'opera',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.9963,2c-5.462,0-9.278,3.95814-9.278,9.899,0,5.28991,3.7112,10.101,9.28549,10.101,5.56676,0,9.27787-4.81857,9.27787-10.101C21.28168,5.95814,17.45831,2,11.9963,2Zm0,18.38381c-3.39693,0-3.77107-5.01309-3.77107-8.7093V11.5997c0-3.99549.59858-8.23042,3.74864-8.23042s3.786,4.3621,3.786,8.3576C15.75987,15.42311,15.39318,20.38381,11.9963,20.38381Z"/></svg>',
                ),
                array(
                    'keys' => 'outgoing-call',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.06,1.06,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1ZM21.86,2.68a1,1,0,0,0-.54-.54,1,1,0,0,0-.38-.08h-4a1,1,0,1,0,0,2h1.58l-3.29,3.3a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l3.3-3.29V7.06a1,1,0,0,0,2,0v-4A1,1,0,0,0,21.86,2.68Z"/></svg>',
                ),
                array(
                    'keys' => 'package',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM10,4h4V7.13l-1.45-1a1,1,0,0,0-1.1,0L10,7.13ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H8V9a1,1,0,0,0,.53.88,1,1,0,0,0,1-.05L12,8.2l2.45,1.63A1,1,0,0,0,16,9V4h3a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'padlock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,13a1.49,1.49,0,0,0-1,2.61V17a1,1,0,0,0,2,0V15.61A1.49,1.49,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'paint-tool',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,1H10A3,3,0,0,0,7,4H6A3,3,0,0,0,3,7v3a3,3,0,0,0,3,3h6a1,1,0,0,1,1,1v1a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2h2a2,2,0,0,0,2-2V17a2,2,0,0,0-2-2V14a3,3,0,0,0-3-3H6a1,1,0,0,1-1-1V7A1,1,0,0,1,6,6H7a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V4A3,3,0,0,0,18,1ZM15,17v4H13V17ZM19,6a1,1,0,0,1-1,1H10A1,1,0,0,1,9,6V4a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'palette',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7.42,15.54a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41A1,1,0,0,0,7.42,15.54Zm0-8.49a1,1,0,0,0,0,1.41,1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41A1,1,0,0,0,7.42,7.05Zm4.95,10a1,1,0,1,0,1,1A1,1,0,0,0,12.37,17Zm-6-6a1,1,0,1,0,1,1A1,1,0,0,0,6.37,11Zm6-6a1,1,0,1,0,1,1A1,1,0,0,0,12.37,5Zm3.54,2.05a1,1,0,1,0,1.41,0A1,1,0,0,0,15.91,7.05Zm6.3,0a11,11,0,1,0-7.85,15.74,3.87,3.87,0,0,0,2.5-1.65A4.2,4.2,0,0,0,17.47,18a5.65,5.65,0,0,1-.1-1,5,5,0,0,1,3-4.56,3.84,3.84,0,0,0,2.06-2.25A4,4,0,0,0,22.21,7.08Zm-1.7,2.44a1.9,1.9,0,0,1-1,1.09A7,7,0,0,0,15.37,17a7.3,7.3,0,0,0,.14,1.4,2.16,2.16,0,0,1-.31,1.65,1.79,1.79,0,0,1-1.21.8,8.72,8.72,0,0,1-1.62.15,9,9,0,0,1-9-9.28A9.05,9.05,0,0,1,11.85,3h.51a9,9,0,0,1,8.06,5A2,2,0,0,1,20.51,9.52ZM12.37,11a1,1,0,1,0,1,1A1,1,0,0,0,12.37,11Z"/></svg>',
                ),
                array(
                    'keys' => 'panel-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,10H14V3a1,1,0,0,0-1-1H8A1,1,0,0,0,7,3V8H3A1,1,0,0,0,2,9V21a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1V11A1,1,0,0,0,18,10ZM7,20H4V10H7Zm5,0H9V4h3Zm5,0H14V12h3ZM21,4H20V3a1,1,0,0,0-2,0V4H17a1,1,0,0,0,0,2h1V7a1,1,0,0,0,2,0V6h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'panorama-h-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.46,5.83A1,1,0,0,0,20.7,5l-.11,0A37.49,37.49,0,0,0,3.41,5L3.3,5a1,1,0,0,0-.76.8,35.52,35.52,0,0,0,0,12.34,1,1,0,0,0,.76.8l.11,0A37.62,37.62,0,0,0,12,20a37.62,37.62,0,0,0,8.59-1l.11,0a1,1,0,0,0,.76-.8A35.52,35.52,0,0,0,21.46,5.83ZM19.6,17.17a35.42,35.42,0,0,1-15.2,0,33.2,33.2,0,0,1,0-10.34,35.42,35.42,0,0,1,15.2,0A33.2,33.2,0,0,1,19.6,17.17Z"/></svg>',
                ),
                array(
                    'keys' => 'panorama-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.54,5.16a1,1,0,0,0-1-.07A21.27,21.27,0,0,1,12,6.73,21.27,21.27,0,0,1,3.42,5.09a1,1,0,0,0-1,.07A1,1,0,0,0,2,6V18a1,1,0,0,0,.46.84,1,1,0,0,0,1,.07A21.27,21.27,0,0,1,12,17.27a21.27,21.27,0,0,1,8.58,1.64A1.06,1.06,0,0,0,21,19a1,1,0,0,0,.54-.16A1,1,0,0,0,22,18V6A1,1,0,0,0,21.54,5.16ZM20,16.52a24.77,24.77,0,0,0-8-1.25,24.77,24.77,0,0,0-8,1.25v-9a24.77,24.77,0,0,0,8,1.25,24.77,24.77,0,0,0,8-1.25Z"/></svg>',
                ),
                array(
                    'keys' => 'panorama-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.27,12a21.11,21.11,0,0,1,1.64-8.58,1,1,0,0,0-.07-1A1,1,0,0,0,18,2H6a1,1,0,0,0-.84.46,1,1,0,0,0-.07,1A21.11,21.11,0,0,1,6.73,12a21.11,21.11,0,0,1-1.64,8.58,1,1,0,0,0,.07,1A1,1,0,0,0,6,22H18a1,1,0,0,0,.84-.46,1,1,0,0,0,.07-1A21.11,21.11,0,0,1,17.27,12Zm-.75,8h-9a24.77,24.77,0,0,0,1.25-8A24.77,24.77,0,0,0,7.48,4h9a24.77,24.77,0,0,0-1.25,8A24.77,24.77,0,0,0,16.52,20Z"/></svg>',
                ),
                array(
                    'keys' => 'paperclip',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.08,12.42,11.9,18.61a4.25,4.25,0,0,1-6-6l8-8a2.57,2.57,0,0,1,3.54,0,2.52,2.52,0,0,1,0,3.54l-6.9,6.89A.75.75,0,1,1,9.42,14l5.13-5.12a1,1,0,0,0-1.42-1.42L8,12.6a2.74,2.74,0,0,0,0,3.89,2.82,2.82,0,0,0,3.89,0l6.89-6.9a4.5,4.5,0,0,0-6.36-6.36l-8,8A6.25,6.25,0,0,0,13.31,20l6.19-6.18a1,1,0,1,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'paragraph',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,13.5H3a1,1,0,0,0,0,2H13a1,1,0,0,0,0-2Zm8-5H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'parcel',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7,14H9a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Zm6,2H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM14,4V7.29l-1.51-.84a1,1,0,0,0-1,0L10,7.29V4Zm6,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H8V9a1,1,0,0,0,.5.86,1,1,0,0,0,1,0L12,8.47l2.51,1.4A1,1,0,0,0,15,10a1,1,0,0,0,1-1V4h3a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'parking-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,7H10A1,1,0,0,0,9,8v8a1,1,0,0,0,2,0V14h2a3,3,0,0,0,3-3V10A3,3,0,0,0,13,7Zm1,4a1,1,0,0,1-1,1H11V9h2a1,1,0,0,1,1,1ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'parking-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,6H9A1,1,0,0,0,8,7V17a1,1,0,0,0,2,0V14h2a4,4,0,0,0,0-8Zm0,6H10V8h2a2,2,0,0,1,0,4ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'pathfinder-unite',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,7.54H16.46V3a1,1,0,0,0-1-1H3A1,1,0,0,0,2,3V15.46a1,1,0,0,0,1,1H7.54V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V8.54A1,1,0,0,0,21,7.54ZM20,20H9.54V15.46a1,1,0,0,0-1-1H4V4H14.46V8.54a1,1,0,0,0,1,1H20Z"/></svg>',
                ),
                array(
                    'keys' => 'pathfinder',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4,14.46a1,1,0,0,0-2,0v1a1,1,0,0,0,1,1H4a1,1,0,0,0,0-2ZM8.18,4h2.1a1,1,0,0,0,0-2H8.18a1,1,0,0,0,0,2Zm6.28,0a1,1,0,0,0,2,0V3a1,1,0,0,0-1-1h-1a1,1,0,0,0,0,2ZM4,2H3A1,1,0,0,0,2,3V4A1,1,0,0,0,4,4,1,1,0,0,0,4,2ZM3,11.28a1,1,0,0,0,1-1V8.18a1,1,0,0,0-2,0v2.1A1,1,0,0,0,3,11.28ZM15.82,20h-2.1a1,1,0,1,0,0,2h2.1a1,1,0,0,0,0-2ZM21,7.54H20a1,1,0,0,0,0,2,1,1,0,0,0,2,0v-1A1,1,0,0,0,21,7.54Zm0,5.18a1,1,0,0,0-1,1v2.1a1,1,0,0,0,2,0v-2.1A1,1,0,0,0,21,12.72ZM16.46,7.54a1,1,0,1,0-2,0H8.54a1,1,0,0,0-1,1v5.92a1,1,0,1,0,0,2,1,1,0,0,0,2,0h5.92a1,1,0,0,0,1-1V9.54a1,1,0,1,0,0-2Zm-2,6.92H9.54V9.54h4.92ZM21,19a1,1,0,0,0-1,1,1,1,0,0,0,0,2h1a1,1,0,0,0,1-1V20A1,1,0,0,0,21,19ZM9.54,20a1,1,0,0,0-2,0v1a1,1,0,0,0,1,1h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'pause-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,7A1,1,0,0,0,9,8v8a1,1,0,0,0,2,0V8A1,1,0,0,0,10,7Zm2-5A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM14,7a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V8A1,1,0,0,0,14,7Z"/></svg>',
                ),
                array(
                    'keys' => 'pause',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>',
                ),
                array(
                    'keys' => 'paypal',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.43705,7.10449a3.82273,3.82273,0,0,0-.57281-.5238,4.72529,4.72529,0,0,0-1.15766-3.73987C17.6226,1.61914,15.77494,1,13.2144,1H7.00053A1.89234,1.89234,0,0,0,5.13725,2.5918L2.5474,18.99805A1.53317,1.53317,0,0,0,4.063,20.7832H6.72709l-.082.52051A1.46684,1.46684,0,0,0,8.0933,23h3.23438a1.76121,1.76121,0,0,0,1.751-1.46973l.64063-4.03125.01074-.05468h.29883c4.03223,0,6.55078-1.99317,7.28516-5.7627A5.149,5.149,0,0,0,20.43705,7.10449ZM7.84233,13.7041l-.71448,4.53528-.08631.54382H4.606L7.09721,3H13.2144c1.93554,0,3.31738.4043,3.99218,1.16406a2.96675,2.96675,0,0,1,.60791,2.73334l-.01861.11224c-.01215.07648-.0232.15119-.0434.24622a5.84606,5.84606,0,0,1-2.00512,3.67053,6.67728,6.67728,0,0,1-4.21753,1.183H9.70658A1.87969,1.87969,0,0,0,7.84233,13.7041Zm11.50878-2.40527c-.55078,2.82812-2.24218,4.14551-5.32226,4.14551h-.4834a1.76109,1.76109,0,0,0-1.751,1.47265l-.64941,4.07422L8.71733,21l.47815-3.03387.61114-3.85285h1.7193c.1568,0,.29541-.02356.44812-.02893.35883-.01239.71661-.02618,1.05267-.06787.20526-.02557.39362-.07221.59034-.1087.27252-.05036.54522-.10016.80108-.17127.19037-.053.368-.12121.54907-.18561.23926-.0849.4748-.174.69757-.27868.168-.0791.32807-.16706.48658-.25727a6.77125,6.77125,0,0,0,.61236-.39172c.14228-.1026.28192-.20789.415-.321a6.56392,6.56392,0,0,0,.53693-.51892c.113-.12055.2287-.23755.33331-.36725a7.09,7.09,0,0,0,.48-.69263c.07648-.12219.16126-.23523.23163-.36383a8.33175,8.33175,0,0,0,.52075-1.15326c.00867-.02386.02106-.044.02954-.068.004-.01123.00989-.02057.01386-.03186A4.29855,4.29855,0,0,1,19.35111,11.29883Z"/></svg>',
                ),
                array(
                    'keys' => 'pen',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"/></svg>',
                ),
                array(
                    'keys' => 'pentagon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.59,9.17l-9-6.54a1,1,0,0,0-1.18,0l-9,6.54a1,1,0,0,0-.36,1.12L5.49,20.87a1,1,0,0,0,1,.69H17.56a1,1,0,0,0,1-.69L22,10.29A1,1,0,0,0,21.59,9.17ZM16.84,19.56H7.16l-3-9.2L12,4.68l7.82,5.68Z"/></svg>',
                ),
                array(
                    'keys' => 'percentage',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7.75781,10.75781a3,3,0,1,0-3-3A3.00328,3.00328,0,0,0,7.75781,10.75781Zm0-4a1,1,0,1,1-1,1A1.00067,1.00067,0,0,1,7.75781,6.75781Zm8.48438,6.48438a3,3,0,1,0,3,3A3.00328,3.00328,0,0,0,16.24219,13.24219Zm0,4a1,1,0,1,1,1-1A1.00067,1.00067,0,0,1,16.24219,17.24219ZM19.707,4.293a.99962.99962,0,0,0-1.41406,0l-14,14A.99989.99989,0,1,0,5.707,19.707l14-14A.99962.99962,0,0,0,19.707,4.293Z"/></svg>',
                ),
                array(
                    'keys' => 'phone-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.06,1.06,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z"/></svg>',
                ),
                array(
                    'keys' => 'phone-pause',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1,1,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1ZM19,10a1,1,0,0,0,1-1V5a1,1,0,0,0-2,0V9A1,1,0,0,0,19,10Zm-4,0a1,1,0,0,0,1-1V5a1,1,0,0,0-2,0V9A1,1,0,0,0,15,10Z"/></svg>',
                ),
                array(
                    'keys' => 'phone-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4.91,13.1a1,1,0,0,0,.85.47A1,1,0,0,0,6.61,12,17,17,0,0,1,4.14,5.15a1,1,0,0,1,.24-.81A1,1,0,0,1,5.13,4h3a1,1,0,0,1,1,.8c0,.23.08.44.13.67l0,.13a10.33,10.33,0,0,0,.47,1.54L8.34,7.8a1,1,0,0,0-.52.57,1,1,0,0,0,0,.77c.1.21.2.42.32.64a1,1,0,0,0,1.37.37,1,1,0,0,0,.5-.94L10.58,9a2,2,0,0,0,1.05-2.48,9.3,9.3,0,0,1-.39-1.3l0-.1c0-.2-.08-.4-.11-.58A3,3,0,0,0,8.16,2h-3A3,3,0,0,0,2.88,3a3,3,0,0,0-.72,2.39A19.05,19.05,0,0,0,4.91,13.1Zm14.61-.21-.6-.11-.08,0a9.31,9.31,0,0,1-1.33-.39,2,2,0,0,0-2.47,1l-.21.46a12.39,12.39,0,0,1-1.92-1.37l8.8-8.79a1,1,0,1,0-1.42-1.42l-18,18a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4.59-4.6a19.09,19.09,0,0,0,10.29,4.73,2.69,2.69,0,0,0,.4,0,3,3,0,0,0,2-.75,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.52,12.89Zm.48,6a1,1,0,0,1-.34.75,1,1,0,0,1-.81.24A17.07,17.07,0,0,1,9.71,15.7l1.77-1.77a14.69,14.69,0,0,0,3.38,2.21,1,1,0,0,0,.77,0,1,1,0,0,0,.57-.52l.62-1.41a12,12,0,0,0,1.6.47l.11,0,.69.13a1,1,0,0,1,.78,1Z"/></svg>',
                ),
                array(
                    'keys' => 'phone-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.85,5.56l1.79-1.79a1,1,0,1,0-1.41-1.41L18.44,4.15l-1.8-1.79a1,1,0,0,0-1.41,1.41L17,5.56l-1.79,1.8a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0L18.44,7l1.79,1.79a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.06,1.06,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z"/></svg>',
                ),
                array(
                    'keys' => 'phone-volume',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.41,13c-.22,0-.45-.07-.67-.12a9.86,9.86,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.46a13.17,13.17,0,0,1-2.67-2,13.17,13.17,0,0,1-2-2.67l.46-.21a2,2,0,0,0,1-2.48,10.47,10.47,0,0,1-.39-1.32c-.05-.22-.09-.45-.12-.67a3,3,0,0,0-3-2.49H5a3,3,0,0,0-2.24,1,3,3,0,0,0-.73,2.4,19.07,19.07,0,0,0,5.41,11,19.07,19.07,0,0,0,11,5.41,2.56,2.56,0,0,0,.39,0,3,3,0,0,0,2-.76,3,3,0,0,0,1-2.24v-3A3,3,0,0,0,19.41,13Zm.49,6a1,1,0,0,1-.33.74,1,1,0,0,1-.82.25,17.16,17.16,0,0,1-9.87-4.84A17.16,17.16,0,0,1,4,5.25a1,1,0,0,1,.25-.82A1,1,0,0,1,5,4.1h3a1,1,0,0,1,1,.78c0,.27.09.55.15.82a11,11,0,0,0,.46,1.54l-1.4.66a1,1,0,0,0-.52.56,1,1,0,0,0,0,.76,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.56-.52l.63-1.4a12.41,12.41,0,0,0,1.58.46c.26.06.54.11.81.15a1,1,0,0,1,.78,1ZM14,2c-.23,0-.47,0-.7,0a1,1,0,0,0,.17,2L14,4a6,6,0,0,1,6,6c0,.18,0,.35,0,.53a1,1,0,0,0,.91,1.08h.08a1,1,0,0,0,1-.91c0-.23,0-.47,0-.7A8,8,0,0,0,14,2Zm2,8a1,1,0,0,0,2,0,4,4,0,0,0-4-4,1,1,0,0,0,0,2A2,2,0,0,1,16,10Z"/></svg>',
                ),
                array(
                    'keys' => 'phone',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.44,13c-.22,0-.45-.07-.67-.12a9.44,9.44,0,0,1-1.31-.39,2,2,0,0,0-2.48,1l-.22.45a12.18,12.18,0,0,1-2.66-2,12.18,12.18,0,0,1-2-2.66L10.52,9a2,2,0,0,0,1-2.48,10.33,10.33,0,0,1-.39-1.31c-.05-.22-.09-.45-.12-.68a3,3,0,0,0-3-2.49h-3a3,3,0,0,0-3,3.41A19,19,0,0,0,18.53,21.91l.38,0a3,3,0,0,0,2-.76,3,3,0,0,0,1-2.25v-3A3,3,0,0,0,19.44,13Zm.5,6a1,1,0,0,1-.34.75,1.05,1.05,0,0,1-.82.25A17,17,0,0,1,4.07,5.22a1.09,1.09,0,0,1,.25-.82,1,1,0,0,1,.75-.34h3a1,1,0,0,1,1,.79q.06.41.15.81a11.12,11.12,0,0,0,.46,1.55l-1.4.65a1,1,0,0,0-.49,1.33,14.49,14.49,0,0,0,7,7,1,1,0,0,0,.76,0,1,1,0,0,0,.57-.52l.62-1.4a13.69,13.69,0,0,0,1.58.46q.4.09.81.15a1,1,0,0,1,.79,1Z"/></svg>',
                ),
                array(
                    'keys' => 'picture',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,4a1,1,0,0,0,.71-1.7,1,1,0,0,0-1.42,0,1,1,0,0,0-.21.32A.84.84,0,0,0,19,3a1,1,0,0,0,1,1Zm0,9a1,1,0,0,0-1,1v.39l-1.48-1.48a2.77,2.77,0,0,0-3.93,0l-.7.7-2.48-2.49a2.86,2.86,0,0,0-3.93,0L5,12.6V7A1,1,0,0,1,6,6H16a1,1,0,0,0,0-2H6A3,3,0,0,0,3,7V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V14A1,1,0,0,0,20,13ZM6,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L16.45,20Zm13-1a1,1,0,0,1-.18.53L14.31,15l.7-.7a.78.78,0,0,1,1.1,0L19,17.22ZM20,5a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V6A1,1,0,0,0,20,5Z"/></svg>',
                ),
                array(
                    'keys' => 'pizza-slice',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.51,12.48a1,1,0,1,0,1,1A1,1,0,0,0,8.51,12.48ZM8.51,8a1,1,0,1,0,1,1A1,1,0,0,0,8.51,8ZM12,10a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V11A1,1,0,0,0,12,10Zm8.5-1.43,0,0a3,3,0,0,0-2.3-.29,2.9,2.9,0,0,0-1.09.56L5.51,2.13a1,1,0,0,0-1,0A1,1,0,0,0,4,3V16.17A2.94,2.94,0,0,0,2,19H2a3,3,0,0,0,2.92,3h.58a18.57,18.57,0,0,0,16.11-9.41A3,3,0,0,0,20.51,8.57ZM6,4.73l9.89,5.71A12.57,12.57,0,0,1,6,16Zm13.87,6.88A16.58,16.58,0,0,1,5,20a1,1,0,0,1-1-1,1,1,0,0,1,.3-.72A1,1,0,0,1,5,18h.51a14.5,14.5,0,0,0,12.62-7.37.9.9,0,0,1,.58-.44,1,1,0,0,1,.75.09h0A1,1,0,0,1,19.88,11.61Z"/></svg>',
                ),
                array(
                    'keys' => 'plane-arrival',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.12,16.23a5,5,0,0,0-2.3-3L16.71,12l-.48-5.47a1,1,0,0,0-.49-.78l-3-1.72a1,1,0,0,0-1,0,1,1,0,0,0-.52.84l-.15,3.9-1.75-1L6.46,3.92a1,1,0,0,0-1.78.41L3.81,8.94A3,3,0,0,0,5.2,12.23l14.06,8.11A1,1,0,0,0,20.62,20,4.91,4.91,0,0,0,21.12,16.23ZM19.24,18,6.2,10.5a1,1,0,0,1-.44-1.13l.46-2.44,1.66,2.2a1,1,0,0,0,.3.27l3.35,1.94a1,1,0,0,0,1.5-.83l.16-3.9,1.09.63.48,5.47a1,1,0,0,0,.5.78L17.82,15a2.91,2.91,0,0,1,1.36,1.78A2.74,2.74,0,0,1,19.24,18Z"/></svg>',
                ),
                array(
                    'keys' => 'plane-departure',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,5.08A3.08,3.08,0,0,0,16.74,2.9L13.93,5.71,7.44,3.55a1,1,0,0,0-1,.24L4.06,6.15a1,1,0,0,0,.29,1.61l5.18,2.35-2.6,2.6-1.71-.86A1,1,0,0,0,4.06,12L2.29,13.81a1,1,0,0,0,0,1.41l6.49,6.49a1,1,0,0,0,1.41,0L12,19.94a1,1,0,0,0,.19-1.16l-.86-1.71,2.6-2.6,2.35,5.18a1,1,0,0,0,1.61.29l2.36-2.36a1,1,0,0,0,.24-1l-2.16-6.49L21.1,7.26A3.05,3.05,0,0,0,22,5.08Zm-2.32.77L16.44,9.09a1,1,0,0,0-.24,1l2.16,6.48-.9.9-2.35-5.17a1,1,0,0,0-.73-.57,1,1,0,0,0-.89.28L9.37,16.17a1,1,0,0,0-.19,1.15L10,19l-.56.56L4.41,14.52,5,14l1.71.86a1,1,0,0,0,1.15-.19L12,10.51a1,1,0,0,0-.29-1.62L6.5,6.54l.9-.9L13.88,7.8a1,1,0,0,0,1-.24l3.24-3.24a1.07,1.07,0,0,1,1.53,0,1,1,0,0,1,.32.76A1.06,1.06,0,0,1,19.68,5.85Z"/></svg>',
                ),
                array(
                    'keys' => 'plane-fly',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M23,9.32a1.06,1.06,0,0,0-.1-.76,4.93,4.93,0,0,0-6.75-1.8L14,8,9,5.65a1,1,0,0,0-.92,0l-3,1.73a1,1,0,0,0-.5.84,1,1,0,0,0,.46.87l3.3,2.08-1.74,1-4.78.58a1,1,0,0,0-.53,1.75l3.54,3.06a3,3,0,0,0,3.55.44L22.5,9.93A1,1,0,0,0,23,9.32Zm-15.53,7a1,1,0,0,1-1.2-.18L4.37,14.51l2.73-.33a1,1,0,0,0,.38-.13l3.36-1.93a1,1,0,0,0,.5-.85,1,1,0,0,0-.47-.86L7.57,8.32l1.1-.63,5,2.32a1,1,0,0,0,.92,0l2.56-1.48a3,3,0,0,1,3.36.29Z"/></svg>',
                ),
                array(
                    'keys' => 'plane',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.75,12a1,1,0,0,0-.55-.89L15.08,8.05v-4a3.08,3.08,0,1,0-6.16,0v4L2.8,11.11a1,1,0,0,0-.55.89v3.33a1,1,0,0,0,.43.83,1,1,0,0,0,.92.11l5.32-2V18l-1.82.6a1,1,0,0,0-.68.95V22a1,1,0,0,0,.3.71,1,1,0,0,0,.7.29h9.17a1,1,0,0,0,1-1V19.5a1,1,0,0,0-.68-.95L15.08,18V14.28l5.32,2a1,1,0,0,0,.92-.11,1,1,0,0,0,.43-.83Zm-7.31-.1a1,1,0,0,0-.93.11,1,1,0,0,0-.43.82v5.84a1,1,0,0,0,.69.95l1.81.6V21H8.41v-.78l1.81-.6a1,1,0,0,0,.69-.95V12.83a1,1,0,0,0-.43-.82,1,1,0,0,0-.93-.11l-5.31,2V12.62l6.11-3.06a1,1,0,0,0,.56-.89V4.08a1.08,1.08,0,1,1,2.16,0V8.67a1,1,0,0,0,.56.89l6.11,3.06v1.27Z"/></svg>',
                ),
                array(
                    'keys' => 'play-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,10.27,11,7.38A2,2,0,0,0,8,9.11v5.78a2,2,0,0,0,1,1.73,2,2,0,0,0,2,0l5-2.89a2,2,0,0,0,0-3.46ZM15,12l-5,2.89V9.11L15,12ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'play',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>',
                ),
                array(
                    'keys' => 'plug',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,6H16V3a1,1,0,0,0-2,0V6H10V3A1,1,0,0,0,8,3V6H5A1,1,0,0,0,5,8H6v5a1,1,0,0,0,.29.71L9,16.41V21a1,1,0,0,0,2,0V17h2v4a1,1,0,0,0,2,0V16.41l2.71-2.7A1,1,0,0,0,18,13V8h1a1,1,0,0,0,0-2Zm-3,6.59L13.59,15H10.41L8,12.59V8h8ZM11,13h2a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'plus-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'plus-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,13h2v2a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2H13V9a1,1,0,0,0-2,0v2H9a1,1,0,0,0,0,2ZM21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'podium',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.79,7.13A1,1,0,0,0,19,6.75H8v-.5A2,2,0,0,1,9.46,4.33a1.5,1.5,0,0,0,1,.42h1a1.5,1.5,0,0,0,0-3h-1a1.49,1.49,0,0,0-1.17.57A4,4,0,0,0,6,6.25v.5H5a1,1,0,0,0-.79.38A1,1,0,0,0,4,8l.62,2.49A3,3,0,0,0,7.1,12.71l.78,7H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2h-.88l.78-7a3,3,0,0,0,2.45-2.23L20,8A1,1,0,0,0,19.79,7.13ZM14.1,19.75H9.9l-.78-7h5.76ZM17.41,10a1,1,0,0,1-1,.76H7.56a1,1,0,0,1-1-.76L6.28,8.75H17.72Z"/></svg>',
                ),
                array(
                    'keys' => 'polygon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.87,11.5l-4.5-7.79a1,1,0,0,0-.87-.5h-9a1,1,0,0,0-.87.5L2.13,11.5a1,1,0,0,0,0,1l4.5,7.79a1,1,0,0,0,.87.5h9a1,1,0,0,0,.87-.5l4.5-7.79A1,1,0,0,0,21.87,11.5Zm-6,7.29H8.08L4.15,12,8.08,5.21h7.84L19.85,12Z"/></svg>',
                ),
                array(
                    'keys' => 'post-stamp',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.5,5.5a1,1,0,0,0,1-1v-3a1,1,0,0,0-1-1h-3a1,1,0,0,0-1,1,.5.5,0,0,1-1,0,1,1,0,0,0-1-1h-3a1,1,0,0,0-1,1,.5.5,0,0,1-1,0,1,1,0,0,0-1-1h-3a1,1,0,0,0-1,1,.5.5,0,0,1-1,0,1,1,0,0,0-1-1h-3a1,1,0,0,0-1,1v3a1,1,0,0,0,1,1,.5.5,0,0,1,0,1,1,1,0,0,0-1,1v3a1,1,0,0,0,1,1,.5.5,0,0,1,0,1,1,1,0,0,0-1,1v3a1,1,0,0,0,1,1,.5.5,0,0,1,0,1,1,1,0,0,0-1,1v3a1,1,0,0,0,1,1h3a1,1,0,0,0,1-1,.5.5,0,0,1,1,0,1,1,0,0,0,1,1h3a1,1,0,0,0,1-1,.5.5,0,0,1,1,0,1,1,0,0,0,1,1h3a1,1,0,0,0,1-1,.5.5,0,0,1,1,0,1,1,0,0,0,1,1h3a1,1,0,0,0,1-1v-3a1,1,0,0,0-1-1,.5.5,0,0,1,0-1,1,1,0,0,0,1-1v-3a1,1,0,0,0-1-1,.5.5,0,0,1,0-1,1,1,0,0,0,1-1v-3a1,1,0,0,0-1-1,.5.5,0,0,1,0-1Zm-1-1.79a2.5,2.5,0,0,0,0,4.58V9.71a2.5,2.5,0,0,0,0,4.58v1.42a2.5,2.5,0,0,0,0,4.58V21.5H20.29a2.5,2.5,0,0,0-4.58,0H14.29a2.5,2.5,0,0,0-4.58,0H8.29a2.5,2.5,0,0,0-4.58,0H2.5V20.29a2.5,2.5,0,0,0,0-4.58V14.29a2.5,2.5,0,0,0,0-4.58V8.29a2.5,2.5,0,0,0,0-4.58V2.5H3.71a2.5,2.5,0,0,0,4.58,0H9.71a2.5,2.5,0,0,0,4.58,0h1.42a2.5,2.5,0,0,0,4.58,0H21.5ZM12,5a7,7,0,0,0,0,14,6.93,6.93,0,0,0,3.5-.94,1,1,0,1,0-1-1.73A5,5,0,1,1,17,12v.5a.83.83,0,0,1-.83.83.84.84,0,0,1-.84-.83V9.67a1,1,0,0,0-1.78-.6A3.25,3.25,0,0,0,12,8.67a3.33,3.33,0,0,0,0,6.66,3.28,3.28,0,0,0,2.17-.82,2.84,2.84,0,0,0,4.83-2V12A7,7,0,0,0,12,5Zm0,8.33A1.33,1.33,0,1,1,13.33,12,1.32,1.32,0,0,1,12,13.33Z"/></svg>',
                ),
                array(
                    'keys' => 'postcard',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,11h1a1,1,0,0,0,1-1V9a1,1,0,0,0-1-1H17a1,1,0,0,0-1,1v1A1,1,0,0,0,17,11ZM6,12h5a1,1,0,0,0,0-2H6a1,1,0,0,0,0,2ZM22,4H2A1,1,0,0,0,1,5V19a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V5A1,1,0,0,0,22,4ZM21,18H3V6H21ZM6,16h5a1,1,0,0,0,0-2H6a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'pound-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,15H10.82A3,3,0,0,0,11,14V13h2.5a1,1,0,0,0,0-2H11V10a1.95,1.95,0,0,1,3.63-1,1,1,0,0,0,1.74-1A4,4,0,0,0,9,10V11H8a1,1,0,0,0,0,2H9v1a1,1,0,0,1-1,1,1,1,0,0,0,0,2h8a1,1,0,0,0,0-2ZM12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>',
                ),
                array(
                    'keys' => 'pound',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,20H8a4.92,4.92,0,0,0,1-3V14h6a1,1,0,0,0,0-2H9V8.89a4.89,4.89,0,0,1,9.13-2.44,1,1,0,0,0,1.37.36,1,1,0,0,0,.37-1.36A6.9,6.9,0,0,0,7,8.89V12H4a1,1,0,0,0,0,2H7v3a3,3,0,0,1-3,3,1,1,0,0,0,0,2H20a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'power',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.21,6.21l.79-.8V10a1,1,0,0,0,2,0V5.41l.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2.5,2.5a1,1,0,0,0,1.42,1.42ZM18,7.56A1,1,0,1,0,16.56,9,6.45,6.45,0,1,1,7.44,9,1,1,0,1,0,6,7.56a8.46,8.46,0,1,0,12,0Z"/></svg>',
                ),
                array(
                    'keys' => 'prescription-bottle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,2H5A2,2,0,0,0,3,4V6A2,2,0,0,0,5,8V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8a2,2,0,0,0,2-2V4A2,2,0,0,0,19,2ZM17,16H11V12h6Zm0-6H10a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h7v1a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17ZM5,6V4H19V6Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.29,11.71a1,1,0,0,0,1.42,0l4-4a1,1,0,1,0-1.42-1.42L11,9.59,9.71,8.29A1,1,0,0,0,8.29,9.71ZM21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-edit',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.41,13h2.42a1,1,0,0,0,.71-.29l3.58-3.58a1,1,0,0,0,0-1.41L13.7,5.32a1,1,0,0,0-1.41,0L8.71,8.9a1,1,0,0,0-.3.7V12A1,1,0,0,0,9.41,13Zm1-3L13,7.44l1,1L11.42,11h-1ZM21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-line',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14H20V3a1,1,0,0,0-1-1H5A1,1,0,0,0,4,3V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18ZM9,12a1,1,0,0,0,.83-.45l1.33-2,1.13,1.14a1,1,0,0,0,.81.29,1,1,0,0,0,.73-.45l2-3a1,1,0,0,0-1.66-1.1l-1.33,2L11.71,7.29A1,1,0,0,0,10.9,7a1,1,0,0,0-.73.45l-2,3a1,1,0,0,0,.28,1.38A.94.94,0,0,0,9,12Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-lines-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.17,10.55a1,1,0,0,0,.73.45,1,1,0,0,0,.81-.29l1.13-1.14,1.33,2A1,1,0,0,0,15,12a.94.94,0,0,0,.55-.17,1,1,0,0,0,.28-1.38l-2-3A1,1,0,0,0,13.1,7a1,1,0,0,0-.81.29L11.16,8.43l-1.33-2a1,1,0,1,0-1.66,1.1ZM21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,10h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Zm11,4H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-play',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18ZM9.61,12.26a1.73,1.73,0,0,0,1.76,0l3-1.74a1.76,1.76,0,0,0,0-3l-3-1.74a1.73,1.73,0,0,0-1.76,0,1.71,1.71,0,0,0-.87,1.52v3.48A1.71,1.71,0,0,0,9.61,12.26Zm1.13-4.58L13,9l-2.28,1.32Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Zm-8-4h1v1a1,1,0,0,0,2,0V10h1a1,1,0,0,0,0-2H13V7a1,1,0,0,0-2,0V8H10a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.29,11.71a1,1,0,0,0,1.42,0L12,10.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,9l1.3-1.29a1,1,0,1,0-1.42-1.42L12,7.59l-1.29-1.3A1,1,0,0,0,9.29,7.71L10.59,9l-1.3,1.29A1,1,0,0,0,9.29,11.71ZM21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'presentation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,14H20V4h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,4H4V14H3a1,1,0,0,0,0,2h8v1.15l-4.55,3A1,1,0,0,0,7,22a.94.94,0,0,0,.55-.17L11,19.55V21a1,1,0,0,0,2,0V19.55l3.45,2.28A.94.94,0,0,0,17,22a1,1,0,0,0,.55-1.83l-4.55-3V16h8a1,1,0,0,0,0-2Zm-3,0H6V4H18Z"/></svg>',
                ),
                array(
                    'keys' => 'previous',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.41,12l3.3-3.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0,0,1.42l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM8,7A1,1,0,0,0,7,8v8a1,1,0,0,0,2,0V8A1,1,0,0,0,8,7Z"/></svg>',
                ),
                array(
                    'keys' => 'pricetag-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,6A1,1,0,1,0,8,7,1,1,0,0,0,7,6Zm14.71,5.78L12.23,2.32A1,1,0,0,0,11.5,2h-6a1,1,0,0,0-.71.29L2.29,4.78A1,1,0,0,0,2,5.49v6a1.05,1.05,0,0,0,.29.71l9.49,9.5a1.05,1.05,0,0,0,.71.29,1,1,0,0,0,.71-.29l8.51-8.51a1,1,0,0,0,.29-.71A1.05,1.05,0,0,0,21.71,11.78Zm-9.22,7.81L4,11.09V5.9L5.9,4h5.18l8.5,8.49Z"/></svg>',
                ),
                array(
                    'keys' => 'print-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7,10a1,1,0,1,0,1,1A1,1,0,0,0,7,10ZM3.71,2.29A1,1,0,0,0,2.29,3.71L4.62,6A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3H6v3a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V19.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM6,15v1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8H6.59l6,6H7A1,1,0,0,0,6,15Zm10,5H8V16h6.59L16,17.41ZM19,6H18V3a1,1,0,0,0-1-1H8.66a1,1,0,0,0,0,2H16V6H12.66a1,1,0,0,0,0,2H19a1,1,0,0,1,1,1v6a.37.37,0,0,1,0,.11,1,1,0,0,0,.78,1.18l.2,0a1,1,0,0,0,1-.8A2.84,2.84,0,0,0,22,15V9A3,3,0,0,0,19,6Z"/></svg>',
                ),
                array(
                    'keys' => 'print',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,10a1,1,0,1,0,1,1A1,1,0,0,0,7,10ZM19,6H18V3a1,1,0,0,0-1-1H7A1,1,0,0,0,6,3V6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3H6v3a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V18h1a3,3,0,0,0,3-3V9A3,3,0,0,0,19,6ZM8,4h8V6H8Zm8,16H8V16h8Zm4-5a1,1,0,0,1-1,1H18V15a1,1,0,0,0-1-1H7a1,1,0,0,0-1,1v1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'process',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6.9917,14.502a.99974.99974,0,0,0-1,1v1.78229a7.97243,7.97243,0,0,1-2-5.28229,7.29085,7.29085,0,0,1,.05273-.87988.99992.99992,0,1,0-1.98535-.24023A9.17334,9.17334,0,0,0,1.9917,12.002a9.96434,9.96434,0,0,0,2.41687,6.5H2.9917a1,1,0,1,0,0,2h4a.98173.98173,0,0,0,.79413-.42181c.01166-.01538.02655-.0268.03741-.043.00666-.00995.00684-.02173.01306-.03186a.96576.96576,0,0,0,.106-.2583.95234.95234,0,0,0,.03143-.15589c.00287-.03088.018-.05749.018-.08911v-4A.99974.99974,0,0,0,6.9917,14.502Zm1.5-8.5H6.70923a7.9737,7.9737,0,0,1,5.28247-2,7.07475,7.07475,0,0,1,.87939.05274,1.00046,1.00046,0,0,0,.24121-1.98633A9.22717,9.22717,0,0,0,11.9917,2.002a9.96421,9.96421,0,0,0-6.5,2.41669V3.002a1,1,0,0,0-2,0v4a.95355.95355,0,0,0,.03931.19471l.00024.00122a.96893.96893,0,0,0,.14117.345l.01142.0169a.97291.97291,0,0,0,.2445.24634c.01093.008.01636.02026.02771.02789.01429.00946.03046.01246.04505.02112a.95817.95817,0,0,0,.17932.084.98784.98784,0,0,0,.26184.05285c.01733.00092.03192.01.04944.01h4a1,1,0,0,0,0-2ZM20.45215,16.80609a.96745.96745,0,0,0-.14124-.34509l-.01129-.01679a.97315.97315,0,0,0-.24469-.24646c-.01092-.00793-.01629-.02026-.02759-.02783-.0108-.00714-.02362-.00738-.0346-.0141a1.15354,1.15354,0,0,0-.40973-.13543c-.03162-.003-.0589-.01844-.09131-.01844h-4a1,1,0,0,0,0,2h1.78241a7.97338,7.97338,0,0,1-5.28241,2,7.07446,7.07446,0,0,1-.8794-.05371,1.00046,1.00046,0,0,0-.24121,1.98633,9.36538,9.36538,0,0,0,1.12061.06738,9.96425,9.96425,0,0,0,6.5-2.41668V21.002a1,1,0,0,0,2,0v-4a.95345.95345,0,0,0-.03931-.1947ZM20.9917,5.502a1,1,0,0,0,0-2h-4a.9519.9519,0,0,0-.19183.0387l-.00666.00134a.96837.96837,0,0,0-.3407.13953l-.01959.01324a.974.974,0,0,0-.2453.24378c-.00787.0108-.02.01611-.02746.02728-.00714.01074-.00739.02344-.0141.03436a1.14563,1.14563,0,0,0-.13636.41266c-.00286.03089-.018.0575-.018.08911v4a1,1,0,1,0,2,0V6.71912a7.97527,7.97527,0,0,1,2,5.28283,7.289,7.289,0,0,1-.05274.87989,1.00106,1.00106,0,0,0,.87208,1.11328,1.02916,1.02916,0,0,0,.12207.00683.99971.99971,0,0,0,.99121-.87988A9.17363,9.17363,0,0,0,21.9917,12.002a9.96411,9.96411,0,0,0-2.417-6.5Z"/></svg>',
                ),
                array(
                    'keys' => 'processor',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,9H10a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V10A1,1,0,0,0,14,9Zm-1,4H11V11h2Zm8,0a1,1,0,0,0,0-2H19V9h2a1,1,0,0,0,0-2H18.82A3,3,0,0,0,17,5.18V3a1,1,0,0,0-2,0V5H13V3a1,1,0,0,0-2,0V5H9V3A1,1,0,0,0,7,3V5.18A3,3,0,0,0,5.18,7H3A1,1,0,0,0,3,9H5v2H3a1,1,0,0,0,0,2H5v2H3a1,1,0,0,0,0,2H5.18A3,3,0,0,0,7,18.82V21a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V18.82A3,3,0,0,0,18.82,17H21a1,1,0,0,0,0-2H19V13Zm-4,3a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8A1,1,0,0,1,8,7h8a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'programming-language',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,3l-3,15.1l-9.1,3l-7.9-3L2.8,14h3.4l-0.4,1.7l4.8,1.8l5.5-1.8l0.8-3.8H3.2l0.7-3.4h13.6L18,6.4H4.3L5,3H22z"/></svg>',
                ),
                array(
                    'keys' => 'pump',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>',
                ),
                array(
                    'keys' => 'puzzle-piece',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,22H5a3,3,0,0,1-3-3V9A3,3,0,0,1,5,6H6a4,4,0,0,1,7.3-2.18A3.86,3.86,0,0,1,14,6h3a1,1,0,0,1,1,1v3a4,4,0,0,1,2.18,7.3A3.86,3.86,0,0,1,18,18h0v3A1,1,0,0,1,17,22ZM5,8A1,1,0,0,0,4,9V19a1,1,0,0,0,1,1H16V16.82a1,1,0,0,1,.42-.82,1,1,0,0,1,.91-.13,1.77,1.77,0,0,0,1.74-.23A2,2,0,0,0,20,14.27a2,2,0,0,0-.48-1.59,1.89,1.89,0,0,0-2.17-.55,1,1,0,0,1-.91-.13,1,1,0,0,1-.42-.82V8H12.82a1,1,0,0,1-1-1.33,1.77,1.77,0,0,0-.23-1.74,1.94,1.94,0,0,0-3-.43A2,2,0,0,0,8,6a1.89,1.89,0,0,0,.13.67A1,1,0,0,1,7.18,8Z"/></svg>',
                ),
                array(
                    'keys' => 'qrcode-scan',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,21H4a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v4a3,3,0,0,0,3,3H8a1,1,0,0,0,0-2Zm14-6a1,1,0,0,0-1,1v4a1,1,0,0,1-1,1H16a1,1,0,0,0,0,2h4a3,3,0,0,0,3-3V16A1,1,0,0,0,22,15ZM20,1H16a1,1,0,0,0,0,2h4a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V4A3,3,0,0,0,20,1ZM2,9A1,1,0,0,0,3,8V4A1,1,0,0,1,4,3H8A1,1,0,0,0,8,1H4A3,3,0,0,0,1,4V8A1,1,0,0,0,2,9Zm8-4H6A1,1,0,0,0,5,6v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V6A1,1,0,0,0,10,5ZM9,9H7V7H9Zm5,2h4a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H14a1,1,0,0,0-1,1v4A1,1,0,0,0,14,11Zm1-4h2V9H15Zm-5,6H6a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,17H7V15H9Zm5-1a1,1,0,0,0,1-1,1,1,0,0,0,0-2H14a1,1,0,0,0-1,1v1A1,1,0,0,0,14,16Zm4-3a1,1,0,0,0-1,1v3a1,1,0,0,0,0,2h1a1,1,0,0,0,1-1V14A1,1,0,0,0,18,13Zm-4,4a1,1,0,1,0,1,1A1,1,0,0,0,14,17Z"/></svg>',
                ),
                array(
                    'keys' => 'question-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,15.29a1.58,1.58,0,0,0-.12.15.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2.84.84,0,0,0,.08.38.9.9,0,0,0,.54.54.94.94,0,0,0,.76,0,.9.9,0,0,0,.54-.54A1,1,0,0,0,13,16a1,1,0,0,0-.29-.71A1,1,0,0,0,11.29,15.29ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM12,7A3,3,0,0,0,9.4,8.5a1,1,0,1,0,1.73,1A1,1,0,0,1,12,9a1,1,0,0,1,0,2,1,1,0,0,0-1,1v1a1,1,0,0,0,2,0v-.18A3,3,0,0,0,12,7Z"/></svg>',
                ),
                array(
                    'keys' => 'question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.33252,9.5A3.5001,3.5001,0,0,0,8.80127,7.75a1.00016,1.00016,0,0,0,1.73242,1A1.50266,1.50266,0,0,1,11.83252,8a1.5,1.5,0,1,1,0,3h-.00244a.94984.94984,0,0,0-.18927.0387,1.03181,1.03181,0,0,0-.19861.04065.98275.98275,0,0,0-.15552.10485,1.00813,1.00813,0,0,0-.162.10975,1.00464,1.00464,0,0,0-.11706.1737.97789.97789,0,0,0-.09668.14417,1.02252,1.02252,0,0,0-.04285.21191A.94847.94847,0,0,0,10.83252,12v1l.00232.01135.0011.49109a1.00016,1.00016,0,0,0,1,.99756h.00244a1.00006,1.00006,0,0,0,.99756-1.00244l-.00153-.66138A3.49363,3.49363,0,0,0,15.33252,9.5Zm-4.20264,6.79A1,1,0,0,0,11.82959,18a1.036,1.036,0,0,0,.71045-.29,1.01517,1.01517,0,0,0,0-1.41992A1.03425,1.03425,0,0,0,11.12988,16.29Z"/></svg>',
                ),
                array(
                    'keys' => 'rainbow',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,12a1,1,0,0,0,0,2,5,5,0,0,1,5,5,1,1,0,0,0,2,0A7,7,0,0,0,5,12ZM5,4A1,1,0,0,0,5,6,13,13,0,0,1,18,19a1,1,0,0,0,2,0A15,15,0,0,0,5,4ZM5,8a1,1,0,0,0,0,2,9,9,0,0,1,9,9,1,1,0,0,0,2,0A11,11,0,0,0,5,8Z"/></svg>',
                ),
                array(
                    'keys' => 'raindrops-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,7.75C9,5,6.42,3.24,6.31,3.17a1,1,0,0,0-1.12,0C5.08,3.25,2.5,5,2.5,7.75a3.25,3.25,0,0,0,6.5,0ZM5.75,9A1.25,1.25,0,0,1,4.5,7.75,3.66,3.66,0,0,1,5.75,5.3,3.61,3.61,0,0,1,7,7.75,1.25,1.25,0,0,1,5.75,9Zm6.06,1.17a1,1,0,0,0-1.12,0c-.17.12-4.19,2.9-4.19,7.08a4.75,4.75,0,0,0,9.5,0C16,13,12,10.28,11.81,10.17ZM11.25,20A2.75,2.75,0,0,1,8.5,17.25c0-2.31,1.81-4.17,2.76-5,.94.79,2.74,2.63,2.74,5A2.75,2.75,0,0,1,11.25,20ZM18.06,2.17a1,1,0,0,0-1.12,0C16.8,2.27,13.5,4.55,13.5,8a4,4,0,0,0,8,0C21.5,4.51,18.2,2.26,18.06,2.17ZM17.5,10a2,2,0,0,1-2-2,5.44,5.44,0,0,1,2-3.72A5.39,5.39,0,0,1,19.5,8,2,2,0,0,1,17.5,10Z"/></svg>',
                ),
                array(
                    'keys' => 'raindrops',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.5,8c0-3.49-3.3-5.74-3.44-5.83a1,1,0,0,0-1.12,0C5.8,2.27,2.5,4.55,2.5,8a4,4,0,0,0,8,0Zm-4,2a2,2,0,0,1-2-2,5.44,5.44,0,0,1,2-3.72A5.39,5.39,0,0,1,8.5,8,2,2,0,0,1,6.5,10ZM18.06,2.17a1,1,0,0,0-1.12,0C16.8,2.27,13.5,4.55,13.5,8a4,4,0,0,0,8,0C21.5,4.51,18.2,2.26,18.06,2.17ZM17.5,10a2,2,0,0,1-2-2,5.44,5.44,0,0,1,2-3.72A5.39,5.39,0,0,1,19.5,8,2,2,0,0,1,17.5,10Zm-4.44,2.17a1,1,0,0,0-1.12,0c-.14.1-3.44,2.38-3.44,5.83a4,4,0,0,0,8,0C16.5,14.51,13.2,12.26,13.06,12.17ZM12.5,20a2,2,0,0,1-2-2,5.44,5.44,0,0,1,2-3.72,5.39,5.39,0,0,1,2,3.72A2,2,0,0,1,12.5,20Z"/></svg>',
                ),
                array(
                    'keys' => 'react',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.103,10.43793a1.78593,1.78593,0,1,0,2.43957.65362A1.786,1.786,0,0,0,11.103,10.43793Zm8.0047,1.93768q-.17587-.201-.37116-.40308.13641-.14337.264-.28649c1.60583-1.80427,2.28357-3.61371,1.65558-4.70154-.60217-1.043-2.39343-1.35382-4.63593-.91779q-.33132.06482-.659.14624-.06272-.21624-.13343-.43C14.467,3.49042,13.2381,1.99921,11.98206,2,10.77765,2.00055,9.61359,3.39709,8.871,5.5575q-.10959.31969-.20276.64471-.21908-.05375-.44-.0993c-2.366-.48578-4.27167-.16584-4.89844.9226-.601,1.04376.02753,2.74982,1.52851,4.47211q.22329.25562.45922.49976c-.18542.191-.361.38189-.52465.57171-1.4646,1.698-2.05719,3.37616-1.45716,4.41541.61969,1.07348,2.49854,1.42437,4.7854.97436q.278-.05511.55292-.124.10071.35156.22095.697c.73932,2.11706,1.89685,3.46863,3.097,3.4682,1.23944-.00073,2.48194-1.45288,3.23474-3.65875.05945-.17432.11573-.35535.16907-.54175q.35514.08835.71485.1568c2.20336.41687,3.95251.089,4.55145-.951C21.28058,15.93109,20.64288,14.12933,19.10767,12.37561ZM4.07019,7.45184c.38586-.67,1.94324-.93139,3.98608-.512q.19584.04027.39838.09a20.464,20.464,0,0,0-.42126,2.67767,20.88659,20.88659,0,0,0-2.10389,1.6936q-.21945-.22695-.42718-.4649l.00006.00006C4.21631,9.46057,3.708,8.08081,4.07019,7.45184Zm3.88666,5.72809c-.51056-.3866-.98505-.78265-1.41571-1.181.43036-.39587.90515-.79059,1.41467-1.17615q-.02746.58915-.02722,1.1792Q7.929,12.59117,7.95685,13.17993Zm-.00061,3.94061a7.23675,7.23675,0,0,1-2.63971.09314,1.766,1.766,0,0,1-1.241-.65631c-.36407-.63067.11176-1.978,1.36432-3.43023q.23621-.273.48791-.53174a20.49026,20.49026,0,0,0,2.10712,1.70007,20.80226,20.80226,0,0,0,.42621,2.712Q8.21011,17.07023,7.95624,17.12054Zm7.10113-8.03936q-.50309-.317-1.01861-.61365-.5073-.292-1.0268-.56207c.593-.24933,1.17591-.46228,1.73865-.63581A18.21775,18.21775,0,0,1,15.05737,9.08118ZM9.679,5.83521c.63623-1.85114,1.57763-2.98053,2.30352-2.98084.77308-.00037,1.77753,1.21826,2.43433,3.19763q.064.19355.121.38928a20.478,20.478,0,0,0-2.52716.9712,20.06145,20.06145,0,0,0-2.519-.98194Q9.578,6.13062,9.679,5.83521ZM9.27863,7.259a18.30717,18.30717,0,0,1,1.72967.642Q9.95746,8.4433,8.96094,9.0824C9.0412,8.4444,9.148,7.83313,9.27863,7.259ZM8.9624,14.91968q.49695.31813,1.00843.61273.52174.30039,1.05737.57556a18.19577,18.19577,0,0,1-1.74445.66492C9.15161,16.1908,9.04364,15.56879,8.9624,14.91968Zm5.45569,3.14551A7.23556,7.23556,0,0,1,13.18,20.39844l-.00006.00006a1.76585,1.76585,0,0,1-1.18841.747c-.72821.00042-1.65766-1.085-2.28992-2.89545q-.11169-.32108-.20551-.648a20.10863,20.10863,0,0,0,2.52918-1.0097,20.79976,20.79976,0,0,0,2.54736.97851Q14.50141,17.81983,14.41809,18.06519Zm.36224-1.32422c-.56921-.176-1.16058-.39252-1.76214-.64551q.50867-.2677,1.02472-.56543.52955-.30579,1.0321-.62689A18.1524,18.1524,0,0,1,14.78033,16.741Zm.44629-4.74268q.00111.91095-.05688,1.82044c-.49268.33343-1.01282.659-1.554.97143-.53894.31116-1.07293.59711-1.59674.8559q-.82682-.39624-1.62176-.854-.79047-.455-1.54468-.969-.06894-.90921-.06946-1.82172l.00012.00019q-.00063-.91187.06794-1.82184c.49255-.33637,1.00891-.66168,1.54278-.96991.53632-.30969,1.077-.59442,1.61469-.85248q.81664.39688,1.60382.85065.78992.454,1.549.95868.06519.91443.06524,1.83166Zm.95673-5.09283c1.92133-.37372,3.37-.12232,3.73291.50622.3866.66962-.16748,2.1485-1.55383,3.70636l-.00006.00006q-.1149.12891-.23841.25891A20.06118,20.06118,0,0,0,15.98,9.68915a20.04054,20.04054,0,0,0-.40546-2.64893Q15.88486,6.96387,16.18335,6.90546Zm-.12988,3.8847A18.16447,18.16447,0,0,1,17.51483,11.978a18.11912,18.11912,0,0,1-1.45672,1.20831q.02325-.59391.02288-1.18842Q16.08072,11.39389,16.05347,10.79016Zm3.8681,5.78876c-.36346.63116-1.76788.89435-3.65222.53784q-.32391-.06115-.66474-.14557a20.069,20.069,0,0,0,.38746-2.68176,19.93914,19.93914,0,0,0,2.13708-1.71588q.17643.18329.33563.36487v-.00007a7.23437,7.23437,0,0,1,1.40308,2.23792A1.76563,1.76563,0,0,1,19.92157,16.57892Z"/></svg>',
                ),
                array(
                    'keys' => 'receipt-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,8h6a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2ZM8,12h8a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm0,4h8a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2ZM20,2H4A1,1,0,0,0,3,3V21a1,1,0,0,0,1.6.8l2.07-1.55L8.73,21.8a1,1,0,0,0,1.2,0L12,20.25l2.07,1.55a1,1,0,0,0,1.2,0l2.06-1.55L19.4,21.8a1,1,0,0,0,1.05.09A1,1,0,0,0,21,21V3A1,1,0,0,0,20,2ZM19,19l-1.07-.8a1,1,0,0,0-1.2,0l-2.06,1.55L12.6,18.2a1,1,0,0,0-1.2,0L9.33,19.75,7.27,18.2a1,1,0,0,0-1.2,0L5,19V4H19Z"/></svg>',
                ),
                array(
                    'keys' => 'receipt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,12H7a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2ZM8,10h4a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm1,6H7a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2Zm12-4H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-6.44-2.83a.76.76,0,0,0-.18-.09.6.6,0,0,0-.19-.06,1,1,0,0,0-.9.27A1.05,1.05,0,0,0,12,17a1,1,0,0,0,.07.38,1.19,1.19,0,0,0,.22.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21A1,1,0,0,0,14,17a1.05,1.05,0,0,0-.29-.71A1.58,1.58,0,0,0,13.56,16.17Zm.14-3.88a1,1,0,0,0-1.62.33A1,1,0,0,0,13,14a1,1,0,0,0,1-1,1,1,0,0,0-.08-.38A.91.91,0,0,0,13.7,12.29Z"/></svg>',
                ),
                array(
                    'keys' => 'record-audio',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM12,6a6,6,0,1,0,6,6A6,6,0,0,0,12,6Zm0,10a4,4,0,1,1,4-4A4,4,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'reddit-alien-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.41016,16.86719A3.375,3.375,0,0,1,12.042,17.5a3.36829,3.36829,0,0,1-2.36523-.63184,1.00059,1.00059,0,0,0-1.416,1.41407A5.11054,5.11054,0,0,0,12.042,19.5a5.12,5.12,0,0,0,3.78223-1.2168,1.00058,1.00058,0,1,0-1.41406-1.416ZM9.2005,15.00165a1,1,0,1,0-1.0003-.9997A1.00079,1.00079,0,0,0,9.2005,15.00165Zm6-2a1,1,0,1,0,.9997,1.0003A1.00138,1.00138,0,0,0,15.2005,13.00165ZM23,11.78027a3.77157,3.77157,0,0,0-6.794-2.26471,16.50461,16.50461,0,0,0-3.05005-.47851l.85578-5.705,2.08752.70984a2.99694,2.99694,0,0,0,5.99353-.06433V3.95508a3.02886,3.02886,0,0,0-3-2.95508,2.97689,2.97689,0,0,0-2.33209,1.155L13.52246,1.05371a.999.999,0,0,0-1.31152.79785L11.13446,9.027A16.66426,16.66426,0,0,0,7.794,9.51556a3.76753,3.76753,0,0,0-6.22492,4.23487A4.86206,4.86206,0,0,0,1,16c0,3.9248,4.832,7,11,7s11-3.0752,11-7a4.86217,4.86217,0,0,0-.56866-2.2489A3.78344,3.78344,0,0,0,23,11.78027ZM19.09277,3a1,1,0,1,1-1,1A1.01672,1.01672,0,0,1,19.09277,3ZM4.78027,10a1.75976,1.75976,0,0,1,.88172.24951A9.97889,9.97889,0,0,0,3.0141,11.9234c-.004-.04785-.0141-.095-.0141-.14313A1.78255,1.78255,0,0,1,4.78027,10ZM12,21c-4.87891,0-9-2.29-9-5s4.12109-5,9-5,9,2.29,9,5S16.87891,21,12,21Zm8.9859-9.07654A9.97805,9.97805,0,0,0,18.338,10.24951,1.75993,1.75993,0,0,1,19.21973,10,1.78255,1.78255,0,0,1,21,11.78027C21,11.82837,20.98993,11.87561,20.9859,11.92346Z"/></svg>',
                ),
                array(
                    'keys' => 'redo',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z"/></svg>',
                ),
                array(
                    'keys' => 'refresh',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.91,15.51H15.38a1,1,0,0,0,0,2h2.4A8,8,0,0,1,4,12a1,1,0,0,0-2,0,10,10,0,0,0,16.88,7.23V21a1,1,0,0,0,2,0V16.5A1,1,0,0,0,19.91,15.51ZM15,12a3,3,0,1,0-3,3A3,3,0,0,0,15,12Zm-4,0a1,1,0,1,1,1,1A1,1,0,0,1,11,12ZM12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1h4.5a1,1,0,0,0,0-2H6.22A8,8,0,0,1,20,12a1,1,0,0,0,2,0A10,10,0,0,0,12,2Z"/></svg>',
                ),
                array(
                    'keys' => 'registered',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm.5-13h-3a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V14h2a1,1,0,0,1,1,1v1a1,1,0,0,0,2,0V15a3,3,0,0,0-.78-2,3,3,0,0,0,.78-2V10A3,3,0,0,0,12.5,7Zm1,4a1,1,0,0,1-1,1h-2V9h2a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'repeat',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5.5,17.5H4V6.5h7.8L11,7.29a1,1,0,0,0,1.41,1.42l2.5-2.5a1,1,0,0,0,0-1.42l-2.5-2.5a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l.79.79H3a1,1,0,0,0-1,1v13a1,1,0,0,0,1,1H5.5a1,1,0,0,0,0-2ZM21,4.5H18.5a1,1,0,0,0,0,2H20v11H11.63l.79-.79a1,1,0,0,0,0-1.42,1,1,0,0,0-1.41,0l-2.5,2.5a1,1,0,0,0,0,1.42l2.5,2.5a1,1,0,0,0,1.41-1.42l-.79-.79H21a1,1,0,0,0,1-1V5.5A1,1,0,0,0,21,4.5Z"/></svg>',
                ),
                array(
                    'keys' => 'restaurant',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.84,11.63A3,3,0,0,0,19,10.75l2.83-2.83a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L17.55,9.33a1,1,0,0,1-1.42,0h0L19.67,5.8a1,1,0,1,0-1.42-1.42L14.72,7.92a1,1,0,0,1,0-1.41l2.83-2.83a1,1,0,1,0-1.42-1.42L13.3,5.09a3,3,0,0,0,0,4.24h0L12,10.62,3.73,2.32l-.1-.06a.71.71,0,0,0-.17-.11l-.18-.07L3.16,2H3.09l-.2,0a.57.57,0,0,0-.18,0,.7.7,0,0,0-.17.09l-.16.1-.07,0-.06.1a1,1,0,0,0-.11.17,1.07,1.07,0,0,0-.07.19s0,.07,0,.11a11,11,0,0,0,3.11,9.34l2.64,2.63-5.41,5.4a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29L9.9,15.57h0l2.83-2.83h0l2-2A3,3,0,0,0,16.84,11.63ZM9.19,13.45,6.56,10.81A9.06,9.06,0,0,1,4,5.4L10.61,12Zm6.24.57A1,1,0,0,0,14,15.44l6.3,6.3A1,1,0,0,0,21,22a1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'right-indent-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3.64,9.56A1,1,0,1,0,2.36,11.1l1.08.9-1.08.9a1,1,0,0,0-.13,1.41,1,1,0,0,0,1.41.13l2-1.67a1,1,0,0,0,0-1.54ZM9,5A1,1,0,0,0,8,6V18a1,1,0,0,0,2,0V6A1,1,0,0,0,9,5Zm4,2h8a1,1,0,0,0,0-2H13a1,1,0,0,0,0,2Zm8,10H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0-8H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0,4H13a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'right-to-left-text-direction',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.5,17H5.91l1.3-1.29a1,1,0,0,0-1.42-1.42l-3,3a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l3,3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.91,19H20.5a1,1,0,0,0,0-2Zm-9-7v4a1,1,0,0,0,2,0V4h2V14a1,1,0,0,0,2,0V4h1a1,1,0,0,0,0-2h-7a4,4,0,0,0,0,8Zm0-6V8a2,2,0,0,1,0-4Z"/></svg>',
                ),
                array(
                    'keys' => 'robot',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,15a1,1,0,1,0,1,1A1,1,0,0,0,9,15ZM2,14a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V15A1,1,0,0,0,2,14Zm20,0a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V15A1,1,0,0,0,22,14ZM17,7H13V5.72A2,2,0,0,0,14,4a2,2,0,0,0-4,0,2,2,0,0,0,1,1.72V7H7a3,3,0,0,0-3,3v9a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V10A3,3,0,0,0,17,7ZM13.72,9l-.5,2H10.78l-.5-2ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V10A1,1,0,0,1,7,9H8.22L9,12.24A1,1,0,0,0,10,13h4a1,1,0,0,0,1-.76L15.78,9H17a1,1,0,0,1,1,1Zm-3-4a1,1,0,1,0,1,1A1,1,0,0,0,15,15Z"/></svg>',
                ),
                array(
                    'keys' => 'rocket',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.60107,2.062a1.00088,1.00088,0,0,0-.71289-.71289A11.25224,11.25224,0,0,0,10.46924,4.97217L9.35431,6.296l-2.6048-.62848A2.77733,2.77733,0,0,0,3.36279,7.0249L1.1626,10.9248A.99989.99989,0,0,0,1.82422,12.394l3.07275.65869a13.41952,13.41952,0,0,0-.55517,2.43409,1.00031,1.00031,0,0,0,.28466.83642l3.1001,3.1001a.99941.99941,0,0,0,.707.293c.02881,0,.05762-.00147.08692-.00391a12.16892,12.16892,0,0,0,2.49157-.49l.64368,3.00318a1.0003,1.0003,0,0,0,1.46924.66162l3.90527-2.20264a3.03526,3.03526,0,0,0,1.375-3.30371l-.6687-2.759,1.23706-1.13751A11.20387,11.20387,0,0,0,22.60107,2.062ZM3.57227,10.72314,5.12842,7.96338a.82552.82552,0,0,1,1.06982-.37549l1.71741.4162-.65.77179A13.09523,13.09523,0,0,0,5.67633,11.174Zm12.47021,8.22217L13.32666,20.477l-.4295-2.00464a11.33992,11.33992,0,0,0,2.41339-1.61987l.74353-.68366.40344,1.66462A1.041,1.041,0,0,1,16.04248,18.94531ZM17.65674,11.98l-3.68457,3.38623a9.77348,9.77348,0,0,1-5.17041,2.3042l-2.4043-2.4043a10.932,10.932,0,0,1,2.40088-5.206l1.67834-1.99268a.9635.9635,0,0,0,.07813-.09277L11.98975,6.271a9.27757,9.27757,0,0,1,8.80957-3.12012A9.21808,9.21808,0,0,1,17.65674,11.98Zm-.923-6.16376a1.5,1.5,0,1,0,1.5,1.5A1.49992,1.49992,0,0,0,16.7337,5.81622Z"/></svg>',
                ),
                array(
                    'keys' => 'rope-way',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6.5H13V4h4.62a1,1,0,0,0,0-2H6.38a1,1,0,1,0,0,2H11V6.5H5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9.5A3,3,0,0,0,19,6.5ZM11,20H5a1,1,0,0,1-1-1V15.25h7a.5.5,0,0,0,0,.13v4.5A.53.53,0,0,0,11,20Zm9-1a1,1,0,0,1-1,1H13a.53.53,0,0,0,0-.12v-4.5a.5.5,0,0,0,0-.13h7Zm0-5.75H4V9.5a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'rotate-360',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,6C6.3,6,2,8.15,2,11c0,2.45,3.19,4.38,7.71,4.88l-.42.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-2-2a1,1,0,0,0-1.42,1.42l.12.11C6,13.34,4,12,4,11c0-1.22,3.12-3,8-3s8,1.78,8,3c0,.83-1.45,2-4.21,2.6A1,1,0,0,0,15,14.79a1,1,0,0,0,1.19.77C19.84,14.76,22,13.06,22,11,22,8.15,17.7,6,12,6Z"/></svg>',
                ),
                array(
                    'keys' => 'rss-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M2.88,16.88a3,3,0,1,0,4.24,4.24h0a3,3,0,0,0,0-4.24A3.08,3.08,0,0,0,2.88,16.88Zm2.83,2.83h0a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42,1,1,0,0,1,1.42,0A1,1,0,0,1,5.71,19.71ZM5,12a1,1,0,0,0,0,2,5,5,0,0,1,5,5,1,1,0,0,0,2,0A7,7,0,0,0,5,12ZM5,8a1,1,0,0,0,0,2,9,9,0,0,1,9,9,1,1,0,0,0,2,0A11,11,0,0,0,5,8Z"/></svg>',
                ),
                array(
                    'keys' => 'rss-interface',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M3,14a1,1,0,0,0,0,2,3,3,0,0,1,3,3,1,1,0,0,0,2,0A5,5,0,0,0,3,14Zm-.71,4.29a1,1,0,1,0,1.42,0A1,1,0,0,0,2.29,18.29ZM19,4H5A3,3,0,0,0,2,7,1,1,0,0,0,4,7,1,1,0,0,1,5,6H19a1,1,0,0,1,1,1V17a1,1,0,0,1-1,1H15a1,1,0,0,0,0,2h4a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4ZM3,10a1,1,0,0,0,0,2,7,7,0,0,1,7,7,1,1,0,0,0,2,0A9,9,0,0,0,3,10Z"/></svg>',
                ),
                array(
                    'keys' => 'rss',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M2.88,16.88a3,3,0,0,0,0,4.24,3,3,0,0,0,4.24,0,3,3,0,0,0-4.24-4.24Zm2.83,2.83a1,1,0,0,1-1.42-1.42,1,1,0,0,1,1.42,0A1,1,0,0,1,5.71,19.71ZM5,12a1,1,0,0,0,0,2,5,5,0,0,1,5,5,1,1,0,0,0,2,0,7,7,0,0,0-7-7ZM5,8a1,1,0,0,0,0,2,9,9,0,0,1,9,9,1,1,0,0,0,2,0,11.08,11.08,0,0,0-3.22-7.78A11.08,11.08,0,0,0,5,8Zm10.61.39A15.11,15.11,0,0,0,5,4,1,1,0,0,0,5,6,13,13,0,0,1,18,19a1,1,0,0,0,2,0A15.11,15.11,0,0,0,15.61,8.39Z"/></svg>',
                ),
                array(
                    'keys' => 'ruler-combined',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H9a1,1,0,0,0,1-1V10H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,8H18V7a1,1,0,0,0-2,0V8H14V7a1,1,0,0,0-2,0V8H10V7A1,1,0,0,0,8,7V8H7a1,1,0,0,0,0,2H8v2H7a1,1,0,0,0,0,2H8v2H7a1,1,0,0,0,0,2H8v2H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'ruler',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22.61,7.05,17,1.39a1,1,0,0,0-.71-.29,1,1,0,0,0-.7.29L1.39,15.54a1,1,0,0,0,0,1.41l5.66,5.66a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l2.83-2.83h0l8.49-8.49h0l2.83-2.83A1,1,0,0,0,22.61,7.05ZM19.07,9.17l-.71-.71a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l.71.71L16.24,12,14.12,9.88a1,1,0,0,0-1.41,1.41l2.12,2.12-1.42,1.42-.7-.71a1,1,0,1,0-1.42,1.42l.71.7-1.41,1.42L8.46,15.54a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.41l2.12,2.12L7.76,20.49,3.51,16.24,16.24,3.51l4.25,4.25Z"/></svg>',
                ),
                array(
                    'keys' => 'rupee-sign',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,7H15.79a5.49,5.49,0,0,0-1-2H18a1,1,0,0,0,0-2H7A1,1,0,0,0,7,5h3.5a3.5,3.5,0,0,1,3.15,2H7A1,1,0,0,0,7,9h7a3.5,3.5,0,0,1-3.45,3H7a.7.7,0,0,0-.14,0,.65.65,0,0,0-.2,0,.69.69,0,0,0-.19.1l-.12.07,0,0a.75.75,0,0,0-.14.17,1.1,1.1,0,0,0-.09.14.61.61,0,0,0,0,.18A.65.65,0,0,0,6,13s0,0,0,0a.7.7,0,0,0,0,.14.65.65,0,0,0,0,.2.69.69,0,0,0,.1.19s0,.08.07.12l6,7a1,1,0,0,0,1.52-1.3L9.18,14H10.5A5.5,5.5,0,0,0,16,9h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'sad-cry',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,8.59,21.39l.06,0a9.81,9.81,0,0,0,6.7,0l.06,0A10,10,0,0,0,12,2Zm2,17.74a7.82,7.82,0,0,1-4,0V16h4Zm2-.82V11a1,1,0,0,0,0-2H14a1,1,0,0,0,0,2v3H10V11a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2v7.92a8,8,0,1,1,8,0Z"/></svg>',
                ),
                array(
                    'keys' => 'sad-crying',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,8.59,21.39l.06,0a9.81,9.81,0,0,0,6.7,0l.06,0A10,10,0,0,0,12,2Zm2,17.74a7.82,7.82,0,0,1-4,0V16.61a3.79,3.79,0,0,1,4,0Zm2-.82V11a1,1,0,0,0,0-2H14a1,1,0,0,0,0,2v3.39a6,6,0,0,0-4,0V11a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2v7.92a8,8,0,1,1,8,0Z"/></svg>',
                ),
                array(
                    'keys' => 'sad-dizzy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11.71l.29-.3.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29.3-.29A1,1,0,0,0,9.54,8.29l-.29.3L9,8.29A1,1,0,1,0,7.54,9.71l.3.29-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0Zm-.6,3.62a1,1,0,0,0-.13,1.4,1,1,0,0,0,1.41.13,3.76,3.76,0,0,1,4.72,0,1,1,0,0,0,1.41-.13,1,1,0,0,0-.13-1.4A5.81,5.81,0,0,0,8.36,15.33ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17,8.29a1,1,0,0,0-1.42,0l-.29.3L15,8.29a1,1,0,0,0-1.42,1.42l.3.29-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l.29-.3.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29.3-.29A1,1,0,0,0,17,8.29Z"/></svg>',
                ),
                array(
                    'keys' => 'sad-squint',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.08,12.21l1.5-1.5a1,1,0,0,0,0-1.42l-1.5-1.5A1,1,0,0,0,7.66,9.21l.8.79-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29A1,1,0,0,0,9.08,12.21Zm-.72,3.12a1,1,0,0,0-.13,1.4,1,1,0,0,0,1.41.13,3.76,3.76,0,0,1,4.72,0,1,1,0,0,0,1.41-.13,1,1,0,0,0-.13-1.4A5.81,5.81,0,0,0,8.36,15.33Zm8.22-7.54a1,1,0,0,0-1.42,0l-1.5,1.5a1,1,0,0,0,0,1.42l1.5,1.5a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L15.79,10l.79-.79A1,1,0,0,0,16.58,7.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'sad',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.36,15.33a1,1,0,0,0-.13,1.4,1,1,0,0,0,1.41.13,3.76,3.76,0,0,1,4.72,0,1,1,0,0,0,.64.23,1,1,0,0,0,.64-1.76A5.81,5.81,0,0,0,8.36,15.33Zm.85-4.79a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41,3.08,3.08,0,0,0-4.24,0,1,1,0,1,0,1.41,1.41A1,1,0,0,1,9.21,10.54ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17.62,9.13a3.08,3.08,0,0,0-4.24,0,1,1,0,0,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0A1,1,0,0,0,17.62,9.13Z"/></svg>',
                ),
                array(
                    'keys' => 'sanitizer-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,15H12a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm2-7V5a1,1,0,0,0-1-1H14V3h1a1,1,0,0,0,0-2H10.23584A4.593,4.593,0,0,0,6.10547,3.55273a1.00012,1.00012,0,0,0,1.78906.89454A2.60342,2.60342,0,0,1,10.23584,3H12V4H11a1,1,0,0,0-1,1V8a3.00328,3.00328,0,0,0-3,3v9a3.00328,3.00328,0,0,0,3,3h6a3.00328,3.00328,0,0,0,3-3V11A3.00328,3.00328,0,0,0,16,8ZM12,6h2V8H12Zm5,14a1.0013,1.0013,0,0,1-1,1H10a1.0013,1.0013,0,0,1-1-1V11a1.0013,1.0013,0,0,1,1-1h6a1.0013,1.0013,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'sanitizer',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M13,12a3,3,0,1,0,3,3A3.00328,3.00328,0,0,0,13,12Zm0,4a1,1,0,1,1,1-1A1.0013,1.0013,0,0,1,13,16Zm5.80029-8.3999L16,5.50012V3h1a1,1,0,0,0,0-2H8.65674A4.96656,4.96656,0,0,0,5.12158,2.46436L4.293,3.293A.99989.99989,0,1,0,5.707,4.707l.82861-.82861A3.022,3.022,0,0,1,8.65674,3H10V5.50006l-2.80078,2.1A3.01563,3.01563,0,0,0,6,10V22a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V10A3.01469,3.01469,0,0,0,18.80029,7.6001ZM12,3h2V5H12Zm6,18H8V10a1.00551,1.00551,0,0,1,.3999-.80029L11.3335,7h3.333l2.93311,2.19971A1.00457,1.00457,0,0,1,18,10Z"/></svg>',
                ),
                array(
                    'keys' => 'save',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.71,9.29l-6-6a1,1,0,0,0-.32-.21A1.09,1.09,0,0,0,14,3H6A3,3,0,0,0,3,6V18a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10A1,1,0,0,0,20.71,9.29ZM9,5h4V7H9Zm6,14H9V16a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1Zm4-1a1,1,0,0,1-1,1H17V16a3,3,0,0,0-3-3H10a3,3,0,0,0-3,3v3H6a1,1,0,0,1-1-1V6A1,1,0,0,1,6,5H7V8A1,1,0,0,0,8,9h6a1,1,0,0,0,1-1V6.41l4,4Z"/></svg>',
                ),
                array(
                    'keys' => 'scaling-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,16a1,1,0,0,0-1,1v1.59L13.41,12l2.13-2.12a1,1,0,0,0-1.42-1.42L12,10.59,5.41,4H7A1,1,0,0,0,7,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V7A1,1,0,0,0,4,7V5.41L10.59,12,8.46,14.12a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29L12,13.41,18.59,20H17a1,1,0,0,0,0,2h4a1,1,0,0,0,.38-.08,1,1,0,0,0,.54-.54A1,1,0,0,0,22,21V17A1,1,0,0,0,21,16Z"/></svg>',
                ),
                array(
                    'keys' => 'scaling-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.92,2.62a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H17a1,1,0,0,0,0,2h1.59L12,10.59,9.88,8.46A1,1,0,0,0,8.46,9.88L10.59,12,4,18.59V17a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H7a1,1,0,0,0,0-2H5.41L12,13.41l2.12,2.13a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L13.41,12,20,5.41V7a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z"/></svg>',
                ),
                array(
                    'keys' => 'scenery',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a2.81,2.81,0,0,0,.49-.05l.3-.07.07,0h0l.05,0,.37-.14.13-.07c.1-.06.21-.11.31-.18a3.79,3.79,0,0,0,.38-.32l.07-.09a2.69,2.69,0,0,0,.27-.32l.09-.13a2.31,2.31,0,0,0,.18-.35,1,1,0,0,0,.07-.15c.05-.12.08-.25.12-.38l0-.15A2.6,2.6,0,0,0,22,19V5A3,3,0,0,0,19,2ZM5,20a1,1,0,0,1-1-1V14.69l3.29-3.3h0a1,1,0,0,1,1.42,0L17.31,20Zm15-1a1,1,0,0,1-.07.36,1,1,0,0,1-.08.14.94.94,0,0,1-.09.12l-5.35-5.35.88-.88a1,1,0,0,1,1.42,0h0L20,16.69Zm0-5.14L18.12,12a3.08,3.08,0,0,0-4.24,0l-.88.88L10.12,10a3.08,3.08,0,0,0-4.24,0L4,11.86V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM13.5,6A1.5,1.5,0,1,0,15,7.5,1.5,1.5,0,0,0,13.5,6Z"/></svg>',
                ),
                array(
                    'keys' => 'schedule',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,14a1,1,0,1,0-1-1A1,1,0,0,0,12,14Zm5,0a1,1,0,1,0-1-1A1,1,0,0,0,17,14Zm-5,4a1,1,0,1,0-1-1A1,1,0,0,0,12,18Zm5,0a1,1,0,1,0-1-1A1,1,0,0,0,17,18ZM7,14a1,1,0,1,0-1-1A1,1,0,0,0,7,14ZM19,4H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V10H20ZM20,8H4V7A1,1,0,0,1,5,6H19a1,1,0,0,1,1,1ZM7,18a1,1,0,1,0-1-1A1,1,0,0,0,7,18Z"/></svg>',
                ),
                array(
                    'keys' => 'screw',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,10.12,13.88,2.29a1,1,0,0,0-1.7.57L11.45,8l-2,2-.33-.19A1,1,0,0,0,8,11.44L6.85,12.61l-.33-.19a1,1,0,0,0-1.11,1.63L4.24,15.21,3.92,15a1,1,0,0,0-1.37.37,1,1,0,0,0,.25,1.26l-.51.51a.93.93,0,0,0-.21.33,1,1,0,0,0-.08.38V21a1,1,0,0,0,1,1H6.13a1,1,0,0,0,.38-.08.93.93,0,0,0,.33-.21L8.54,20l.33.19a1,1,0,0,0,1.37-.36A1,1,0,0,0,10,18.56l1.17-1.16.33.19a1,1,0,0,0,.49.13A1,1,0,0,0,12.59,16l1.17-1.16.33.19a1,1,0,0,0,.49.13,1,1,0,0,0,.62-1.77l.79-.79,5.15-.73a1,1,0,0,0,.81-.68A1,1,0,0,0,21.71,10.12ZM5.72,20H4V18.28l.57-.57L6.75,19Zm2.49-2.5L6,16.25l1.14-1.14,2.17,1.25Zm2.61-2.6L8.64,13.64,9.79,12.5,12,13.75Zm2.61-2.61L11.25,11l1.14-1.14,1.72,1.72Zm2.45-1.74L13.45,8.12l.43-3,5,5Z"/></svg>',
                ),
                array(
                    'keys' => 'scroll-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4.71,6.29A1,1,0,0,0,3.29,7.71L7.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,0-1.42ZM16.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0,0,1.42l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'scroll',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,9.71a1,1,0,0,0,1.42,0l5-5a1,1,0,1,0-1.42-1.42L12,7.59,7.71,3.29A1,1,0,0,0,6.29,4.71Zm1.42,4.58a1,1,0,0,0-1.42,0l-5,5a1,1,0,0,0,1.42,1.42L12,16.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'search-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.07,16.83,19,14.71a3.08,3.08,0,0,0-3.4-.57l-.9-.9a7,7,0,1,0-1.41,1.41l.89.89A3,3,0,0,0,14.71,19l2.12,2.12a3,3,0,0,0,4.24,0A3,3,0,0,0,21.07,16.83Zm-8.48-4.24a5,5,0,1,1,0-7.08A5,5,0,0,1,12.59,12.59Zm7.07,7.07a1,1,0,0,1-1.42,0l-2.12-2.12a1,1,0,0,1,0-1.42,1,1,0,0,1,1.42,0l2.12,2.12A1,1,0,0,1,19.66,19.66Z"/></svg>',
                ),
                array(
                    'keys' => 'search-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Zm4-8H7a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'search-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,10H12V7a1,1,0,0,0-2,0v3H7a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V12h3a1,1,0,0,0,0-2Zm6.71,10.29L18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg>',
                ),
                array(
                    'keys' => 'search',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg>',
                ),
                array(
                    'keys' => 'selfie',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,2H8A3,3,0,0,0,5,5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V18H17Zm-5-5a3,3,0,0,1,2.82,2H9.18A3,3,0,0,1,12,14Zm-1-3a1,1,0,1,1,1,1A1,1,0,0,1,11,11Zm6,5h-.1a5,5,0,0,0-2.42-3.32A3,3,0,0,0,15,11a3,3,0,0,0-6,0,3,3,0,0,0,.52,1.68A5,5,0,0,0,7.1,16H7V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1ZM12,5a1,1,0,1,0,1,1A1,1,0,0,0,12,5Z"/></svg>',
                ),
                array(
                    'keys' => 'server-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,17a1,1,0,1,0,1,1A1,1,0,0,0,8,17Zm0-6a1,1,0,1,0,1,1A1,1,0,0,0,8,11ZM8,5A1,1,0,1,0,9,6,1,1,0,0,0,8,5ZM20,5a3,3,0,0,0-3-3H7A3,3,0,0,0,4,5V7a3,3,0,0,0,.78,2A3,3,0,0,0,4,11v2a3,3,0,0,0,.78,2A3,3,0,0,0,4,17v2a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V17a3,3,0,0,0-.78-2A3,3,0,0,0,20,13V11a3,3,0,0,0-.78-2A3,3,0,0,0,20,7ZM18,19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H7A1,1,0,0,1,6,7V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'server-connection',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,13a1,1,0,1,0,1,1A1,1,0,0,0,11,13ZM7,13a1,1,0,1,0,1,1A1,1,0,0,0,7,13ZM22,4a3,3,0,0,0-3-3H5A3,3,0,0,0,2,4V8a3,3,0,0,0,.78,2A3,3,0,0,0,2,12v4a3,3,0,0,0,3,3h6v2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2H13V19h6a3,3,0,0,0,3-3V12a3,3,0,0,0-.78-2A3,3,0,0,0,22,8ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm0-8a1,1,0,0,1-1,1H5A1,1,0,0,1,4,8V4A1,1,0,0,1,5,3H19a1,1,0,0,1,1,1ZM11,5a1,1,0,1,0,1,1A1,1,0,0,0,11,5ZM7,5A1,1,0,1,0,8,6,1,1,0,0,0,7,5Z"/></svg>',
                ),
                array(
                    'keys' => 'server-network-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,6h3a1,1,0,0,0,0-2H8A1,1,0,0,0,8,6Zm8,0a1,1,0,1,0-1-1A1,1,0,0,0,16,6Zm0,4a1,1,0,1,0,1,1A1,1,0,0,0,16,10Zm5,9H14.82A3,3,0,0,0,13,17.18V15h4a3,3,0,0,0,3-3V10a3,3,0,0,0-.78-2A3,3,0,0,0,20,6V4a3,3,0,0,0-3-3H7A3,3,0,0,0,4,4V6a3,3,0,0,0,.78,2A3,3,0,0,0,4,10v2a3,3,0,0,0,3,3h4v2.18A3,3,0,0,0,9.18,19H3a1,1,0,0,0,0,2H9.18a3,3,0,0,0,5.64,0H21a1,1,0,0,0,0-2ZM6,4A1,1,0,0,1,7,3H17a1,1,0,0,1,1,1V6a1,1,0,0,1-1,1H7A1,1,0,0,1,6,6Zm1,9a1,1,0,0,1-1-1V10A1,1,0,0,1,7,9H17a1,1,0,0,1,1,1v2a1,1,0,0,1-1,1Zm5,8a1,1,0,1,1,1-1A1,1,0,0,1,12,21ZM11,10H8a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'server-network',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,6A1,1,0,1,0,7,5,1,1,0,0,0,8,6ZM21,19H14.82A3,3,0,0,0,13,17.18V15h4a3,3,0,0,0,3-3V10a3,3,0,0,0-.78-2A3,3,0,0,0,20,6V4a3,3,0,0,0-3-3H7A3,3,0,0,0,4,4V6a3,3,0,0,0,.78,2A3,3,0,0,0,4,10v2a3,3,0,0,0,3,3h4v2.18A3,3,0,0,0,9.18,19H3a1,1,0,0,0,0,2H9.18a3,3,0,0,0,5.64,0H21a1,1,0,0,0,0-2ZM6,4A1,1,0,0,1,7,3H17a1,1,0,0,1,1,1V6a1,1,0,0,1-1,1H7A1,1,0,0,1,6,6Zm1,9a1,1,0,0,1-1-1V10A1,1,0,0,1,7,9H17a1,1,0,0,1,1,1v2a1,1,0,0,1-1,1Zm5,8a1,1,0,1,1,1-1A1,1,0,0,1,12,21ZM8,10a1,1,0,1,0,1,1A1,1,0,0,0,8,10Z"/></svg>',
                ),
                array(
                    'keys' => 'server',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,17a1,1,0,1,0,1,1A1,1,0,0,0,15,17ZM9,17H6a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2Zm9,0a1,1,0,1,0,1,1A1,1,0,0,0,18,17Zm-3-6a1,1,0,1,0,1,1A1,1,0,0,0,15,11ZM9,11H6a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2Zm9-6a1,1,0,1,0,1,1A1,1,0,0,0,18,5Zm0,6a1,1,0,1,0,1,1A1,1,0,0,0,18,11Zm4-6a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V7a3,3,0,0,0,.78,2A3,3,0,0,0,2,11v2a3,3,0,0,0,.78,2A3,3,0,0,0,2,17v2a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V17a3,3,0,0,0-.78-2A3,3,0,0,0,22,13V11a3,3,0,0,0-.78-2A3,3,0,0,0,22,7ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H5A1,1,0,0,1,4,7V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1ZM15,5a1,1,0,1,0,1,1A1,1,0,0,0,15,5ZM9,5H6A1,1,0,0,0,6,7H9A1,1,0,0,0,9,5Z"/></svg>',
                ),
                array(
                    'keys' => 'servers',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,17a1,1,0,1,0,1,1A1,1,0,0,0,15,17Zm-4,0H9a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm0-6H9a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,15,11Zm8-3a3,3,0,0,0-3-3H19a3,3,0,0,0-3-3H8A3,3,0,0,0,5,5H4A3,3,0,0,0,1,8v2a3,3,0,0,0,.78,2A3,3,0,0,0,1,14v2a3,3,0,0,0,3,3H5a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3h1a3,3,0,0,0,3-3V14a3,3,0,0,0-.78-2A3,3,0,0,0,23,10ZM5,17H4a1,1,0,0,1-1-1V14a1,1,0,0,1,1-1H5a3,3,0,0,0,.78,2A3,3,0,0,0,5,17Zm0-6H4a1,1,0,0,1-1-1V8A1,1,0,0,1,4,7H5a3,3,0,0,0,.78,2A3,3,0,0,0,5,11Zm12,8a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V11a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H8A1,1,0,0,1,7,7V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Zm4,9a1,1,0,0,1-1,1H19a3,3,0,0,0-.78-2A3,3,0,0,0,19,13h1a1,1,0,0,1,1,1Zm0-6a1,1,0,0,1-1,1H19a3,3,0,0,0-.78-2A3,3,0,0,0,19,7h1a1,1,0,0,1,1,1ZM15,5a1,1,0,1,0,1,1A1,1,0,0,0,15,5ZM11,5H9A1,1,0,0,0,9,7h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'servicemark',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M5.5,9h4a1,1,0,0,0,0-2h-4a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2h-4a1,1,0,0,0,0,2h4a3,3,0,0,0,0-6h-2a1,1,0,0,1,0-2ZM21.42,7.62a1,1,0,0,0-.54-.54,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21L17,10.09l-2.79-2.8a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.54.54A1,1,0,0,0,12.5,8v8a1,1,0,0,0,2,0V10.41l1.79,1.8a1,1,0,0,0,1.42,0l1.79-1.8V16a1,1,0,0,0,2,0V8A1,1,0,0,0,21.42,7.62Z"/></svg>',
                ),
                array(
                    'keys' => 'setting',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19.9,12.66a1,1,0,0,1,0-1.32L21.18,9.9a1,1,0,0,0,.12-1.17l-2-3.46a1,1,0,0,0-1.07-.48l-1.88.38a1,1,0,0,1-1.15-.66l-.61-1.83A1,1,0,0,0,13.64,2h-4a1,1,0,0,0-1,.68L8.08,4.51a1,1,0,0,1-1.15.66L5,4.79A1,1,0,0,0,4,5.27L2,8.73A1,1,0,0,0,2.1,9.9l1.27,1.44a1,1,0,0,1,0,1.32L2.1,14.1A1,1,0,0,0,2,15.27l2,3.46a1,1,0,0,0,1.07.48l1.88-.38a1,1,0,0,1,1.15.66l.61,1.83a1,1,0,0,0,1,.68h4a1,1,0,0,0,.95-.68l.61-1.83a1,1,0,0,1,1.15-.66l1.88.38a1,1,0,0,0,1.07-.48l2-3.46a1,1,0,0,0-.12-1.17ZM18.41,14l.8.9-1.28,2.22-1.18-.24a3,3,0,0,0-3.45,2L12.92,20H10.36L10,18.86a3,3,0,0,0-3.45-2l-1.18.24L4.07,14.89l.8-.9a3,3,0,0,0,0-4l-.8-.9L5.35,6.89l1.18.24a3,3,0,0,0,3.45-2L10.36,4h2.56l.38,1.14a3,3,0,0,0,3.45,2l1.18-.24,1.28,2.22-.8.9A3,3,0,0,0,18.41,14ZM11.64,8a4,4,0,1,0,4,4A4,4,0,0,0,11.64,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,11.64,14Z"/></svg>',
                ),
                array(
                    'keys' => 'share-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"/></svg>',
                ),
                array(
                    'keys' => 'share',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>',
                ),
                array(
                    'keys' => 'shield-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.63,3.65a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39ZM13.54,9.59l-2.69,2.7-.89-.9a1,1,0,0,0-1.42,1.42l1.6,1.6a1,1,0,0,0,1.42,0L15,11a1,1,0,0,0-1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'shield-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.92,15a.56.56,0,0,0-.09-.17l-.12-.15a1,1,0,0,0-1.42,0,.61.61,0,0,0-.12.15.56.56,0,0,0-.09.17.7.7,0,0,0-.06.19,1.23,1.23,0,0,0,0,.19.88.88,0,0,0,.08.39,1,1,0,0,0,1.3.54,1.19,1.19,0,0,0,.33-.22,1,1,0,0,0,.21-.32,1,1,0,0,0,.08-.39,1.23,1.23,0,0,0,0-.19A.7.7,0,0,0,12.92,15ZM12,7.36a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0v-3A1,1,0,0,0,12,7.36Zm7.63-3.71a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39Z"/></svg>',
                ),
                array(
                    'keys' => 'shield-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,11H13V10a1,1,0,0,0-2,0v1H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V13h1a1,1,0,0,0,0-2Zm5.63086-7.3501a1.00709,1.00709,0,0,0-.83594-.20263,7.9808,7.9808,0,0,1-6.22265-1.26709.99888.99888,0,0,0-1.14454,0A7.976,7.976,0,0,1,5.20508,3.44727.99971.99971,0,0,0,4,4.42627v7.457A9.01875,9.01875,0,0,0,7.76855,19.207L11.419,21.814a1.0004,1.0004,0,0,0,1.1621,0l3.6504-2.60742A9.01717,9.01717,0,0,0,20,11.8833v-7.457A1.0011,1.0011,0,0,0,19.63086,3.6499ZM18,11.8833a7.0157,7.0157,0,0,1-2.93066,5.6958L12,19.771,8.93066,17.57959A7.01728,7.01728,0,0,1,6,11.8833V5.583a9.95463,9.95463,0,0,0,6-1.39112A9.95463,9.95463,0,0,0,18,5.583Z"/></svg>',
                ),
                array(
                    'keys' => 'shield-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,14.66a1,1,0,0,0-.29.7,1,1,0,0,0,.08.39A1,1,0,0,0,13,15.36a1,1,0,0,0-.29-.7A1,1,0,0,0,11.29,14.66Zm8.34-11a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39ZM12,7.36a3,3,0,0,0-2.6,1.5,1,1,0,0,0,1.73,1A1,1,0,1,1,12,11.36a1,1,0,0,0,0,2,3,3,0,1,0,0-6Z"/></svg>',
                ),
                array(
                    'keys' => 'shield-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.71,20.29l-16-16h0l-2-2A1,1,0,0,0,2.29,3.71L4,5.41v6.47A9,9,0,0,0,7.77,19.2l3.65,2.61a1,1,0,0,0,1.16,0l3.65-2.61a8.21,8.21,0,0,0,.86-.7l3.2,3.21a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29Zm-6.64-2.71L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V7.41l9.67,9.68C15.48,17.26,15.28,17.42,15.07,17.58Zm-5-12.51A10.15,10.15,0,0,0,12,4.19a9.82,9.82,0,0,0,6,1.39v6.3a6.88,6.88,0,0,1-.1,1.18,1,1,0,0,0,.83,1.15h.16a1,1,0,0,0,1-.84,9.77,9.77,0,0,0,.12-1.5V4.43a1,1,0,0,0-.37-.77,1,1,0,0,0-.83-.21,7.89,7.89,0,0,1-6.23-1.27,1,1,0,0,0-1.14,0,8,8,0,0,1-2,1,1,1,0,1,0,.64,1.9Z"/></svg>',
                ),
                array(
                    'keys' => 'shield',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.63,3.65a1,1,0,0,0-.84-.2,8,8,0,0,1-6.22-1.27,1,1,0,0,0-1.14,0A8,8,0,0,1,5.21,3.45a1,1,0,0,0-.84.2A1,1,0,0,0,4,4.43v7.45a9,9,0,0,0,3.77,7.33l3.65,2.6a1,1,0,0,0,1.16,0l3.65-2.6A9,9,0,0,0,20,11.88V4.43A1,1,0,0,0,19.63,3.65ZM18,11.88a7,7,0,0,1-2.93,5.7L12,19.77,8.93,17.58A7,7,0,0,1,6,11.88V5.58a10,10,0,0,0,6-1.39,10,10,0,0,0,6,1.39Z"/></svg>',
                ),
                array(
                    'keys' => 'ship',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3.62,17.28a1,1,0,0,0,1.86-.74L4.36,13.72,11,12.25V17a1,1,0,0,0,2,0V12.25l6.64,1.47-1.12,2.82a1,1,0,0,0,.56,1.3,1,1,0,0,0,.37.07,1,1,0,0,0,.93-.63l1.55-3.91a1,1,0,0,0-.05-.84,1,1,0,0,0-.66-.51L18,11.31V7a1,1,0,0,0-1-1H15V3a1,1,0,0,0-1-1H10A1,1,0,0,0,9,3V6H7A1,1,0,0,0,6,7v4.31L2.78,12a1,1,0,0,0-.66.51,1,1,0,0,0-.05.84ZM11,4h2V6H11ZM8,8h8v2.86L12.22,10h-.1L12,10l-.12,0h-.1L8,10.86ZM20.71,19.28a4.38,4.38,0,0,0-1,.45,2.08,2.08,0,0,1-2.1,0,4.62,4.62,0,0,0-4.54,0,2.14,2.14,0,0,1-2.12,0,4.64,4.64,0,0,0-4.54,0,2.08,2.08,0,0,1-2.1,0,4.38,4.38,0,0,0-1-.45A1,1,0,0,0,2,20a1,1,0,0,0,.67,1.24,2.1,2.1,0,0,1,.57.25,4,4,0,0,0,2,.55,4.14,4.14,0,0,0,2.08-.56,2.65,2.65,0,0,1,2.56,0,4.15,4.15,0,0,0,4.12,0,2.65,2.65,0,0,1,2.56,0,4,4,0,0,0,4.1,0,2.1,2.1,0,0,1,.57-.25A1,1,0,0,0,22,20,1,1,0,0,0,20.71,19.28Z"/></svg>',
                ),
                array(
                    'keys' => 'shop',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,5H2A1,1,0,0,0,1,6v4a3,3,0,0,0,2,2.82V22a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V12.82A3,3,0,0,0,23,10V6A1,1,0,0,0,22,5ZM15,7h2v3a1,1,0,0,1-2,0ZM11,7h2v3a1,1,0,0,1-2,0ZM7,7H9v3a1,1,0,0,1-2,0ZM4,11a1,1,0,0,1-1-1V7H5v3A1,1,0,0,1,4,11ZM14,21H10V19a2,2,0,0,1,4,0Zm5,0H16V19a4,4,0,0,0-8,0v2H5V12.82a3.17,3.17,0,0,0,1-.6,3,3,0,0,0,4,0,3,3,0,0,0,4,0,3,3,0,0,0,4,0,3.17,3.17,0,0,0,1,.6Zm2-11a1,1,0,0,1-2,0V7h2ZM4.3,3H20a1,1,0,0,0,0-2H4.3a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'shopping-bag',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,7H16V6A4,4,0,0,0,8,6V7H5A1,1,0,0,0,4,8V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V8A1,1,0,0,0,19,7ZM10,6a2,2,0,0,1,4,0V7H10Zm8,13a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V9H8v1a1,1,0,0,0,2,0V9h4v1a1,1,0,0,0,2,0V9h2Z"/></svg>',
                ),
                array(
                    'keys' => 'shopping-basket',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14,18a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,14,18Zm-4,0a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,10,18ZM19,6H17.62L15.89,2.55a1,1,0,1,0-1.78.9L15.38,6H8.62L9.89,3.45a1,1,0,0,0-1.78-.9L6.38,6H5a3,3,0,0,0-.92,5.84l.74,7.46a3,3,0,0,0,3,2.7h8.38a3,3,0,0,0,3-2.7l.74-7.46A3,3,0,0,0,19,6ZM17.19,19.1a1,1,0,0,1-1,.9H7.81a1,1,0,0,1-1-.9L6.1,12H17.9ZM19,10H5A1,1,0,0,1,5,8H19a1,1,0,0,1,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'shopping-cart-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5,15a3,3,0,0,0-1.9-2.78l1.87-7a1,1,0,0,0-.18-.87A1,1,0,0,0,20.5,4H6.8L6.47,2.74A1,1,0,0,0,5.5,2h-2V4H4.73l2.48,9.26a1,1,0,0,0,1,.74H18.5a1,1,0,0,1,0,2H5.5a1,1,0,0,0,0,2H6.68a3,3,0,1,0,5.64,0h2.36a3,3,0,1,0,5.82,1,2.94,2.94,0,0,0-.4-1.47A3,3,0,0,0,21.5,15Zm-3.91-3H9L7.34,6H19.2ZM9.5,20a1,1,0,1,1,1-1A1,1,0,0,1,9.5,20Zm8,0a1,1,0,1,1,1-1A1,1,0,0,1,17.5,20Z"/></svg>',
                ),
                array(
                    'keys' => 'shopping-cart',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.5,19A1.5,1.5,0,1,0,10,20.5,1.5,1.5,0,0,0,8.5,19ZM19,16H7a1,1,0,0,1,0-2h8.49121A3.0132,3.0132,0,0,0,18.376,11.82422L19.96143,6.2749A1.00009,1.00009,0,0,0,19,5H6.73907A3.00666,3.00666,0,0,0,3.92139,3H3A1,1,0,0,0,3,5h.92139a1.00459,1.00459,0,0,1,.96142.7251l.15552.54474.00024.00506L6.6792,12.01709A3.00006,3.00006,0,0,0,7,18H19a1,1,0,0,0,0-2ZM17.67432,7l-1.2212,4.27441A1.00458,1.00458,0,0,1,15.49121,12H8.75439l-.25494-.89221L7.32642,7ZM16.5,19A1.5,1.5,0,1,0,18,20.5,1.5,1.5,0,0,0,16.5,19Z"/></svg>',
                ),
                array(
                    'keys' => 'shovel',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,7.38,16.62,2.29a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L17,5.54,11.58,11l-1-1h0a3,3,0,0,0-4.25,0L2.88,13.42A3,3,0,0,0,2,15.55V19a3,3,0,0,0,3,3H8.45a3,3,0,0,0,2.13-.88L14,17.69a3,3,0,0,0,0-4.25l-1-1L18.46,7l1.83,1.83a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,7.38ZM12.6,16.27,9.16,19.71a1,1,0,0,1-.71.29H5a1,1,0,0,1-1-1V15.55a1,1,0,0,1,.29-.71L7.73,11.4a1,1,0,0,1,1.41,0l1,1-.89.9a1,1,0,0,0,0,1.41A1,1,0,0,0,10,15a1,1,0,0,0,.7-.29l.9-.89,1,1A1,1,0,0,1,12.6,16.27Z"/></svg>',
                ),
                array(
                    'keys' => 'shrink',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.71,11.29l-2.5-2.5a1,1,0,1,0-1.42,1.42l.8.79H3a1,1,0,0,0,0,2H7.59l-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2.5-2.5a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76A1,1,0,0,0,10.71,11.29ZM21,11H16.41l.8-.79a1,1,0,0,0-1.42-1.42l-2.5,2.5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2.5,2.5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.8-.79H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'shuffle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,10A1,1,0,0,0,4,9V5.41L8.56,10A1,1,0,0,0,10,10a1,1,0,0,0,0-1.41L5.41,4H9A1,1,0,0,0,9,2H3a1,1,0,0,0-.38.08,1,1,0,0,0-.54.54A1,1,0,0,0,2,3V9A1,1,0,0,0,3,10Zm12.3,4a1,1,0,0,0-1.41,1.41l6.27,6.28a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42ZM9,20H5.41L21.71,3.71a1,1,0,1,0-1.42-1.42L4,18.59V15a1,1,0,0,0-2,0v6a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,3,22H9a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'shutter-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,11a1,1,0,0,1,0-.16c0-.28-.08-.56-.13-.84v0A9.54,9.54,0,0,0,21,7.62v0A10,10,0,0,0,14,2.21h0l-.84-.13-.16,0-.29,0h-.08L12,2c-.34,0-.68,0-1,0l-.16,0L10,2.2h0A10,10,0,0,0,2.21,10v0c-.05.28-.09.56-.13.84a1,1,0,0,1,0,.16c0,.33,0,.67,0,1s0,.68,0,1a1,1,0,0,1,0,.16c0,.28.08.56.13.84v0A9.54,9.54,0,0,0,3,16.38v0A10,10,0,0,0,10,21.79h0l.84.13L11,22l.34,0h.14c.18,0,.35,0,.53,0,.34,0,.68,0,1-.05l.16,0L14,21.8h0A10,10,0,0,0,21.79,14v0c.05-.28.09-.56.13-.84A1,1,0,0,1,22,13c0-.33.05-.67.05-1S22,11.32,22,11Zm-8.84-6.9.5.07h0A8,8,0,0,1,18.24,7H11.42Zm-2.74.08h0l.4-.06L7.38,10,5.7,7.08A8,8,0,0,1,10.37,4.17ZM4.59,15a8,8,0,0,1-.42-1.37v0c0-.22-.08-.45-.1-.68a.5.5,0,0,1,0-.12,8.22,8.22,0,0,1,0-1.62.5.5,0,0,1,0-.12c0-.23.06-.46.1-.68v0A7.76,7.76,0,0,1,4.55,9.1L8,15Zm6.3,4.91-.5-.07h0A8,8,0,0,1,5.76,17h6.82ZM10.27,15,8.54,12l1.73-3h3.46l1.73,3-1.73,3Zm3.36,4.83h0l-.4.06L16.62,14l1.68,2.92A8,8,0,0,1,13.63,19.83Zm6.33-7a.5.5,0,0,1,0,.12c0,.23-.06.46-.1.68v0a7.76,7.76,0,0,1-.38,1.27L16,9h3.37a8,8,0,0,1,.42,1.37v0c0,.22.08.45.1.68a.5.5,0,0,1,0,.12,8.22,8.22,0,0,1,0,1.62Z"/></svg>',
                ),
                array(
                    'keys' => 'shutter',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.07,4.93A10,10,0,1,0,4.93,19.07,10,10,0,1,0,19.07,4.93ZM18.23,7H12.76l2.35-2.35A8.14,8.14,0,0,1,18.23,7ZM9,4.6a8.15,8.15,0,0,1,3.87-.54L9,7.93ZM7,5.77v5.47L5.19,9.43l-.54-.54A8.14,8.14,0,0,1,7,5.77ZM4.6,15a8.12,8.12,0,0,1-.54-3.87L7.93,15Zm1.17,2h5.47L8.89,19.35A8.14,8.14,0,0,1,5.77,17ZM15,19.4a8.13,8.13,0,0,1-3.87.54L15,16.07Zm0-6.16L13.24,15H10.75L9,13.24V10.76L10.76,9h2.48L15,10.76Zm2,5V12.76l2.35,2.35A8.14,8.14,0,0,1,17,18.23ZM16.07,9H19.4a8.13,8.13,0,0,1,.54,3.87Z"/></svg>',
                ),
                array(
                    'keys' => 'sick',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6,0a1,1,0,1,0-1-1A1,1,0,0,0,15,11Zm.27,3.2a1,1,0,0,0-1.2,0l-.74.55-.73-.55a1,1,0,0,0-1.2,0l-.73.55-.74-.55a1,1,0,0,0-1.2,0l-1.33,1a1,1,0,1,0,1.2,1.6l.73-.55.74.55,0,0,.12.06a.83.83,0,0,0,.22.08l.12,0a1,1,0,0,0,.25,0h.1a1.06,1.06,0,0,0,.34-.16l.73-.55.73.55a1,1,0,0,0,1,.11l.1-.05a.39.39,0,0,0,.11-.06l.74-.55.73.55a1,1,0,0,0,.6.2,1,1,0,0,0,.8-.4,1,1,0,0,0-.2-1.4ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'sigma',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,16H10.41l3.3-3.29a1,1,0,0,0,0-1.42L10.41,8H16a1,1,0,0,0,0-2H8a1,1,0,0,0-.92.62,1,1,0,0,0,.21,1.09L11.59,12l-4.3,4.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,8,18h8a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'sign-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.78,11.88l-2-2.5A1,1,0,0,0,19,9H13V3a1,1,0,0,0-2,0V4H5a1,1,0,0,0-.78.38l-2,2.5a1,1,0,0,0,0,1.24l2,2.5A1,1,0,0,0,5,11h6v9H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V16h6a1,1,0,0,0,.78-.38l2-2.5A1,1,0,0,0,21.78,11.88ZM11,9H5.48L4.28,7.5,5.48,6H11Zm7.52,5H13V11h5.52l1.2,1.5Z"/></svg>',
                ),
                array(
                    'keys' => 'sign-in-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.5,15.1a1,1,0,0,0-1.34.45A8,8,0,1,1,12,4a7.93,7.93,0,0,1,7.16,4.45,1,1,0,0,0,1.8-.9,10,10,0,1,0,0,8.9A1,1,0,0,0,20.5,15.1ZM21,11H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'sign-left',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,5H13V3a1,1,0,0,0-2,0V5H6a1,1,0,0,0-.78.38l-2,2.5a1,1,0,0,0,0,1.24l2,2.5A1,1,0,0,0,6,12h5v8H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V12h3a1,1,0,0,0,1-1V6A1,1,0,0,0,16,5Zm-1,5H6.48L5.28,8.5,6.48,7H15Z"/></svg>',
                ),
                array(
                    'keys' => 'sign-out-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.59,13l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H3a1,1,0,0,0,0,2ZM12,2A10,10,0,0,0,3,7.55a1,1,0,0,0,1.8.9A8,8,0,1,1,12,20a7.93,7.93,0,0,1-7.16-4.45,1,1,0,0,0-1.8.9A10,10,0,1,0,12,2Z"/></svg>',
                ),
                array(
                    'keys' => 'sign-right',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7,6v5a1,1,0,0,0,1,1h3v8H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V12h5a1,1,0,0,0,.78-.37l2-2.5a1,1,0,0,0,0-1.25l-2-2.5A1,1,0,0,0,18,5H13V3a1,1,0,0,0-2,0V5H8A1,1,0,0,0,7,6ZM9,7h8.52l1.2,1.5L17.52,10H9Z"/></svg>',
                ),
                array(
                    'keys' => 'signal-alt-3',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,9H10a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V10A1,1,0,0,0,14,9ZM13,21H11V11h2ZM22,1H18a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V2A1,1,0,0,0,22,1ZM21,21H19V3h2ZM6,15H2a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1H6a1,1,0,0,0,1-1V16A1,1,0,0,0,6,15ZM5,21H3V17H5Z"/></svg>',
                ),
                array(
                    'keys' => 'signal-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,14a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V15A1,1,0,0,0,10,14ZM5,18a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V19A1,1,0,0,0,5,18ZM20,2a1,1,0,0,0-1,1V21a1,1,0,0,0,2,0V3A1,1,0,0,0,20,2ZM15,9a1,1,0,0,0-1,1V21a1,1,0,0,0,2,0V10A1,1,0,0,0,15,9Z"/></svg>',
                ),
                array(
                    'keys' => 'signal',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6,15a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V16A1,1,0,0,0,6,15Zm4-3a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V13A1,1,0,0,0,10,12Zm8-8a1,1,0,0,0-1,1V19a1,1,0,0,0,2,0V5A1,1,0,0,0,18,4ZM14,8a1,1,0,0,0-1,1V19a1,1,0,0,0,2,0V9A1,1,0,0,0,14,8Z"/></svg>',
                ),
                array(
                    'keys' => 'signin',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/></svg>',
                ),
                array(
                    'keys' => 'signout',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg>',
                ),
                array(
                    'keys' => 'silence',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6,0a1,1,0,1,0-1-1A1,1,0,0,0,15,11Zm1,3a1,1,0,0,0-2,0H13a1,1,0,0,0-2,0H10a1,1,0,0,0-2,0,1,1,0,0,0,0,2,1,1,0,0,0,2,0h1a1,1,0,0,0,2,0h1a1,1,0,0,0,2,0,1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'silent-squint',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M7.66,12.21a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1.5-1.5a1,1,0,0,0,0-1.42l-1.5-1.5A1,1,0,0,0,7.66,9.21l.8.79-.8.79A1,1,0,0,0,7.66,12.21Zm7.5,0a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L15.79,10l.79-.79a1,1,0,1,0-1.42-1.42l-1.5,1.5a1,1,0,0,0,0,1.42Zm.11,2a1,1,0,0,0-1.2,0l-.74.55-.73-.55a1,1,0,0,0-1.2,0l-.73.55-.74-.55a1,1,0,0,0-1.2,0l-1.33,1a1,1,0,1,0,1.2,1.6l.73-.55.74.55,0,0a.67.67,0,0,0,.12.06.83.83,0,0,0,.22.08l.13,0h.23l.12,0a1.12,1.12,0,0,0,.33-.16l.73-.55.73.55a1,1,0,0,0,1,.11l.1-.05a.39.39,0,0,0,.11-.06l.74-.55.73.55a1,1,0,0,0,.6.2,1,1,0,0,0,.8-.4,1,1,0,0,0-.2-1.4ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'sim-card',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,3.5H7A3.5,3.5,0,0,0,3.5,7V17A3.5,3.5,0,0,0,7,20.5H17A3.5,3.5,0,0,0,20.5,17V7A3.5,3.5,0,0,0,17,3.5Zm-6.5,2h3v3h-3Zm-2,13H7A1.5,1.5,0,0,1,5.5,17V15.5h3Zm5,0h-3v-3h3Zm5-1.5A1.5,1.5,0,0,1,17,18.5H15.5v-3h3Zm0-3.5H5.5V7A1.5,1.5,0,0,1,7,5.5H8.5v4a1,1,0,0,0,1,1h9Zm0-5h-3v-3H17A1.5,1.5,0,0,1,18.5,7Z"/></svg>',
                ),
                array(
                    'keys' => 'sitemap',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,15H20V12a1,1,0,0,0-1-1H13V9h2a1,1,0,0,0,1-1V2a1,1,0,0,0-1-1H9A1,1,0,0,0,8,2V8A1,1,0,0,0,9,9h2v2H5a1,1,0,0,0-1,1v3H2a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V16a1,1,0,0,0-1-1H6V13H18v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V16A1,1,0,0,0,22,15ZM7,17v4H3V17ZM10,7V3h4V7ZM21,21H17V17h4Z"/></svg>',
                ),
                array(
                    'keys' => 'skip-forward-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5,3A3,3,0,0,0,2,6V18a3,3,0,0,0,6,0V6A3,3,0,0,0,5,3ZM6,18a1,1,0,0,1-2,0V6A1,1,0,0,1,6,6ZM20.68,9.65,14,5.66a2.6,2.6,0,0,0-2.64,0A2.74,2.74,0,0,0,10,8v8a2.74,2.74,0,0,0,1.37,2.38,2.57,2.57,0,0,0,2.64,0l6.67-4a2.75,2.75,0,0,0,0-4.7Zm-1,3-6.66,4a.61.61,0,0,1-.63,0A.72.72,0,0,1,12,16V8a.72.72,0,0,1,.36-.64.64.64,0,0,1,.31-.08.63.63,0,0,1,.32.09l6.66,4a.76.76,0,0,1,0,1.28Z"/></svg>',
                ),
                array(
                    'keys' => 'skip-forward-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.5,7a1,1,0,0,0-1,1V9.69l-4-2.31a2,2,0,0,0-3,1.73v5.78a2,2,0,0,0,1,1.73,2,2,0,0,0,2,0l4-2.31V16a1,1,0,0,0,2,0V8A1,1,0,0,0,15.5,7Zm-1,5-5,2.89V9.11l5,2.88ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'skip-forward',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,3a3,3,0,0,0-3,3V8.84L7,3.47a3.21,3.21,0,0,0-3.29,0A3.38,3.38,0,0,0,2,6.42V17.58a3.38,3.38,0,0,0,1.72,3A3.24,3.24,0,0,0,5.33,21,3.28,3.28,0,0,0,7,20.53l9-5.37V18a3,3,0,0,0,6,0V6A3,3,0,0,0,19,3ZM15.32,13.23,6,18.81a1.23,1.23,0,0,1-1.28,0A1.4,1.4,0,0,1,4,17.58V6.42a1.4,1.4,0,0,1,.71-1.25A1.29,1.29,0,0,1,5.33,5,1.23,1.23,0,0,1,6,5.19l9.33,5.58a1.45,1.45,0,0,1,0,2.46ZM20,18a1,1,0,0,1-2,0V6a1,1,0,0,1,2,0Z"/></svg>',
                ),
                array(
                    'keys' => 'skype-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.13916,11.8125a5.07559,5.07559,0,0,0-1.291-.59277c-.27978-.0846-.58953-.16736-.9104-.24713-.27911-.07782-.61132-.15766-1.02221-.248a9.31489,9.31489,0,0,1-1.436-.42383,1.49588,1.49588,0,0,1-.61572-.44726.84285.84285,0,0,1-.15918-.56543.96712.96712,0,0,1,.2041-.59668,1.59829,1.59829,0,0,1,.69971-.47559A4.01235,4.01235,0,0,1,12.03223,8a3.78727,3.78727,0,0,1,1.10547.14648,2.08274,2.08274,0,0,1,.66357.32129,1.23492,1.23492,0,0,1,.32519.34278.9997.9997,0,1,0,1.76075-.94727,3.14668,3.14668,0,0,0-.83741-.958A4.006,4.006,0,0,0,13.731,6.23633,5.76768,5.76768,0,0,0,12.03223,6a5.96329,5.96329,0,0,0-2.145.35059A3.55209,3.55209,0,0,0,8.30908,7.49121a2.97709,2.97709,0,0,0-.60449,1.79688,2.839,2.839,0,0,0,.58008,1.792,3.50074,3.50074,0,0,0,1.438,1.07226,10.5822,10.5822,0,0,0,1.30706.4079c.00837.00275.014.00946.02253.012.1914.05761.49755.13476.93994.23046.17236.037.33478.07789.49713.11847.01575.0047.03851.00965.05365.01435l.01807.00274c.24835.0633.48706.12873.70556.1955a3.02336,3.02336,0,0,1,.76367.34375,1.12652,1.12652,0,0,1,.36231.36816,1.20138,1.20138,0,0,1,.11865.585,1.15187,1.15187,0,0,1-.21387.73243,1.76331,1.76331,0,0,1-.80273.585A3.78736,3.78736,0,0,1,12.0083,16a3.68851,3.68851,0,0,1-1.70361-.34375,1.75626,1.75626,0,0,1-.61573-.54687,1.0164,1.0164,0,0,1-.20166-.50293,1,1,0,0,0-2,0,2.93957,2.93957,0,0,0,.55616,1.63867,3.7737,3.7737,0,0,0,1.34179,1.1875A5.621,5.621,0,0,0,12.0083,18a5.7083,5.7083,0,0,0,2.25391-.40527,3.71019,3.71019,0,0,0,1.665-1.27246,3.14637,3.14637,0,0,0,.58349-1.92676,3.08942,3.08942,0,0,0-.375-1.53028A3.16532,3.16532,0,0,0,15.13916,11.8125Zm7.22217,1.87891A10.49127,10.49127,0,0,0,10.30859,1.63867a6.499,6.499,0,0,0-8.66992,8.66992A10.49127,10.49127,0,0,0,13.69141,22.36133a6.499,6.499,0,0,0,8.66992-8.66992ZM16.5,21a4.5057,4.5057,0,0,1-2.16943-.55762,1.0038,1.0038,0,0,0-.67725-.10644A8.49212,8.49212,0,0,1,3.5,12a8.58284,8.58284,0,0,1,.16406-1.6543A1.00336,1.00336,0,0,0,3.55811,9.669,4.49939,4.49939,0,0,1,9.66943,3.55762a.99964.99964,0,0,0,.67725.10644A8.49212,8.49212,0,0,1,20.5,12a8.58284,8.58284,0,0,1-.16406,1.6543,1.00336,1.00336,0,0,0,.106.67675A4.49869,4.49869,0,0,1,16.5,21Z"/></svg>',
                ),
                array(
                    'keys' => 'skype',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.43451,14.15552a9.586,9.586,0,0,0,.21155-2.02631,9.47653,9.47653,0,0,0-9.54029-9.42254,9.11414,9.11414,0,0,0-1.62494.14178A5.53558,5.53558,0,0,0,2.00061,7.466a5.42884,5.42884,0,0,0,.75354,2.7558,10.0197,10.0197,0,0,0-.18866,1.88452,9.33889,9.33889,0,0,0,9.54028,9.25788,8.56663,8.56663,0,0,0,1.74268-.16584A5.57942,5.57942,0,0,0,16.46368,22a5.433,5.433,0,0,0,4.97083-7.84448ZM16.43964,15.9931a3.63146,3.63146,0,0,1-1.62488,1.22473,6.33963,6.33963,0,0,1-2.52033.44709,6.21683,6.21683,0,0,1-2.89764-.61176,3.733,3.733,0,0,1-1.31964-1.17779,2.574,2.574,0,0,1-.494-1.41339.88041.88041,0,0,1,.30646-.68384,1.09008,1.09008,0,0,1,.77643-.28247.94433.94433,0,0,1,.637.2127,1.793,1.793,0,0,1,.44708.65863,3.39792,3.39792,0,0,0,.49518.87256,1.78964,1.78964,0,0,0,.72955.56488,3.01435,3.01435,0,0,0,1.24872.23554,2.9217,2.9217,0,0,0,1.71985-.44708,1.33217,1.33217,0,0,0,.65979-1.13092,1.135,1.135,0,0,0-.35333-.87134,2.18491,2.18491,0,0,0-.91944-.51923c-.37616-.11774-.89538-.23553-1.53112-.37616a13.9908,13.9908,0,0,1-2.14295-.6358,3.34814,3.34814,0,0,1-1.36651-1.01312,2.47429,2.47429,0,0,1-.49512-1.57807,2.62945,2.62945,0,0,1,.54205-1.60205,3.41154,3.41154,0,0,1,1.53113-1.084,6.652,6.652,0,0,1,2.37964-.37623,6.403,6.403,0,0,1,1.88452.25843,4.07215,4.07215,0,0,1,1.31842.65979,2.91587,2.91587,0,0,1,.77765.87134,1.80281,1.80281,0,0,1,.23553.87139.96189.96189,0,0,1-.30645.70667.9912.9912,0,0,1-.7536.30646.9735.9735,0,0,1-.63575-.18866,2.38218,2.38218,0,0,1-.47113-.61176,2.93711,2.93711,0,0,0-.77758-.96631A2.37614,2.37614,0,0,0,12.0589,7.96a2.7028,2.7028,0,0,0-1.5083.37738,1.07558,1.07558,0,0,0-.56488.89539.95783.95783,0,0,0,.18866.56488,1.41851,1.41851,0,0,0,.54205.4002,2.69264,2.69264,0,0,0,.68262.25959c.23559.07092.613.16467,1.15381.28247.65979.14178,1.27276.30646,1.81475.47107a5.43,5.43,0,0,1,1.38941.6358,2.85691,2.85691,0,0,1,.89532.94226,2.8284,2.8284,0,0,1,.32935,1.3905A2.89029,2.89029,0,0,1,16.43964,15.9931Z"/></svg>',
                ),
                array(
                    'keys' => 'slack-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M23,9.5A3.50424,3.50424,0,0,0,19.5,6a3.45946,3.45946,0,0,0-1.5.35107V4.5a3.49466,3.49466,0,0,0-6-2.44171A3.48676,3.48676,0,0,0,6.35107,6H4.5a3.49466,3.49466,0,0,0-2.44171,6A3.48676,3.48676,0,0,0,6,17.64893V19.5a3.49466,3.49466,0,0,0,6,2.44171A3.48676,3.48676,0,0,0,17.64893,18H19.5a3.49466,3.49466,0,0,0,2.44171-6A3.48559,3.48559,0,0,0,23,9.5Zm-10-5a1.5,1.5,0,0,1,3,0v5a1.5,1.5,0,0,1-3,0Zm-7,10A1.5,1.5,0,1,1,4.5,13H6Zm5,5a1.5,1.5,0,0,1-3,0v-5a1.5,1.5,0,0,1,3,0ZM9.5,11h-5a1.5,1.5,0,0,1,0-3h5a1.5,1.5,0,0,1,0,3ZM11,6H9.5A1.5,1.5,0,1,1,11,4.5Zm1,6.05829c-.01935-.01978-.03851-.03894-.05829-.05829.01978-.01935.03894-.03851.05829-.05829.01935.01978.03851.03894.05829.05829C12.03851,12.01935,12.01935,12.03851,12,12.05829ZM14.5,21A1.50164,1.50164,0,0,1,13,19.5V18h1.5a1.5,1.5,0,0,1,0,3Zm5-5h-5a1.5,1.5,0,0,1,0-3h5a1.5,1.5,0,0,1,0,3Zm0-5H18V9.5A1.5,1.5,0,1,1,19.5,11Z"/></svg>',
                ),
                array(
                    'keys' => 'slack',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M2,14.67a2,2,0,1,0,4,0v-2H4A2,2,0,0,0,2,14.67Zm12.64-3.34a2,2,0,0,0,2-2V4a2,2,0,1,0-4,0V9.33A2,2,0,0,0,14.66,11.33Zm7.32-2a2,2,0,1,0-4,0v2h2A2,2,0,0,0,22,9.33ZM9.34,12.67a2,2,0,0,0-2,2V20a2,2,0,1,0,4,0V14.67A2,2,0,0,0,9.34,12.67ZM14.66,18h-2v2a2,2,0,1,0,2-2ZM20,12.67H14.66a2,2,0,0,0,0,4H20a2,2,0,0,0,0-4ZM9.34,7.33H4a2,2,0,1,0,0,4H9.34a2,2,0,0,0,0-4ZM9.34,2a2,2,0,0,0,0,4h2V4A2,2,0,0,0,9.34,2Z"/></svg>',
                ),
                array(
                    'keys' => 'slider-h-range',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,11H19.81573a2.98208,2.98208,0,0,0-5.63146,0H9.81573a2.98208,2.98208,0,0,0-5.63146,0H3a1,1,0,0,0,0,2H4.18433a2.982,2.982,0,0,0,5.6314,0h4.3686a2.982,2.982,0,0,0,5.6314,0H21a1,1,0,0,0,0-2ZM7,13a1,1,0,1,1,1-1A1.0013,1.0013,0,0,1,7,13Zm10,0a1,1,0,1,1,1-1A1.0013,1.0013,0,0,1,17,13Z"/></svg>',
                ),
                array(
                    'keys' => 'slider-h',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,11H17.81573a2.98208,2.98208,0,0,0-5.63146,0H3a1,1,0,0,0,0,2h9.18433a2.982,2.982,0,0,0,5.6314,0H21a1,1,0,0,0,0-2Zm-6,2a1,1,0,1,1,1-1A1.0013,1.0013,0,0,1,15,13Z"/></svg>',
                ),
                array(
                    'keys' => 'sliders-v-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,8.18V3a1,1,0,0,0-2,0V8.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V13.82a3,3,0,0,0,0-5.64ZM19,12a1,1,0,1,1,1-1A1,1,0,0,1,19,12Zm-6,2.18V3a1,1,0,0,0-2,0V14.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V19.82a3,3,0,0,0,0-5.64ZM12,18a1,1,0,1,1,1-1A1,1,0,0,1,12,18ZM6,6.18V3A1,1,0,0,0,4,3V6.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V11.82A3,3,0,0,0,6,6.18ZM5,10A1,1,0,1,1,6,9,1,1,0,0,1,5,10Z"/></svg>',
                ),
                array(
                    'keys' => 'sliders-v',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,6H6V3A1,1,0,0,0,4,3V6H3A1,1,0,0,0,3,8H7A1,1,0,0,0,7,6ZM5,10a1,1,0,0,0-1,1V21a1,1,0,0,0,2,0V11A1,1,0,0,0,5,10Zm7,8a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V19A1,1,0,0,0,12,18Zm9-8H20V3a1,1,0,0,0-2,0v7H17a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-2,4a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V15A1,1,0,0,0,19,14Zm-5,0H13V3a1,1,0,0,0-2,0V14H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'smile-beam',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM9.21,10.54a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41,3.08,3.08,0,0,0-4.24,0,1,1,0,1,0,1.41,1.41A1,1,0,0,1,9.21,10.54Zm8.41-1.41a3.08,3.08,0,0,0-4.24,0,1,1,0,0,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0A1,1,0,0,0,17.62,9.13ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'smile-dizzy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM9,11.71l.29-.3.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29.3-.29A1,1,0,0,0,9.54,8.29l-.29.3L9,8.29A1,1,0,1,0,7.54,9.71l.3.29-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17,8.29a1,1,0,0,0-1.42,0l-.29.3L15,8.29a1,1,0,0,0-1.42,1.42l.3.29-.3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l.29-.3.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29.3-.29A1,1,0,0,0,17,8.29Z"/></svg>',
                ),
                array(
                    'keys' => 'smile-squint-wink-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm5.16,1.21a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L14.79,10l.79-.79a1,1,0,1,0-1.42-1.42l-1.5,1.5a1,1,0,0,0,0,1.42ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm2.36-5.77a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54Z"/></svg>',
                ),
                array(
                    'keys' => 'smile-squint-wink',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.42,12.21a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1.5-1.5a1,1,0,0,0,0-1.42l-1.5-1.5A1,1,0,1,0,8.42,9.21l.79.79-.79.79A1,1,0,0,0,8.42,12.21Zm5.94,2a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM15,9a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'smile-wink-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm5.36,3.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM17.62,9.13a3.08,3.08,0,0,0-4.24,0,1,1,0,0,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0A1,1,0,0,0,17.62,9.13Z"/></svg>',
                ),
                array(
                    'keys' => 'smile-wink',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM10.5,10A1.5,1.5,0,1,0,9,11.5,1.5,1.5,0,0,0,10.5,10ZM15,9H14a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'smile',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.36,14.23a3.76,3.76,0,0,1-4.72,0,1,1,0,0,0-1.28,1.54,5.68,5.68,0,0,0,7.28,0,1,1,0,1,0-1.28-1.54ZM9,11a1,1,0,1,0-1-1A1,1,0,0,0,9,11Zm6-2a1,1,0,1,0,1,1A1,1,0,0,0,15,9ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'snapchat-alt',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Snapchat</title><path d="M21.95117,15.61426a4.72447,4.72447,0,0,1-2.98144-2.17285,1,1,0,1,0-1.65625,1.12109,7.68775,7.68775,0,0,0,2.40234,2.334c-.13477.0254-.28125.04981-.44141.0752a1.36673,1.36673,0,0,0-1.07617,1.207,6.06237,6.06237,0,0,0-2.01465-.00391,4.64069,4.64069,0,0,0-1.958.95606,3.48426,3.48426,0,0,1-2.10352.87109h-.26074a3.485,3.485,0,0,1-2.10547-.873,4.62737,4.62737,0,0,0-1.92871-.94922,6.39,6.39,0,0,0-2.04.0039,1.3679,1.3679,0,0,0-1.0625-1.21c-.15723-.02441-.30176-.04883-.43457-.07422a6.85691,6.85691,0,0,0,1.79492-1.499,6.7141,6.7141,0,0,0,.63477-.86816.99986.99986,0,0,0-1.69532-1.06055,4.90731,4.90731,0,0,1-.44824.61621,4.252,4.252,0,0,1-2.55273,1.52832A1.22412,1.22412,0,0,0,.99121,16.85156a1.28037,1.28037,0,0,0,.11524.53321c.31543.71582,1.15527,1.168,2.78417,1.47461l.03126.12988c.02832.11816.05761.23828.09179.34765a1.28858,1.28858,0,0,0,1.27832.94532,2.59082,2.59082,0,0,0,.60254-.08692,4.66937,4.66937,0,0,1,1.58887-.0459,3.008,3.008,0,0,1,1.12305.61719A5.41315,5.41315,0,0,0,11.86133,22.002h.26074a5.44479,5.44479,0,0,0,3.27344-1.248,2.915,2.915,0,0,1,1.13183-.60938,3.48494,3.48494,0,0,1,.624-.05273,4.27087,4.27087,0,0,1,.95508.10644,3.78837,3.78837,0,0,0,.61523.06348,1.25616,1.25616,0,0,0,1.24512-.92285c.03808-.12207.06738-.23926.09472-.35449l.03125-.124c1.624-.30566,2.4668-.75488,2.76758-1.44043a1.17069,1.17069,0,0,0,.127-.47949A1.24436,1.24436,0,0,0,21.95117,15.61426ZM3.80176,11.14844a1.00451,1.00451,0,0,0,1.05664-.48438,3.13849,3.13849,0,0,0,1.27441.33789,1.79447,1.79447,0,0,0,1.26563-.499,1.00048,1.00048,0,0,0,.3164-.79l-.03613-.60156A9.90221,9.90221,0,0,1,7.835,5.5498a4.2597,4.2597,0,0,1,3.96582-2.54394l.3877-.00391a4.26391,4.26391,0,0,1,3.96,2.54688,9.9174,9.9174,0,0,1,.15625,3.56445l-.00977.16309-.02734.44336a1.028,1.028,0,0,0,.3125.77832,1.79536,1.79536,0,0,0,1.2539.50293,3.27129,3.27129,0,0,0,1.24122-.36524,1.00091,1.00091,0,0,0,.916.59864h.01758a1.00021,1.00021,0,0,0,.98242-1.01758,1.64158,1.64158,0,0,0-1.18555-1.45118,1.91432,1.91432,0,0,0-1.47656.01075,9.4713,9.4713,0,0,0-.35449-4.042,6.23557,6.23557,0,0,0-5.7959-3.73243l-.39258.00391A6.22235,6.22235,0,0,0,6.00879,4.73535a9.58634,9.58634,0,0,0-.35156,4.09473c-.03418-.01563-.07129-.0332-.11133-.05176A1.90859,1.90859,0,0,0,3.00879,9.97656,1.00153,1.00153,0,0,0,3.80176,11.14844Z"/></svg>',
                ),
                array(
                    'keys' => 'snapchat-ghost',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Artboard 10 copy 6</title><path d="M21.79755,16.98718c-2.86621-.47223-4.15094-3.40149-4.204-3.52588l-.00544-.01172a1.07048,1.07048,0,0,1-.10223-.89758c.19251-.45361.82935-.6557,1.25134-.78967.10535-.03339.205-.065.28315-.096.76275-.30127.91784-.61316.91406-.8219a.66226.66226,0,0,0-.50134-.54358l-.00568-.00213a.9462.9462,0,0,0-.35632-.06824.7546.7546,0,0,0-.31287.06207,2.54,2.54,0,0,1-.95526.26612.82134.82134,0,0,1-.52954-.17725c.00915-.16992.02-.34522.0318-.53046l.004-.0653a10.10231,10.10231,0,0,0-.24091-4.03449,5.2482,5.2482,0,0,0-4.87311-3.1394q-.20114.0021-.4024.00378A5.23959,5.23959,0,0,0,6.92853,5.75293,10.08988,10.08988,0,0,0,6.68726,9.784q.01941.29872.036.59771a.8483.8483,0,0,1-.5838.17841,2.45322,2.45322,0,0,1-1.014-.26776.57538.57538,0,0,0-.2453-.04895.83387.83387,0,0,0-.81061.53265c-.08191.43061.5329.74256.90668.8902.079.03137.17822.0628.28308.096.42169.13385,1.05908.33606,1.25152.78985a1.07171,1.07171,0,0,1-.10223.89783l-.00537.01154a7.02828,7.02828,0,0,1-1.06915,1.66211,5.21488,5.21488,0,0,1-3.13483,1.86389.23978.23978,0,0,0-.20044.25006.38046.38046,0,0,0,.031.12964c.17578.41113,1.05822.75061,2.55182.981.13964.02161.19873.24927.28027.6222.03259.14929.06634.30426.1134.46423a.29261.29261,0,0,0,.31922.22876,2.48528,2.48528,0,0,0,.42492-.06091,5.52912,5.52912,0,0,1,1.12036-.12677,4.95367,4.95367,0,0,1,.8078.0683,3.87725,3.87725,0,0,1,1.535.78417,4.443,4.443,0,0,0,2.6897,1.06006c.03375,0,.06744-.00122.10009-.004.04114.00195.09522.004.15192.004a4.44795,4.44795,0,0,0,2.69122-1.06079,3.87269,3.87269,0,0,1,1.53351-.78332,4.97275,4.97275,0,0,1,.808-.0683,5.59252,5.59252,0,0,1,1.12037.11871,2.39142,2.39142,0,0,0,.425.05371h.02338a.279.279,0,0,0,.29547-.221c.04645-.15784.08045-.308.11389-.46131.08081-.371.1399-.59759.28009-.61926,1.494-.23078,2.37641-.56976,2.551-.97858a.38487.38487,0,0,0,.03174-.13086A.24.24,0,0,0,21.79755,16.98718Z"/></svg>',
                ),
                array(
                    'keys' => 'snapchat-square',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Artboard 9 copy 6</title><path d="M21.97333,6.68079a6.124,6.124,0,0,0-.09876-1.074,4.37223,4.37223,0,0,0-.4057-1.24566,4.32419,4.32419,0,0,0-.83166-1.11036,4.12544,4.12544,0,0,0-1.81574-1.03607,7.36011,7.36011,0,0,0-1.92-.20483L16.89777,2H7.09906l-.00055.00989a10.48784,10.48784,0,0,0-1.10089.04925,5.243,5.243,0,0,0-1.17609.26477A4.26175,4.26175,0,0,0,2.21918,5.17023a7.33786,7.33786,0,0,0-.20484,1.9046L2.00775,16.913v.00086a9.44465,9.44465,0,0,0,.09058,1.33179,4.61631,4.61631,0,0,0,.40924,1.3457,4.30506,4.30506,0,0,0,1.20166,1.45331,3.9027,3.9027,0,0,0,1.20239.65173,6.51637,6.51637,0,0,0,1.97687.29047c.41937.00262.83844.01312,1.258.01135,3.04664-.01282,6.09333.022,9.14008-.0188a7.18977,7.18977,0,0,0,1.19879-.12738,4.06007,4.06007,0,0,0,2.00769-.97668,4.16178,4.16178,0,0,0,1.32642-2.21228,8.06159,8.06159,0,0,0,.17273-1.75019v-.11718C21.99219,16.75024,21.97491,6.81219,21.97333,6.68079ZM19.29724,15.9306c-.12787.29938-.774.54761-1.86792.71656-.10266.01586-.14593.18182-.20508.45349-.02447.11218-.04937.22216-.08343.33777a.20428.20428,0,0,1-.21631.1618h-.01715a1.74575,1.74575,0,0,1-.31122-.03937,4.09738,4.09738,0,0,0-.82037-.08685,3.63726,3.63726,0,0,0-.59162.05,2.836,2.836,0,0,0-1.12286.57354,3.25673,3.25673,0,0,1-1.97064.77674c-.04151,0-.08112-.00147-.11121-.00293-.02392.00207-.04858.00293-.0733.00293a3.25323,3.25323,0,0,1-1.96948-.77619,2.83977,2.83977,0,0,0-1.124-.57422,3.63334,3.63334,0,0,0-.59149-.05,4.04744,4.04744,0,0,0-.82031.09283,1.82073,1.82073,0,0,1-.31116.04462.21421.21421,0,0,1-.2337-.16754c-.03449-.11713-.05921-.23059-.08307-.33991-.05969-.27307-.103-.43976-.2052-.45556C5.474,16.47955,4.82782,16.231,4.69916,15.93a.27773.27773,0,0,1-.02271-.095.17561.17561,0,0,1,.14679-.1831,3.8182,3.8182,0,0,0,2.29535-1.36481,5.145,5.145,0,0,0,.7829-1.217l.004-.00842a.78492.78492,0,0,0,.07483-.65741c-.14093-.33228-.60761-.48035-.91639-.57831-.07678-.02429-.14941-.0473-.20727-.07031-.27374-.1081-.72388-.33655-.66394-.65186a.6107.6107,0,0,1,.59356-.39.42052.42052,0,0,1,.17963.03588,1.79643,1.79643,0,0,0,.74243.196.62144.62144,0,0,0,.42749-.13062q-.01207-.2189-.02636-.43768a7.38812,7.38812,0,0,1,.17663-2.95166A3.83671,3.83671,0,0,1,11.8479,5.12848l.29468-.00275a3.84306,3.84306,0,0,1,3.56824,2.29871,7.39771,7.39771,0,0,1,.17639,2.95422l-.003.04779c-.00861.13562-.01654.264-.02332.38843a.60229.60229,0,0,0,.38782.12976,1.85974,1.85974,0,0,0,.6994-.19482.55227.55227,0,0,1,.22913-.04547.69414.69414,0,0,1,.26092.04992l.00409.00159a.485.485,0,0,1,.36719.39807c.00274.15277-.11084.38117-.66937.60181-.05719.02264-.13019.04577-.20728.07025-.309.09808-.77533.24609-.91626.57818a.78359.78359,0,0,0,.07483.65723l.004.00861a4.52238,4.52238,0,0,0,3.07831,2.58172.17581.17581,0,0,1,.14678.18311A.28042.28042,0,0,1,19.29724,15.9306Z"/></svg>',
                ),
                array(
                    'keys' => 'snow-flake',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11H19.41l1.3-1.29a1,1,0,0,0-1.42-1.42L16.59,11H14.41l2.3-2.29a1,1,0,1,0-1.42-1.42L13,9.59V7.41l2.71-2.7a1,1,0,1,0-1.42-1.42L13,4.59V3a1,1,0,0,0-2,0V4.59L9.71,3.29A1,1,0,0,0,8.29,4.71L11,7.41V9.59L8.71,7.29A1,1,0,1,0,7.29,8.71L9.59,11H7.41L4.71,8.29A1,1,0,0,0,3.29,9.71L4.59,11H3a1,1,0,0,0,0,2H4.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7.41,13H9.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L11,14.41v2.18l-2.71,2.7a1,1,0,0,0,1.42,1.42L11,19.41V21a1,1,0,0,0,2,0V19.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13,16.59V14.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L14.41,13h2.18l2.7,2.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L19.41,13H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'snowflake-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M4.93,17.66a1,1,0,1,0,1.41,0A1,1,0,0,0,4.93,17.66ZM19.07,6.34a1,1,0,1,0-1.41,0A1,1,0,0,0,19.07,6.34Zm-12.73,0a1,1,0,1,0-1.41,0A1,1,0,0,0,6.34,6.34ZM17.66,17.66a1,1,0,1,0,1.41,0A1,1,0,0,0,17.66,17.66ZM21,11H19.41l1.3-1.29a1,1,0,0,0-1.42-1.42L16.59,11H14.41l2.3-2.29a1,1,0,1,0-1.42-1.42L13,9.59V7.41l2.71-2.7a1,1,0,1,0-1.42-1.42L13,4.59V3a1,1,0,0,0-2,0V4.59L9.71,3.29A1,1,0,0,0,8.29,4.71L11,7.41V9.59L8.71,7.29A1,1,0,1,0,7.29,8.71L9.59,11H7.41L4.71,8.29A1,1,0,0,0,3.29,9.71L4.59,11H3a1,1,0,0,0,0,2H4.59l-1.3,1.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L7.41,13H9.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L11,14.41v2.18l-2.71,2.7a1,1,0,0,0,1.42,1.42L11,19.41V21a1,1,0,0,0,2,0V19.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13,16.59V14.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L14.41,13h2.18l2.7,2.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L19.41,13H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'snowflake',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.16,16.13l-2-1.15.89-.24a1,1,0,1,0-.52-1.93l-2.82.76L14,12l2.71-1.57,2.82.76.26,0a1,1,0,0,0,.26-2L19.16,9l2-1.15a1,1,0,0,0-1-1.74L18,7.37l.3-1.11a1,1,0,1,0-1.93-.52l-.82,3L13,10.27V7.14l2.07-2.07a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L13,4.31V2a1,1,0,0,0-2,0V4.47l-.81-.81a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41L11,7.3v3L8.43,8.78l-.82-3a1,1,0,1,0-1.93.52L6,7.37,3.84,6.13a1,1,0,0,0-1,1.74L4.84,9,4,9.26a1,1,0,0,0,.26,2l.26,0,2.82-.76L10,12,7.29,13.57l-2.82-.76A1,1,0,1,0,4,14.74l.89.24-2,1.15a1,1,0,0,0,1,1.74L6,16.63l-.3,1.11A1,1,0,0,0,6.39,19a1.15,1.15,0,0,0,.26,0,1,1,0,0,0,1-.74l.82-3L11,13.73v3.13L8.93,18.93a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.71-.3l.65-.65V22a1,1,0,0,0,2,0V19.53l.81.81a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41L13,16.7v-3l2.57,1.49.82,3a1,1,0,0,0,1,.74,1.15,1.15,0,0,0,.26,0,1,1,0,0,0,.71-1.23L18,16.63l2.14,1.24a1,1,0,1,0,1-1.74Z"/></svg>',
                ),
                array(
                    'keys' => 'social-distancing',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.5,17H5.91406l.293-.293A.99989.99989,0,0,0,4.793,15.293l-1.9997,1.99969a1.00354,1.00354,0,0,0,0,1.41468L4.793,20.707A.99989.99989,0,0,0,6.207,19.293L5.91406,19H8.5a1,1,0,0,0,0-2Zm12.70673.29266L19.207,15.293A.99989.99989,0,0,0,17.793,16.707l.293.293H15.5a1,1,0,0,0,0,2h2.58594l-.293.293A.99989.99989,0,1,0,19.207,20.707l1.9997-1.99969a1.00354,1.00354,0,0,0,0-1.41468Zm-.56647-7.52087A3.46849,3.46849,0,0,0,21.5,7.5a3.5,3.5,0,0,0-7,0,3.46849,3.46849,0,0,0,.85974,2.27179A4.98821,4.98821,0,0,0,13,14a1,1,0,0,0,2,0,3,3,0,0,1,6,0,1,1,0,0,0,2,0A4.98821,4.98821,0,0,0,20.64026,9.77179ZM18,9a1.5,1.5,0,1,1,1.5-1.5A1.50164,1.50164,0,0,1,18,9Zm-9.35974.77179A3.46849,3.46849,0,0,0,9.5,7.5a3.5,3.5,0,0,0-7,0,3.46849,3.46849,0,0,0,.85974,2.27179A4.98821,4.98821,0,0,0,1,14a1,1,0,0,0,2,0,3,3,0,0,1,6,0,1,1,0,0,0,2,0A4.98821,4.98821,0,0,0,8.64026,9.77179ZM6,9A1.5,1.5,0,1,1,7.5,7.5,1.50164,1.50164,0,0,1,6,9Z"/></svg>',
                ),
                array(
                    'keys' => 'sort-amount-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M6.29,14.29l-.29.3V7A1,1,0,0,0,4,7v7.59l-.29-.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l2-2a1,1,0,0,0-1.42-1.42ZM11,8H21a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm10,3H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0,5H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'sort-amount-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M5.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-2,2A1,1,0,0,0,3.71,9.71L4,9.41V17a1,1,0,0,0,2,0V9.41l.29.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM11,8H21a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm10,8H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-5H11a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'sort',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.29,14.29,12,18.59l-4.29-4.3a1,1,0,0,0-1.42,1.42l5,5a1,1,0,0,0,1.42,0l5-5a1,1,0,0,0-1.42-1.42ZM7.71,9.71,12,5.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-5-5a1,1,0,0,0-1.42,0l-5,5A1,1,0,0,0,7.71,9.71Z"/></svg>',
                ),
                array(
                    'keys' => 'sorting',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,10.21a1,1,0,0,0,1.42,0l3-3a1,1,0,1,0-1.42-1.42L12,8.09,9.71,5.79A1,1,0,0,0,8.29,7.21Zm1.42,4.58a1,1,0,0,0-1.42,0l-3,3a1,1,0,0,0,1.42,1.42L12,16.91l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'space-key',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,9a1,1,0,0,0-1,1v3H4V10a1,1,0,0,0-2,0v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V10A1,1,0,0,0,21,9Z"/></svg>',
                ),
                array(
                    'keys' => 'spade',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.06,12.28a5.69,5.69,0,0,0-1.67-4L14,2.81a2.83,2.83,0,0,0-4,0L4.61,8.23a5.69,5.69,0,0,0-1.67,4A5.7,5.7,0,0,0,8.66,18h0a6.88,6.88,0,0,1-1.23,2.37A1,1,0,0,0,8.24,22h7.52a1,1,0,0,0,.78-1.63A6.84,6.84,0,0,1,15.31,18a5.69,5.69,0,0,0,5.75-5.71ZM18,14.91a3.78,3.78,0,0,1-3.66.95,1,1,0,0,0-.17,0l-.2,0h0a1.41,1.41,0,0,0-.22.06l-.15,0a.69.69,0,0,0-.13.11.75.75,0,0,0-.17.14.6.6,0,0,1-.06.11,2.53,2.53,0,0,0-.12.23v0a1.1,1.1,0,0,0,0,.18c0,.06,0,.12,0,.18v0h0A8.84,8.84,0,0,0,13.94,20H10.06A8.62,8.62,0,0,0,10.94,17h0v0c0-.06,0-.12,0-.19a1.1,1.1,0,0,0,0-.18h0a1.12,1.12,0,0,0-.13-.24.53.53,0,0,0-.06-.1.54.54,0,0,0-.16-.14,1.27,1.27,0,0,0-.13-.11l-.14,0a.88.88,0,0,0-.23-.07h0l-.19,0a1.1,1.1,0,0,0-.18,0A3.81,3.81,0,0,1,6,14.91a3.75,3.75,0,0,1-1.09-2.63A3.69,3.69,0,0,1,6,9.65l5.4-5.42a.81.81,0,0,1,1.13,0L18,9.65a3.69,3.69,0,0,1,1.09,2.63A3.78,3.78,0,0,1,18,14.91Z"/></svg>',
                ),
                array(
                    'keys' => 'sperms',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.06,20.1a2,2,0,0,1-.65-.48,2.47,2.47,0,0,1-.67-1.14,4.19,4.19,0,0,0-1.31-2.06,3.57,3.57,0,0,0-1-3.28,3.28,3.28,0,0,0-4.59-.35,3.29,3.29,0,0,0,.35,4.6A3.87,3.87,0,0,0,5.4,18.51l.36,0a2.85,2.85,0,0,0,1.53-.44A2.05,2.05,0,0,1,7.8,19,4.46,4.46,0,0,0,9,21a4.27,4.27,0,0,0,1.2.88,1,1,0,0,0,.44.1,1,1,0,0,0,.44-1.9ZM6.32,16.33a.86.86,0,0,1-.7.19A1.8,1.8,0,0,1,4.56,16c-.57-.56-.73-1.39-.36-1.77a.82.82,0,0,1,.56-.2A1.8,1.8,0,0,1,6,14.56a1.8,1.8,0,0,1,.55,1.06A.86.86,0,0,1,6.32,16.33Zm15-6.12a2.17,2.17,0,0,1-.91-.59,2.47,2.47,0,0,1-.67-1.14,4.19,4.19,0,0,0-1.31-2.06,3.57,3.57,0,0,0-1.05-3.28,3.28,3.28,0,0,0-4.59-.35,3.29,3.29,0,0,0,.35,4.6A3.87,3.87,0,0,0,15.4,8.51l.36,0a2.85,2.85,0,0,0,1.53-.44A2.05,2.05,0,0,1,17.8,9,4.54,4.54,0,0,0,19,11a4.36,4.36,0,0,0,1.7,1.08,1.25,1.25,0,0,0,.32.05,1,1,0,0,0,.95-.68A1,1,0,0,0,21.32,10.21Zm-5-3.88a.86.86,0,0,1-.7.19A1.8,1.8,0,0,1,14.56,6c-.57-.56-.73-1.39-.36-1.77a.82.82,0,0,1,.56-.2A1.8,1.8,0,0,1,16,4.56a1.8,1.8,0,0,1,.55,1.06A.86.86,0,0,1,16.32,6.33Zm5.39,14.12a4.45,4.45,0,0,0-3.23-3.23,3.18,3.18,0,0,1-1.39-.82,2.93,2.93,0,0,1-.8-1.38A4.65,4.65,0,0,0,13,11.77a2.92,2.92,0,0,1-1.38-.8,3,3,0,0,1-.81-1.39,4.68,4.68,0,0,0-1-1.86A3.94,3.94,0,0,0,10,6.22a4.75,4.75,0,0,0-1.4-2.8A4.78,4.78,0,0,0,5.78,2,3.43,3.43,0,0,0,3,3,3.43,3.43,0,0,0,2,5.78a4.75,4.75,0,0,0,1.4,2.8A4.78,4.78,0,0,0,6.22,10l.43,0a3.39,3.39,0,0,0,2-.6,2.64,2.64,0,0,1,.31.71,5.12,5.12,0,0,0,3.6,3.59,2.61,2.61,0,0,1,1.83,1.84,5.11,5.11,0,0,0,3.6,3.6A2.57,2.57,0,0,1,19.79,21a2.8,2.8,0,0,0,.16.46,1,1,0,0,0,.88.54,1.21,1.21,0,0,0,.44-.1,1,1,0,0,0,.48-1.33S21.72,20.47,21.71,20.45ZM7.64,7.64c-.64.63-1.92.41-2.81-.47A2.78,2.78,0,0,1,4,5.56a1.47,1.47,0,0,1,.35-1.2,1.39,1.39,0,0,1,1-.36,2.71,2.71,0,0,1,1.83.83A2.78,2.78,0,0,1,8,6.44,1.47,1.47,0,0,1,7.64,7.64Z"/></svg>',
                ),
                array(
                    'keys' => 'spin',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,3a7,7,0,0,0,0,14A5,5,0,0,0,13,7a3,3,0,0,0,0,6,1,1,0,0,0,0-2,1,1,0,0,1,0-2,3,3,0,0,1,0,6A5,5,0,0,1,13,5a7,7,0,0,1,0,14,9,9,0,0,1-9-9,1,1,0,0,0-2,0A11,11,0,0,0,13,21,9,9,0,0,0,13,3Z"/></svg>',
                ),
                array(
                    'keys' => 'square-full',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'square-shape',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,2H7A5,5,0,0,0,2,7V17a5,5,0,0,0,5,5H17a5,5,0,0,0,5-5V7A5,5,0,0,0,17,2Zm3,15a3,3,0,0,1-3,3H7a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4H17a3,3,0,0,1,3,3Z"/></svg>',
                ),
                array(
                    'keys' => 'square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'squint',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,14H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9.08,12.21l1.5-1.5a1,1,0,0,0,0-1.42l-1.5-1.5A1,1,0,0,0,7.66,9.21l.8.79-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29A1,1,0,0,0,9.08,12.21ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM16.58,7.79a1,1,0,0,0-1.42,0l-1.5,1.5a1,1,0,0,0,0,1.42l1.5,1.5a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42L15.79,10l.79-.79A1,1,0,0,0,16.58,7.79Z"/></svg>',
                ),
                array(
                    'keys' => 'star-half-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67ZM11,17l-3.23,1.7.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L11,7.73Zm4.8-3.38a1,1,0,0,0-.29.88l.72,4.2L13,17V7.73l.88,1.79a1,1,0,0,0,.76.55l4.21.61Z"/></svg>',
                ),
                array(
                    'keys' => 'star',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68a1,1,0,0,0,.4,1,1,1,0,0,0,1.05.07L12,18.76l5.1,2.68a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.89l.72,4.19-3.76-2a1,1,0,0,0-.94,0l-3.76,2,.72-4.19a1,1,0,0,0-.29-.89l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg>',
                ),
                array(
                    'keys' => 'step-backward-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,3a3,3,0,0,0-3,3V18a3,3,0,0,0,6,0V6A3,3,0,0,0,19,3Zm1,15a1,1,0,0,1-2,0V6a1,1,0,0,1,2,0ZM12.63,5.63a2.6,2.6,0,0,0-2.64,0l-6.67,4a2.75,2.75,0,0,0,0,4.7l6.67,4a2.57,2.57,0,0,0,2.64,0A2.74,2.74,0,0,0,14,16V8A2.74,2.74,0,0,0,12.63,5.63ZM12,16a.72.72,0,0,1-.36.64.61.61,0,0,1-.63,0l-6.66-4a.76.76,0,0,1,0-1.28l6.66-4a.63.63,0,0,1,.32-.09.64.64,0,0,1,.31.08A.72.72,0,0,1,12,8Z"/></svg>',
                ),
                array(
                    'keys' => 'step-backward-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.5,7.38a2,2,0,0,0-2,0l-4,2.31V8a1,1,0,0,0-2,0v8a1,1,0,0,0,2,0V14.31l4,2.31a2,2,0,0,0,2,0,2,2,0,0,0,1-1.73V9.11A2,2,0,0,0,15.5,7.38Zm-1,7.51L9.5,12h0l5-2.89ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'step-backward',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20.28,3.43a3.23,3.23,0,0,0-3.29,0L8,8.84V6A3,3,0,0,0,2,6V18a3,3,0,0,0,6,0V15.16l9,5.37a3.28,3.28,0,0,0,1.68.47,3.24,3.24,0,0,0,1.61-.43,3.38,3.38,0,0,0,1.72-3V6.42A3.38,3.38,0,0,0,20.28,3.43ZM6,18a1,1,0,0,1-2,0V6A1,1,0,0,1,6,6Zm14-.42a1.4,1.4,0,0,1-.71,1.25,1.23,1.23,0,0,1-1.28,0L8.68,13.23a1.45,1.45,0,0,1,0-2.46L18,5.19A1.23,1.23,0,0,1,18.67,5a1.29,1.29,0,0,1,.62.17A1.4,1.4,0,0,1,20,6.42Z"/></svg>',
                ),
                array(
                    'keys' => 'step-forward',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.71,7.29A1,1,0,1,0,7.29,8.71L10.59,12l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,0-1.42ZM16,7a1,1,0,0,0-1,1v8a1,1,0,0,0,2,0V8A1,1,0,0,0,16,7Z"/></svg>',
                ),
                array(
                    'keys' => 'stethoscope-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,8a2.99253,2.99253,0,0,0-1,5.81567V15.5a4.5,4.5,0,0,1-9,0V14.48047l3.124-2.49854A4.976,4.976,0,0,0,14,8.07764V3a1,1,0,0,0-1-1H11a1,1,0,0,0,0,2h1V8.07764a2.98608,2.98608,0,0,1-1.12549,2.34277L8,12.71924,5.126,10.42041A2.985,2.985,0,0,1,4,8.07764V4H5A1,1,0,0,0,5,2H3A1,1,0,0,0,2,3V8.07764a4.975,4.975,0,0,0,1.87646,3.90429L7,14.48041V15.5a6.5,6.5,0,0,0,13,0V13.81573A2.99257,2.99257,0,0,0,19,8Zm0,4a1,1,0,1,1,1-1A1.0013,1.0013,0,0,1,19,12Z"/></svg>',
                ),
                array(
                    'keys' => 'stethoscope',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,8a2.99253,2.99253,0,0,0-1,5.81567V15.5a4.5,4.5,0,0,1-9,0v-.59033A6.00448,6.00448,0,0,0,14,9V3a1,1,0,0,0-1-1H11a1,1,0,0,0,0,2h1V9A4,4,0,0,1,4,9V4H5A1,1,0,0,0,5,2H3A1,1,0,0,0,2,3V9a6.00448,6.00448,0,0,0,5,5.90967V15.5a6.5,6.5,0,0,0,13,0V13.81573A2.99257,2.99257,0,0,0,19,8Zm0,4a1,1,0,1,1,1-1A1.0013,1.0013,0,0,1,19,12Z"/></svg>',
                ),
                array(
                    'keys' => 'stop-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,8H9A1,1,0,0,0,8,9v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V9A1,1,0,0,0,15,8Zm-1,6H10V10h4ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'stopwatch-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.6,5.63a1,1,0,0,0,.36,2,6.18,6.18,0,0,1,1-.09,6,6,0,0,1,6,6,6.18,6.18,0,0,1-.09,1,1,1,0,0,0,.8,1.16l.18,0a1,1,0,0,0,1-.82A7.45,7.45,0,0,0,20,13.5a8,8,0,0,0-1.7-4.91l.91-.9a1,1,0,0,0-1.42-1.42l-.9.91A8,8,0,0,0,12,5.5,7.45,7.45,0,0,0,10.6,5.63ZM10,4.5h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Zm3.49,9.08s0-.05,0-.08,0-.05,0-.08l1.34-1.33a1,1,0,1,0-1.42-1.42L12.08,12h-.16L5.71,5.79A1,1,0,0,0,4.29,7.21l.48.48h0l.91.91A8,8,0,0,0,16.9,19.82l1.39,1.39a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM12,19.5A6,6,0,0,1,7.11,10l3.4,3.39s0,.05,0,.08A1.5,1.5,0,0,0,12,15h.08l3.39,3.4A6,6,0,0,1,12,19.5Z"/></svg>',
                ),
                array(
                    'keys' => 'stopwatch',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.3,8.59l.91-.9a1,1,0,0,0-1.42-1.42l-.9.91a8,8,0,0,0-9.79,0l-.91-.92A1,1,0,0,0,4.77,7.69l.92.91A7.92,7.92,0,0,0,4,13.5,8,8,0,1,0,18.3,8.59ZM12,19.5a6,6,0,1,1,6-6A6,6,0,0,1,12,19.5Zm-2-15h4a1,1,0,0,0,0-2H10a1,1,0,0,0,0,2Zm3,6a1,1,0,0,0-2,0v1.89a1.5,1.5,0,1,0,2,0Z"/></svg>',
                ),
                array(
                    'keys' => 'store-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,2H2A1,1,0,0,0,1,3V7A3,3,0,0,0,3,9.82V21a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V9.82A3,3,0,0,0,23,7V3A1,1,0,0,0,22,2ZM15,4h2V7a1,1,0,0,1-2,0ZM11,4h2V7a1,1,0,0,1-2,0ZM7,4H9V7A1,1,0,0,1,7,7ZM4,8A1,1,0,0,1,3,7V4H5V7A1,1,0,0,1,4,8ZM14,20H10V16a2,2,0,0,1,4,0Zm5,0H16V16a4,4,0,0,0-8,0v4H5V9.82a3.17,3.17,0,0,0,1-.6,3,3,0,0,0,4,0,3,3,0,0,0,4,0,3,3,0,0,0,4,0,3.17,3.17,0,0,0,1,.6ZM21,7a1,1,0,0,1-2,0V4h2Z"/></svg>',
                ),
                array(
                    'keys' => 'store-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8.7002,4h9.62255l1.66163,4.15436A1.995,1.995,0,0,1,16,8a1,1,0,0,0-2,0,1.82572,1.82572,0,0,1-.13428.7085.99968.99968,0,0,0,.543,1.30566.94684.94684,0,0,0,.17438.03485A3.988,3.988,0,0,0,18,12v1.2998a1,1,0,0,0,2,0V11.44354A3.98539,3.98539,0,0,0,21.99609,8.0387c.00037-.00934.00263-.018.00275-.02741L22,8a.949.949,0,0,0-.03455-.171.95216.95216,0,0,0-.03674-.20062l-2-5A1.00073,1.00073,0,0,0,19,2H8.7002a1,1,0,1,0,0,2ZM22.707,21.293l-2.9331-2.93311a.94279.94279,0,0,0-.15363-.15362L9.67,8.256a.97257.97257,0,0,0-.20629-.2063L5.18219,3.76813a.9629.9629,0,0,0-.12793-.12793L2.707,1.293A.99989.99989,0,0,0,1.293,2.707L3.25653,4.67059,2.07867,7.61066l-.00012.0003-.00677.017a.953.953,0,0,0-.03473.18854A.94823.94823,0,0,0,2,8l.00116.01154.0025.02441A3.98555,3.98555,0,0,0,4,11.44354V21a1,1,0,0,0,1,1H19a.99324.99324,0,0,0,.93042-.65552L21.293,22.707A.99989.99989,0,0,0,22.707,21.293ZM4.01556,8.15375l.7782-1.94593L7.67,9.08405A1.97241,1.97241,0,0,1,6,10,1.99575,1.99575,0,0,1,4.01556,8.15375ZM9,15v5H6V12a3.96371,3.96371,0,0,0,3.10217-1.48376L12.58594,14H10A1,1,0,0,0,9,15Zm4,5H11V16h2Zm5,0H15V16.41406l3,3Z"/></svg>',
                ),
                array(
                    'keys' => 'store',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22,7.82a1.25,1.25,0,0,0,0-.19v0h0l-2-5A1,1,0,0,0,19,2H5a1,1,0,0,0-.93.63l-2,5h0v0a1.25,1.25,0,0,0,0,.19A.58.58,0,0,0,2,8H2V8a4,4,0,0,0,2,3.4V21a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V11.44A4,4,0,0,0,22,8V8h0A.58.58,0,0,0,22,7.82ZM13,20H11V16h2Zm5,0H15V15a1,1,0,0,0-1-1H10a1,1,0,0,0-1,1v5H6V12a4,4,0,0,0,3-1.38,4,4,0,0,0,6,0A4,4,0,0,0,18,12Zm0-10a2,2,0,0,1-2-2,1,1,0,0,0-2,0,2,2,0,0,1-4,0A1,1,0,0,0,8,8a2,2,0,0,1-4,.15L5.68,4H18.32L20,8.15A2,2,0,0,1,18,10Z"/></svg>',
                ),
                array(
                    'keys' => 'streering',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>',
                ),
                array(
                    'keys' => 'stretcher',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18,4.5h3a1,1,0,0,0,0-2H18a1,1,0,0,0,0,2Zm3,2H3a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H4.55l5.11,2.56L7.08,16.35A3,3,0,0,0,5,15.5a3,3,0,1,0,3,3,2.2,2.2,0,0,0,0-.36l3.94-2L16,18.24a2.3,2.3,0,0,0,0,.26,3,3,0,1,0,3-3,3,3,0,0,0-2.15.92l-2.72-1.36,5.11-2.56H21a1,1,0,0,0,1-1v-4A1,1,0,0,0,21,6.5ZM5,19.5a1,1,0,1,1,1-1A1,1,0,0,1,5,19.5Zm14-2a1,1,0,1,1-1,1A1,1,0,0,1,19,17.5Zm-7.1-3.56L9,12.5h5.75ZM20,10.5H4v-2H20Z"/></svg>',
                ),
                array(
                    'keys' => 'subject',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,16H3a1,1,0,0,0,0,2H13a1,1,0,0,0,0-2ZM3,8H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,8Zm18,3H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'subway-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15,17h1a1,1,0,0,0,0-2H15a1,1,0,0,0,0,2Zm6,0V9a3,3,0,0,0-3-3H13V4h4a1,1,0,0,0,0-2H7A1,1,0,0,0,7,4h4V6H6A3,3,0,0,0,3,9v8a3,3,0,0,0,1.2,2.39l-.91.9a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L6.41,20H17.59l1.7,1.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.91-.9A3,3,0,0,0,21,17ZM5,9A1,1,0,0,1,6,8h5v4H5Zm14,8a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V14H19Zm0-5H13V8h5a1,1,0,0,1,1,1ZM8,17H9a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'subway',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,17a1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.76.76,0,0,0-.09-.18l-.12-.15a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-.76,0,1.15,1.15,0,0,0-.33.21l-.12.15a.76.76,0,0,0-.09.18.64.64,0,0,0-.06.18,1.36,1.36,0,0,0,0,.2,1,1,0,0,0,1,1ZM18,2H6A3,3,0,0,0,3,5V17a3,3,0,0,0,1.2,2.39l-.91.9a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L6.41,20H17.59l1.7,1.71a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.91-.9A3,3,0,0,0,21,17V5A3,3,0,0,0,18,2ZM5,8h6v4H5Zm14,9a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V14H19Zm0-5H13V8h6Zm0-6H5V5A1,1,0,0,1,6,4H18a1,1,0,0,1,1,1ZM8,17a1,1,0,0,0,1-1,1.36,1.36,0,0,0,0-.2.64.64,0,0,0-.06-.18.76.76,0,0,0-.09-.18l-.12-.15a1.15,1.15,0,0,0-.33-.21,1,1,0,0,0-.76,0,1.15,1.15,0,0,0-.33.21l-.12.15a.76.76,0,0,0-.09.18A.64.64,0,0,0,7,15.8,1.36,1.36,0,0,0,7,16a1,1,0,0,0,.29.7A1,1,0,0,0,8,17Z"/></svg>',
                ),
                array(
                    'keys' => 'suitcase-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6H16V5a2,2,0,0,0-2-2H10A2,2,0,0,0,8,5V6H5A3,3,0,0,0,2,9v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9A3,3,0,0,0,19,6ZM10,5h4V6H10ZM20,18a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13H8v1a1,1,0,0,0,2,0V13h4v1a1,1,0,0,0,2,0V13h4Zm0-7H4V9A1,1,0,0,1,5,8H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'suitcase',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,6.5H16v-1a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v1H5a3,3,0,0,0-3,3v9a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3v-9A3,3,0,0,0,19,6.5Zm-9-1a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1v1H10Zm10,13a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13.45H7V14.5a1,1,0,0,0,2,0V13.45h6V14.5a1,1,0,0,0,2,0V13.45h3Zm0-7H4V9.5a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'sun',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>',
                ),
                array(
                    'keys' => 'sunset',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.66,8.34a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,6.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,8.34ZM12,6a1,1,0,0,0,1-1V4a1,1,0,0,0-2,0V5A1,1,0,0,0,12,6ZM4,12H3a1,1,0,0,0,0,2H4a1,1,0,0,0,0-2ZM5.64,8.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,7.34ZM21,12H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM11,19H8a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Zm7-4h-.88a5.39,5.39,0,0,0,.38-2,5.5,5.5,0,0,0-11,0,5.39,5.39,0,0,0,.38,2H6a1,1,0,0,0,0,2H18a1,1,0,0,0,0-2Zm-3.15,0H9.15a3.44,3.44,0,0,1-.65-2,3.5,3.5,0,0,1,7,0A3.44,3.44,0,0,1,14.85,15ZM16,19H15a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'surprise',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20ZM10,9a1,1,0,1,0-1,1A1,1,0,0,0,10,9Zm5-1a1,1,0,1,0,1,1A1,1,0,0,0,15,8Zm-3,3a3.39,3.39,0,0,0-3.25,3.5A3.39,3.39,0,0,0,12,18a3.39,3.39,0,0,0,3.25-3.5A3.39,3.39,0,0,0,12,11Zm0,5a1.39,1.39,0,0,1-1.25-1.5A1.39,1.39,0,0,1,12,13a1.39,1.39,0,0,1,1.25,1.5A1.39,1.39,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'swatchbook',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7,16a1,1,0,1,0,1,1A1,1,0,0,0,7,16Zm12.06-4,1.23-1.23a3,3,0,0,0,0-4.24L17.46,3.71a3,3,0,0,0-4.24,0L12,4.94A3,3,0,0,0,9,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A3,3,0,0,0,19.06,12ZM10,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H9a1,1,0,0,1,1,1ZM12,7.76l2.64-2.64a1,1,0,0,1,1.41,0L18.88,8a1,1,0,0,1,0,1.41L16,12.29h0L12,16.24ZM20,19a1,1,0,0,1-1,1H11.82a3.12,3.12,0,0,0,.17-.92L17.07,14H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'swiggy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12.878,5.92841a.297.297,0,0,1,.31378.335c.002.09192.00348.18384.0036.27575.00061.59241-.00238,1.18488.00208,1.77723.00329.43353.07947.517.49939.56909a14.83182,14.83182,0,0,0,3.14795-.04578,4.94837,4.94837,0,0,0,1.57287-.37384.50722.50722,0,0,0,.34461-.60242,6.83113,6.83113,0,0,0-5.3432-5.71106,6.60826,6.60826,0,0,0-3.64844.243A6.718,6.718,0,0,0,7.07709,4.147,6.27211,6.27211,0,0,0,5.23022,8.43164,11.18781,11.18781,0,0,0,6.7558,13.9494a1.34216,1.34216,0,0,0,1.32989.74726c.65332-.01569,1.30732-.00354,1.96106-.00354v-.00348q1.04187,0,2.08368.00048c.24927.00055.44654.06012.44458.37226-.00458.72522.00067,1.45044-.00335,2.1756-.00129.22015-.06324.432-.32612.43408-.26391.00207-.32641-.20893-.32971-.42951-.00512-.34716.00019-.69452.00061-1.04174.00049-.45105-.07342-.55677-.52319-.639a7.70231,7.70231,0,0,0-2.348-.0199,2.5959,2.5959,0,0,0-.80054.19476c-.21185.09973-.29608.24506-.19318.46729.10706.23126.20691.46728.3332.68786a43.875,43.875,0,0,0,3.42651,4.95569c.15393.19947.27313.20362.43109.0105.34869-.42639.71491-.83856,1.05994-1.26788a34.22649,34.22649,0,0,0,3.57635-5.25989,14.17129,14.17129,0,0,0,1.49451-3.87146A1.20324,1.20324,0,0,0,17.36145,9.824,6.94268,6.94268,0,0,0,15.691,9.66235c-.909-.00677-1.81812-.00348-2.72717-.00268-.24481.00024-.42688-.07007-.42707-.3573-.00048-1.01117-.00183-2.0224.00184-3.03351C12.53943,6.053,12.64349,5.92041,12.878,5.92841Z"/></svg>',
                ),
                array(
                    'keys' => 'swimmer',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,9.28a2,2,0,1,0-2-2A2,2,0,0,0,17,9.28ZM2.71,13.92a3,3,0,0,1,.57.25,4.06,4.06,0,0,0,4.1,0,2.62,2.62,0,0,1,2.56,0l.21.1,0,0a4.14,4.14,0,0,0,3.87-.13,2.62,2.62,0,0,1,2.56,0,4.25,4.25,0,0,0,2.08.56,4,4,0,0,0,2-.56,3,3,0,0,1,.57-.25A1,1,0,1,0,20.71,12a4.82,4.82,0,0,0-1,.44,2.1,2.1,0,0,1-2.1,0,4.62,4.62,0,0,0-4.54,0,2.52,2.52,0,0,1-.29.12L14.34,11a.75.75,0,0,0,.09-.15,1,1,0,0,0,.12-.16,1.29,1.29,0,0,0,0-.19,1.06,1.06,0,0,0,0-.19,1.13,1.13,0,0,0,0-.18,1.06,1.06,0,0,0,0-.19,1.51,1.51,0,0,0-.1-.17.7.7,0,0,0-.1-.16L11.28,6.28s0,0,0,0A1.1,1.1,0,0,0,11,6.06a.8.8,0,0,0-.21,0,.53.53,0,0,0-.17,0A.89.89,0,0,0,10.2,6L6.66,7.32a1,1,0,0,0-.6,1.28,1,1,0,0,0,1.28.6l2.93-1.07,2,2.12-1.9,1.9a4.62,4.62,0,0,0-3.94.28,2.1,2.1,0,0,1-2.1,0,4.82,4.82,0,0,0-1-.44,1,1,0,1,0-.58,1.91Zm18,3.09a4.82,4.82,0,0,0-1,.44,2.1,2.1,0,0,1-2.1,0,4.62,4.62,0,0,0-4.54,0,2.11,2.11,0,0,1-2.12,0,4.62,4.62,0,0,0-4.54,0,2.1,2.1,0,0,1-2.1,0,4.82,4.82,0,0,0-1-.44,1,1,0,1,0-.58,1.91,3,3,0,0,1,.57.25,4.06,4.06,0,0,0,4.1,0,2.62,2.62,0,0,1,2.56,0,4.15,4.15,0,0,0,4.12,0,2.62,2.62,0,0,1,2.56,0,4.25,4.25,0,0,0,2.08.56,4,4,0,0,0,2-.56,3,3,0,0,1,.57-.25A1,1,0,1,0,20.71,17Z"/></svg>',
                ),
                array(
                    'keys' => 'sync-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.29,15.71A1,1,0,0,0,13,15a1.05,1.05,0,0,0-.29-.71,1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21A1.05,1.05,0,0,0,11,15,1,1,0,0,0,11.29,15.71Zm8.62-.2H15.38a1,1,0,0,0,0,2h2.4A8,8,0,0,1,4,12a1,1,0,0,0-2,0,10,10,0,0,0,16.88,7.23V21a1,1,0,0,0,2,0V16.5A1,1,0,0,0,19.91,15.51ZM12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,0,1,20,12a1,1,0,0,0,2,0A10,10,0,0,0,12,2Zm0,11a1,1,0,0,0,1-1V9a1,1,0,0,0-2,0v3A1,1,0,0,0,12,13Z"/></svg>',
                ),
                array(
                    'keys' => 'sync-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.88,15.5h-4.5a1,1,0,0,0,0,2h2.4A8,8,0,0,1,12,20a8.08,8.08,0,0,1-3.12-.63L7.39,20.86A9.83,9.83,0,0,0,12,22a10,10,0,0,0,6.88-2.77V21a1,1,0,0,0,2,0V16.5A1,1,0,0,0,19.88,15.5ZM18.31,7.1h0l1.43-1.43h0l2-2a1,1,0,1,0-1.42-1.42l-2,2A9.89,9.89,0,0,0,12,2,10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1h4.5a1,1,0,0,0,0-2H6.22a7.93,7.93,0,0,1,10.67-.81L5.69,16.89A7.93,7.93,0,0,1,4,12a1,1,0,0,0-2,0,9.89,9.89,0,0,0,2.27,6.32l-2,2a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l2-2h0l1.43-1.43h0Zm1.06,1.78A8.08,8.08,0,0,1,20,12a1,1,0,0,0,2,0,9.83,9.83,0,0,0-1.14-4.61Z"/></svg>',
                ),
                array(
                    'keys' => 'sync',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19.91,15.51H15.38a1,1,0,0,0,0,2h2.4A8,8,0,0,1,4,12a1,1,0,0,0-2,0,10,10,0,0,0,16.88,7.23V21a1,1,0,0,0,2,0V16.5A1,1,0,0,0,19.91,15.51ZM12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1h4.5a1,1,0,0,0,0-2H6.22A8,8,0,0,1,20,12a1,1,0,0,0,2,0A10,10,0,0,0,12,2Z"/></svg>',
                ),
                array(
                    'keys' => 'syringe',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,2.29a1,1,0,0,0-1.42,0L18.17,4.41l-.71-.7a1,1,0,0,0-1.41,0L14.64,5.12l-.71-.71a1,1,0,0,0-1.42,0L4.74,12.19,4,11.49A1,1,0,0,0,2.62,12.9l3.53,3.54L4.42,18.18l-.71-.72a1,1,0,0,0-1.42,1.42l2.83,2.83a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42l-.71-.7,1.74-1.74,3.53,3.53a1,1,0,0,0,.71.3,1,1,0,0,0,.7-1.71l-.7-.71,7.78-7.77a1,1,0,0,0,0-1.42l-.71-.71L20.29,8a1,1,0,0,0,0-1.41l-.7-.71,2.12-2.12A1,1,0,0,0,21.71,2.29ZM7.57,15,6.15,13.61l1.41-1.42L9,13.61Zm2.82,2.83L9,16.44,10.39,15l1.42,1.42ZM13.22,15,9,10.78l4.24-4.24.71.7h0l3.53,3.54ZM17.46,8,16.05,6.54l.71-.71.7.7h0l.7.7Z"/></svg>',
                ),
                array(
                    'keys' => 'table-tennis',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.71,16.1l-1.64-1.64a.94.94,0,0,1-.22-1.07A5.78,5.78,0,0,0,19.39,11a.36.36,0,0,0,0-.1,5.74,5.74,0,0,0-1.06-3.34,14.17,14.17,0,0,0-5.17-4.42,7,7,0,0,0-8,1.31l-.67.67a7,7,0,0,0-1.31,8.05l.1.17a3,3,0,0,0-.84,2.06A3,3,0,0,0,7,17.94c.18.14.34.29.52.42A5.55,5.55,0,0,0,8.74,19l.09,0c.18.07.37.13.57.19l.15,0a5.08,5.08,0,0,0,.95.15l.28,0h.12l.22,0c.21,0,.41,0,.62-.06h.17l0,0a5.46,5.46,0,0,0,1.42-.45,1,1,0,0,1,1.07.21l1.46,1.46a3.4,3.4,0,0,0,2.39,1,2.85,2.85,0,0,0,2-.85l.38-.38A3,3,0,0,0,20.71,16.1Zm-15.3.32a1,1,0,1,1,1-1A1,1,0,0,1,5.41,16.42Zm3.1.14-.26-.2a2.94,2.94,0,0,0,.16-.94,3,3,0,0,0-3-3c-.13,0-.25,0-.38,0l-.09-.16a5,5,0,0,1,.93-5.75l.67-.67A5,5,0,0,1,12.28,5a12,12,0,0,1,4.26,3.57Zm10.78,2.37-.37.38c-.42.42-1.07.34-1.61-.2l-1.46-1.45a3,3,0,0,0-3.34-.61,3.39,3.39,0,0,1-1,.31,2.84,2.84,0,0,1-.58.05l-.34,0h-.1l6.87-6.87a3.8,3.8,0,0,1-.34,2h0a3,3,0,0,0,.61,3.34l1.64,1.65A1,1,0,0,1,19.29,18.93Z"/></svg>',
                ),
                array(
                    'keys' => 'table',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM8,20H4V16H8Zm0-6H4V10H8ZM8,8H4V4H8Zm6,12H10V16h4Zm0-6H10V10h4Zm0-6H10V4h4Zm6,12H16V16h4Zm0-6H16V10h4Zm0-6H16V4h4Z"/></svg>',
                ),
                array(
                    'keys' => 'tablet',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Zm1,17a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1Zm-5.29-2.71A1,1,0,0,0,11.8,16l-.18.06a.76.76,0,0,0-.18.09l-.15.12a1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.46,1.46,0,0,0,.33.22,1,1,0,0,0,1.09-.22A1,1,0,0,0,13,17a.84.84,0,0,0-.08-.38A1.15,1.15,0,0,0,12.71,16.29Z"/></svg>',
                ),
                array(
                    'keys' => 'tablets',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.54,3.46a5,5,0,1,0,0,7.08A5,5,0,0,0,20.54,3.46ZM14.88,4.88A3,3,0,0,1,17,4a3,3,0,0,1,1.28.3l-4,4A3,3,0,0,1,14.88,4.88Zm4.24,4.24a3,3,0,0,1-3.4.58l4-4A3,3,0,0,1,19.12,9.12ZM8,10a5.93,5.93,0,0,0-4.21,1.73l0,0,0,0A6,6,0,0,0,8,22a6,6,0,0,0,4.14-1.66l.12-.08a1.05,1.05,0,0,1,.07-.11A6,6,0,0,0,8,10ZM5.17,18.83A4,4,0,0,1,4.56,14L10,19.44A4,4,0,0,1,5.17,18.83ZM11.44,18,6,12.56A4,4,0,0,1,8,12a4,4,0,0,1,3.44,6Z"/></svg>',
                ),
                array(
                    'keys' => 'tachometer-fast-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,5A10,10,0,0,0,3.34,20a1,1,0,0,0,1.74-1A7.92,7.92,0,0,1,4,15a8,8,0,1,1,14.93,4,1,1,0,0,0,.37,1.37A1,1,0,0,0,20.66,20,10,10,0,0,0,12,5Zm2.84,5.76L13.29,12.3A2.91,2.91,0,0,0,12,12a3,3,0,1,0,3,3,2.9,2.9,0,0,0-.3-1.28l1.55-1.54a1,1,0,0,0,0-1.42A1,1,0,0,0,14.84,10.76ZM12,16a1,1,0,0,1,0-2,1,1,0,0,1,.7.28v0h0A1,1,0,0,1,13,15,1,1,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'tachometer-fast',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.29,10.29l-2.78,2.78A2.09,2.09,0,0,0,12,13a2,2,0,0,0-2,2,2.09,2.09,0,0,0,.07.51l-.78.78a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l.78-.78A2.09,2.09,0,0,0,12,17a2,2,0,0,0,2-2,2.09,2.09,0,0,0-.07-.51l2.78-2.78a1,1,0,0,0-1.42-1.42ZM12,4A10,10,0,0,0,2,14a9.91,9.91,0,0,0,1.69,5.56,1,1,0,0,0,1.66-1.12,8,8,0,1,1,13.3,0,1,1,0,0,0,.27,1.39,1,1,0,0,0,.56.17,1,1,0,0,0,.83-.44A9.91,9.91,0,0,0,22,14,10,10,0,0,0,12,4Z"/></svg>',
                ),
                array(
                    'keys' => 'tag-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7.5,6A1.5,1.5,0,1,0,9,7.5,1.5,1.5,0,0,0,7.5,6Zm13.62,4.71L12.71,2.29A1,1,0,0,0,12,2H3A1,1,0,0,0,2,3v9a1,1,0,0,0,.29.71l8.42,8.41a3,3,0,0,0,4.24,0L21.12,15a3,3,0,0,0,0-4.24Zm-1.41,2.82h0l-6.18,6.17a1,1,0,0,1-1.41,0L4,11.59V4h7.59l8.12,8.12a1,1,0,0,1,.29.71A1,1,0,0,1,19.71,13.53Z"/></svg>',
                ),
                array(
                    'keys' => 'tag',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.12,10.71,12.71,2.29A1,1,0,0,0,12,2H3A1,1,0,0,0,2,3v9a1,1,0,0,0,.29.71l8.42,8.41a3,3,0,0,0,4.24,0L21.12,15a3,3,0,0,0,0-4.24Zm-1.41,2.82h0l-6.18,6.17a1,1,0,0,1-1.41,0L4,11.59V4h7.59l8.12,8.12a1,1,0,0,1,.29.71A1,1,0,0,1,19.71,13.53Z"/></svg>',
                ),
                array(
                    'keys' => 'tape',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.5,7a4,4,0,1,0,4,4A4,4,0,0,0,14.5,7Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,14.5,13Zm1-10h-2a7,7,0,0,0-7,7v3h-1a1,1,0,0,0,0,2h1v2h-4a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V19h12a7,7,0,0,0,7-7V10A7,7,0,0,0,15.5,3Zm5,9a5,5,0,0,1-5,5h-7V10a5,5,0,0,1,5-5h2a5,5,0,0,1,5,5Z"/></svg>',
                ),
                array(
                    'keys' => 'taxi',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17.38,14.58a1,1,0,0,0-.58-.06.64.64,0,0,0-.18.06.76.76,0,0,0-.18.09l-.15.12a1.05,1.05,0,0,0-.29.71,1,1,0,0,0,.29.71,1.19,1.19,0,0,0,.33.22,1,1,0,0,0,1.09-.22,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,18,15.5a1.05,1.05,0,0,0-.29-.71A.93.93,0,0,0,17.38,14.58ZM20,10.68V7.5a3,3,0,0,0-3-3h-.78l-.77-2.32a1,1,0,0,0-.95-.68h-5a1,1,0,0,0-.95.68L7.78,4.5H7a3,3,0,0,0-3,3v3.18A3,3,0,0,0,2,13.5v6a1,1,0,0,0,1,1H4v1a1,1,0,0,0,2,0v-1H18v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,1-1v-6A3,3,0,0,0,20,10.68ZM10.22,3.5h3.56l.33,1H9.89ZM6,7.5a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1v3H6Zm14,11H4v-5a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1ZM6.62,14.58a1,1,0,0,0-.33.21A1.05,1.05,0,0,0,6,15.5a1,1,0,0,0,1.38.93,1.19,1.19,0,0,0,.33-.22A1,1,0,0,0,8,15.5a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,6.62,14.58ZM13,14.5H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'tear',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12.56,2.17a1,1,0,0,0-1.12,0c-.3.2-7.19,5-7.19,12.08a7.75,7.75,0,0,0,15.5,0C19.75,7.05,12.85,2.36,12.56,2.17ZM12,20a5.76,5.76,0,0,1-5.75-5.75c0-5,4.21-8.77,5.75-10,1.55,1.21,5.75,5,5.75,10A5.76,5.76,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'telegram-alt',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>telegram</title><path d="M22.26465,2.42773a2.04837,2.04837,0,0,0-2.07813-.32421L2.26562,9.33887a2.043,2.043,0,0,0,.1045,3.81836l3.625,1.26074,2.0205,6.68164A.998.998,0,0,0,8.134,21.352c.00775.012.01868.02093.02692.03259a.98844.98844,0,0,0,.21143.21576c.02307.01758.04516.03406.06982.04968a.98592.98592,0,0,0,.31073.13611l.01184.001.00671.00287a1.02183,1.02183,0,0,0,.20215.02051c.00653,0,.01233-.00312.0188-.00324a.99255.99255,0,0,0,.30109-.05231c.02258-.00769.04193-.02056.06384-.02984a.9931.9931,0,0,0,.20429-.11456,250.75993,250.75993,0,0,1,.15222-.12818L12.416,18.499l4.03027,3.12207a2.02322,2.02322,0,0,0,1.24121.42676A2.05413,2.05413,0,0,0,19.69531,20.415L22.958,4.39844A2.02966,2.02966,0,0,0,22.26465,2.42773ZM9.37012,14.73633a.99357.99357,0,0,0-.27246.50586l-.30951,1.504-.78406-2.59307,4.06525-2.11695ZM17.67188,20.04l-4.7627-3.68945a1.00134,1.00134,0,0,0-1.35352.11914l-.86541.9552.30584-1.48645,7.083-7.083a.99975.99975,0,0,0-1.16894-1.59375L6.74487,12.55432,3.02051,11.19141,20.999,3.999Z"/></svg>',
                ),
                array(
                    'keys' => 'telegram',
                    'svg' => '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>Telegram Glyph</title><path d="M11.99432,2a10,10,0,1,0,10,10A9.99917,9.99917,0,0,0,11.99432,2Zm3.17951,15.15247a.70547.70547,0,0,1-1.002.3515l-2.71467-2.10938L9.71484,17.002a.29969.29969,0,0,1-.285.03894l.334-2.98846.01069.00848.00683-.059s4.885-4.44751,5.084-4.637c.20147-.189.135-.23.135-.23.01147-.23053-.36152,0-.36152,0L8.16632,13.299l-2.69549-.918s-.414-.1485-.453-.475c-.041-.324.46649-.5.46649-.5l10.717-4.25751s.881-.39252.881.25751Z"/></svg>',
                ),
                array(
                    'keys' => 'telescope',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.9,7.59l-1-3.87A3,3,0,0,0,17.19,1.6l-1.93.52a1,1,0,0,0-.71,1.23l.26,1L4.19,7.16a1,1,0,0,0-.71,1.22l.26,1-1,.26a1,1,0,0,0,.25,2,1.09,1.09,0,0,0,.26,0l1-.27.26,1a1,1,0,0,0,.46.6,1,1,0,0,0,.5.14.75.75,0,0,0,.26,0L9,12.08v.42a2.9,2.9,0,0,0,.3,1.28l-5,5a1,1,0,0,0,1.41,1.42l5-5,.28.11V21.5a1,1,0,0,0,2,0V15.32a2.52,2.52,0,0,0,.29-.12l5,5a1,1,0,1,0,1.41-1.42l-5-5A3.09,3.09,0,0,0,15,12.5v-2l1.35-.36.25,1a1,1,0,0,0,1,.74l.26,0,1.93-.52A3,3,0,0,0,21.9,7.59ZM13,12.5a1,1,0,0,1-.28.69h0v0a1,1,0,0,1-.69.28,1,1,0,0,1-.7-.29h0a1,1,0,0,1-.29-.7v-1L13,11ZM6.19,10.76,5.67,8.83l9.66-2.59.26,1,.26,1Zm13.68-1.9a1,1,0,0,1-.61.47l-1,.26-.78-2.9L17,4.76h0l-.26-1,1-.26a1,1,0,0,1,1.23.71l1,3.87A1,1,0,0,1,19.87,8.86Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature-empty',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,15a2,2,0,1,0,2,2A2,2,0,0,0,12,15Zm4.5-2V5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,12,23,6,6,0,0,0,16.5,13Zm-2,7.07a4,4,0,0,1-5.32-6,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature-half',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,15.28V10.5a1,1,0,0,0-2,0v4.78A2,2,0,0,0,10,17a2,2,0,0,0,4,0A2,2,0,0,0,13,15.28ZM16.5,13V5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,12,23,6,6,0,0,0,16.5,13Zm-2,7.07a4,4,0,0,1-5.32-6,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14,5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,9.49,23,6,6,0,0,0,14,13ZM12,20.11a4,4,0,0,1-5.32-6,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6ZM10.5,15.28V5.5a1,1,0,0,0-2,0v9.78A2,2,0,0,0,7.5,17a2,2,0,0,0,4,0A2,2,0,0,0,10.5,15.28Zm9-12.78h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10.5,15.28V5.5a1,1,0,0,0-2,0v9.78A2,2,0,0,0,7.5,17a2,2,0,0,0,4,0A2,2,0,0,0,10.5,15.28Zm9-12.78H19V2a1,1,0,0,0-2,0v.5h-.5a1,1,0,0,0,0,2H17V5a1,1,0,0,0,2,0V4.5h.5a1,1,0,0,0,0-2ZM14,5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,9.49,23,6,6,0,0,0,14,13ZM12,20.11a4,4,0,0,1-6.42-2.2,4,4,0,0,1,1.1-3.76,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature-quarter',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.5,13V5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,12,23,6,6,0,0,0,16.5,13Zm-2,7.07a4,4,0,0,1-5.32-6,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6ZM13,15.28V12.5a1,1,0,0,0-2,0v2.78A2,2,0,0,0,10,17a2,2,0,0,0,4,0A2,2,0,0,0,13,15.28Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature-three-quarter',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,15.28V8.5a1,1,0,0,0-2,0v6.78A2,2,0,0,0,10,17a2,2,0,0,0,4,0A2,2,0,0,0,13,15.28ZM16.5,13V5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,12,23,6,6,0,0,0,16.5,13Zm-2,7.07a4,4,0,0,1-5.32-6,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6Z"/></svg>',
                ),
                array(
                    'keys' => 'temperature',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13,15.28V5.5a1,1,0,0,0-2,0v9.78A2,2,0,0,0,10,17a2,2,0,0,0,4,0A2,2,0,0,0,13,15.28ZM16.5,13V5.5a4.5,4.5,0,0,0-9,0V13a6,6,0,0,0,3.21,9.83A7,7,0,0,0,12,23,6,6,0,0,0,16.5,13Zm-2,7.07a4,4,0,0,1-6.42-2.2,4,4,0,0,1,1.1-3.76,1,1,0,0,0,.3-.71V5.5a2.5,2.5,0,0,1,5,0v7.94a1,1,0,0,0,.3.71,4,4,0,0,1-.28,6Z"/></svg>',
                ),
                array(
                    'keys' => 'tennis-ball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,4.65,18.76l.09.1a10,10,0,0,0,14.52,0l.09-.1A10,10,0,0,0,12,2ZM5.61,16.79a7.93,7.93,0,0,1,0-9.58,6,6,0,0,1,0,9.58ZM12,20a7.91,7.91,0,0,1-5-1.77A8,8,0,0,0,7,5.77a7.95,7.95,0,0,1,10,0,8,8,0,0,0,0,12.46A7.91,7.91,0,0,1,12,20Zm6.39-3.21a6,6,0,0,1,0-9.58,7.93,7.93,0,0,1,0,9.58Z"/></svg>',
                ),
                array(
                    'keys' => 'text-fields',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16,6a1,1,0,0,0-1-1H3A1,1,0,0,0,3,7H8V18a1,1,0,0,0,2,0V7h5A1,1,0,0,0,16,6Zm5,5H15a1,1,0,0,0,0,2h2v5a1,1,0,0,0,2,0V13h2a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'text-size',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9,11H3a1,1,0,0,0,0,2H5v5a1,1,0,0,0,2,0V13H9a1,1,0,0,0,0-2ZM21,5H9A1,1,0,0,0,9,7h5V18a1,1,0,0,0,2,0V7h5a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'text-strike-through',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15,13H9a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V15h2a1,1,0,0,0,0-2Zm2-7H7A1,1,0,0,0,7,8h4v2a1,1,0,0,0,2,0V8h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'text',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17,6H7A1,1,0,0,0,7,8h4v9a1,1,0,0,0,2,0V8h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'th-large',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,3H4A1,1,0,0,0,3,4V20a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V4A1,1,0,0,0,20,3ZM11,19H5V13h6Zm0-8H5V5h6Zm8,8H13V13h6Zm0-8H13V5h6Z"/></svg>',
                ),
                array(
                    'keys' => 'th-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M22.71,21.29l-1-1h0l-6-6h0l-6-6h0l-6-6h0l-1-1A1,1,0,0,0,1.29,2.71l.71.7V21a1,1,0,0,0,1,1H20.59l.7.71a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,21.29ZM4,5.41,6.59,8H4ZM8,20H4V16H8Zm0-6H4V10H8Zm2-2.59L12.59,14H10ZM14,20H10V16h4Zm2,0V17.41L18.59,20ZM8.67,4H14V9a1,1,0,0,0,1,1h5v5.33a1,1,0,1,0,2,0V3a1,1,0,0,0-1-1H8.67a1,1,0,0,0,0,2ZM16,4h4V8H16Z"/></svg>',
                ),
                array(
                    'keys' => 'th',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM11,20H4V13h7Zm0-9H4V4h7Zm9,9H13V13h7Zm0-9H13V4h7Z"/></svg>',
                ),
                array(
                    'keys' => 'thermometer',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.29,6.29l-7,7a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l7-7a1,1,0,1,0-1.42-1.42Zm4.25-2.83a5,5,0,0,0-7.08,0L5.29,11.69a1,1,0,0,0-.29.7v5.19L2.29,20.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L6.42,19h5.19a1,1,0,0,0,.7-.29l8.23-8.17A5,5,0,0,0,20.54,3.46ZM19.12,9.12,11.2,17H7V12.8l7.88-7.92a3,3,0,0,1,4.24,4.24Z"/></svg>',
                ),
                array(
                    'keys' => 'thumbs-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'thumbs-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>',
                ),
                array(
                    'keys' => 'thunderstorm-moon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.58,16.5H10.32l.86-1.5a1,1,0,1,0-1.73-1L7.72,17a1,1,0,0,0,.86,1.5H9.85L9,20a1,1,0,0,0,1.74,1l1.73-3a1,1,0,0,0,0-1A1,1,0,0,0,11.58,16.5ZM21.7,7.57a1,1,0,0,0-.93-.26,3.2,3.2,0,0,1-.66.08,3,3,0,0,1-3-3,3,3,0,0,1,.08-.65A1,1,0,0,0,16,2.53a4.93,4.93,0,0,0-3.83,4.21A6.24,6.24,0,0,0,10.5,6.5a6,6,0,0,0-5.94,5.13,3.49,3.49,0,0,0-.34,6.62,1,1,0,1,0,.72-1.86A1.5,1.5,0,0,1,5.5,13.5a1,1,0,0,0,1-1,4,4,0,0,1,4-4,3.92,3.92,0,0,1,2.18.66l0,0a4,4,0,0,1,1.57,2,1,1,0,0,0,.78.67,2.33,2.33,0,0,1,.25,4.53,1,1,0,0,0,.27,2,.84.84,0,0,0,.27,0A4.33,4.33,0,0,0,19,14.17a4.23,4.23,0,0,0-.49-2A4.94,4.94,0,0,0,22,8.5,1,1,0,0,0,21.7,7.57Zm-4.59,2.82a2.61,2.61,0,0,1-.42,0A4.6,4.6,0,0,0,16,10a6,6,0,0,0-1.82-2.28c0-.12,0-.25,0-.37a3,3,0,0,1,1.05-2.28,5,5,0,0,0,4.23,4.23A3,3,0,0,1,17.11,10.39Z"/></svg>',
                ),
                array(
                    'keys' => 'thunderstorm-sun',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11.58,16.5H10.32l.86-1.5a1,1,0,1,0-1.73-1L7.72,17a1,1,0,0,0,.86,1.5H9.85L9,20a1,1,0,0,0,1.74,1l1.73-3a1,1,0,0,0,0-1A1,1,0,0,0,11.58,16.5ZM21,7.5h-.8a4.25,4.25,0,0,0-.52-1.27l.56-.56a1,1,0,0,0-1.41-1.41l-.56.56A4.25,4.25,0,0,0,17,4.3V3.5a1,1,0,0,0-2,0v.8a4.25,4.25,0,0,0-1.27.52l-.56-.56a1,1,0,0,0-1.41,1.41l.56.57c-.09.15-.16.32-.24.48A5.85,5.85,0,0,0,10.5,6.5a6,6,0,0,0-5.94,5.13,3.49,3.49,0,0,0-.34,6.62,1,1,0,1,0,.72-1.86A1.5,1.5,0,0,1,5.5,13.5a1,1,0,0,0,1-1,4,4,0,0,1,7.78-1.29,1,1,0,0,0,.78.67,2.33,2.33,0,0,1,.25,4.53,1,1,0,0,0,.27,2,.84.84,0,0,0,.27,0,4.3,4.3,0,0,0,2.85-5.72l.13.13a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.56-.56A4.25,4.25,0,0,0,20.2,9.5H21a1,1,0,0,0,0-2Zm-3.34,2.65h0a2.28,2.28,0,0,1-.6.41A4.17,4.17,0,0,0,16,10a6.12,6.12,0,0,0-2.09-2.49,2.42,2.42,0,0,1,.46-.7h0a2.43,2.43,0,0,1,3.3,0h0a2.37,2.37,0,0,1,0,3.3Z"/></svg>',
                ),
                array(
                    'keys' => 'thunderstorm',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5,15H11.23l1.45-2.5a1,1,0,1,0-1.74-1l-2.31,4a1,1,0,0,0,0,1,1,1,0,0,0,.87.5h2.27l-1.45,2.5a1,1,0,0,0,1.74,1l2.31-4a1,1,0,0,0,0-1A1,1,0,0,0,13.5,15Zm4.92-7.79A7,7,0,0,0,5.06,9.11,4,4,0,0,0,6,17a1,1,0,0,0,0-2,2,2,0,0,1,0-4,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.66A3,3,0,0,1,17,15a1,1,0,0,0,0,2,5,5,0,0,0,1.42-9.79Z"/></svg>',
                ),
                array(
                    'keys' => 'ticket',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg>',
                ),
                array(
                    'keys' => 'times-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.71,8.29a1,1,0,0,0-1.42,0L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,12l2.3-2.29A1,1,0,0,0,15.71,8.29Zm3.36-3.36A10,10,0,1,0,4.93,19.07,10,10,0,1,0,19.07,4.93ZM17.66,17.66A8,8,0,1,1,20,12,7.95,7.95,0,0,1,17.66,17.66Z"/></svg>',
                ),
                array(
                    'keys' => 'times-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.71,8.29a1,1,0,0,0-1.42,0L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L13.41,12l2.3-2.29A1,1,0,0,0,15.71,8.29ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'toggle-off',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8,8.5A3.5,3.5,0,1,0,11.5,12,3.5,3.5,0,0,0,8,8.5Zm0,5A1.5,1.5,0,1,1,9.5,12,1.5,1.5,0,0,1,8,13.5ZM16,5H8A7,7,0,0,0,8,19h8A7,7,0,0,0,16,5Zm0,12H8A5,5,0,0,1,8,7h8a5,5,0,0,1,0,10Z"/></svg>',
                ),
                array(
                    'keys' => 'toggle-on',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,8.5A3.5,3.5,0,1,0,19.5,12,3.5,3.5,0,0,0,16,8.5Zm0,5A1.5,1.5,0,1,1,17.5,12,1.5,1.5,0,0,1,16,13.5ZM16,5H8A7,7,0,0,0,8,19h8A7,7,0,0,0,16,5Zm0,12H8A5,5,0,0,1,8,7h8a5,5,0,0,1,0,10Z"/></svg>',
                ),
                array(
                    'keys' => 'toilet-paper',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.25977,20.35693A7.52338,7.52338,0,0,1,20.5,15.45215V7.99268c0-3.3086-2.24316-6-5-6h-9c-2.75684,0-5,2.6914-5,6s2.24316,6,5,6h3v1.45947a9.52683,9.52683,0,0,0,2.24023,6.20556,1.00118,1.00118,0,0,0,.75977.34961h9a1.00028,1.00028,0,0,0,.75977-1.65039ZM6.5,11.99268c-1.6543,0-3-1.79444-3-4s1.3457-4,3-4,3,1.79443,3,4S8.1543,11.99268,6.5,11.99268Zm6.479,8.01464A7.58021,7.58021,0,0,1,11.5,15.45215v-7c0-.0282-.01379-.05188-.016-.07947.00665-.12628.016-.25171.016-.38a6.68056,6.68056,0,0,0-1.28381-4H15.5c1.6543,0,3,1.79443,3,4v7.45947a9.71056,9.71056,0,0,0,1.11768,4.55517ZM6.5,6.74286a1.14613,1.14613,0,0,0-1,1.25,1.14613,1.14613,0,0,0,1,1.25,1.14613,1.14613,0,0,0,1-1.25A1.14613,1.14613,0,0,0,6.5,6.74286Z"/></svg>',
                ),
                array(
                    'keys' => 'top-arrow-from-top',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,20H5a1,1,0,0,0,0,2H19a1,1,0,0,0,0-2ZM8.71,7.71,11,5.41V17a1,1,0,0,0,2,0V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71Z"/></svg>',
                ),
                array(
                    'keys' => 'top-arrow-to-top',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4a1,1,0,1,0,1.42,1.42L11,9.41V21a1,1,0,0,0,2,0V9.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM19,2H5A1,1,0,0,0,5,4H19a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'tornado',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,21H8a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Zm1-4H6a1,1,0,0,0,0,2h5a1,1,0,0,0,0-2ZM18,2a1,1,0,0,0-1-1H3A1,1,0,0,0,3,3H17A1,1,0,0,0,18,2Zm3,3H6A1,1,0,0,0,6,7H21a1,1,0,0,0,0-2ZM19,9H10a1,1,0,0,0,0,2h9a1,1,0,0,0,0-2Zm-5,4H8a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'trademark-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10,9H7a1,1,0,0,0,0,2h.5v3a1,1,0,0,0,2,0V11H10a1,1,0,0,0,0-2Zm7.38.08a1,1,0,0,0-1.09.21L15,10.59l-1.29-1.3a1,1,0,0,0-1.09-.21A1,1,0,0,0,12,10v4a1,1,0,0,0,2,0V12.41l.29.3a1,1,0,0,0,1.42,0l.29-.3V14a1,1,0,0,0,2,0V10A1,1,0,0,0,17.38,9.08ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'trademark',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M9.5,7h-6a1,1,0,0,0,0,2h2v7a1,1,0,0,0,2,0V9h2a1,1,0,0,0,0-2Zm11.92.62a1,1,0,0,0-.54-.54,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21L17,10.09l-2.79-2.8a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.54.54A1,1,0,0,0,12.5,8v8a1,1,0,0,0,2,0V10.41l1.79,1.8a1,1,0,0,0,1.42,0l1.79-1.8V16a1,1,0,0,0,2,0V8A1,1,0,0,0,21.42,7.62Z"/></svg>',
                ),
                array(
                    'keys' => 'traffic-barrier',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,5H20V4a1,1,0,0,0-2,0V5H6V4A1,1,0,0,0,4,4V5H3A1,1,0,0,0,2,6v6a1,1,0,0,0,1,1H4v7a1,1,0,0,0,2,0V13H18v7a1,1,0,0,0,2,0V13h1a1,1,0,0,0,1-1V6A1,1,0,0,0,21,5ZM4,9.52V7H6.52ZM5.34,11l4-4h3.33l-4,4Zm6.15,0,4-4h3.18l-4,4ZM20,11H17.49L20,8.49Z"/></svg>',
                ),
                array(
                    'keys' => 'traffic-light',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,5.5A1.5,1.5,0,1,0,13.5,7,1.5,1.5,0,0,0,12,5.5Zm10,3h-.54A6,6,0,0,0,23,4.5a1,1,0,0,0-1-1H17.82A3,3,0,0,0,15,1.5H9a3,3,0,0,0-2.82,2H2a1,1,0,0,0-1,1,6,6,0,0,0,1.54,4H2a1,1,0,0,0-1,1,6,6,0,0,0,1.54,4H2a1,1,0,0,0-1,1,6,6,0,0,0,5.16,5.93A3,3,0,0,0,9,22.5h6a3,3,0,0,0,2.84-2.07A6,6,0,0,0,23,14.5a1,1,0,0,0-1-1h-.54A6,6,0,0,0,23,9.5,1,1,0,0,0,22,8.5ZM6,18.37A4,4,0,0,1,3.13,15.5H6Zm0-5A4,4,0,0,1,3.13,10.5H6Zm0-5a4.09,4.09,0,0,1-1.83-1,4.09,4.09,0,0,1-1-1.83H6ZM16,19.5a1,1,0,0,1-1,1H9a1,1,0,0,1-1-1V4.5a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1Zm3.83-2.17a4.09,4.09,0,0,1-1.83,1V15.5h2.87A4.09,4.09,0,0,1,19.83,17.33Zm0-5a4.09,4.09,0,0,1-1.83,1V10.5h2.87A4.09,4.09,0,0,1,19.83,12.33Zm0-5a4.09,4.09,0,0,1-1.83,1V5.5h2.87A4.09,4.09,0,0,1,19.83,7.33ZM12,15.5A1.5,1.5,0,1,0,13.5,17,1.5,1.5,0,0,0,12,15.5Zm0-5A1.5,1.5,0,1,0,13.5,12,1.5,1.5,0,0,0,12,10.5Z"/></svg>',
                ),
                array(
                    'keys' => 'transaction',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,2H10A3,3,0,0,0,7,5v7a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,10a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1ZM17.5,8a1.49,1.49,0,0,0-1,.39,1.5,1.5,0,1,0,0,2.22A1.5,1.5,0,1,0,17.5,8ZM16,17a1,1,0,0,0-1,1v1a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V15H4a1,1,0,0,0,0-2H3V12a1,1,0,0,1,1-1A1,1,0,0,0,4,9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H14a3,3,0,0,0,3-3V18A1,1,0,0,0,16,17ZM6,18H7a1,1,0,0,0,0-2H6a1,1,0,0,0,0,2Z"/></svg>',
                ),
                array(
                    'keys' => 'trash-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>',
                ),
                array(
                    'keys' => 'trash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Z"/></svg>',
                ),
                array(
                    'keys' => 'trees',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.5,5A4.86,4.86,0,0,0,14,5.69,6,6,0,0,0,2.5,8v4a6,6,0,0,0,5,5.91V21a1,1,0,0,0,2,0V17.91a6.08,6.08,0,0,0,2.78-1.26A5,5,0,0,0,15.5,18.9V21a1,1,0,0,0,2,0V18.9a5,5,0,0,0,4-4.9V10A5,5,0,0,0,16.5,5Zm-5,5v4a5.23,5.23,0,0,0,.06.57,4,4,0,0,1-2.06,1.3V13a1,1,0,0,0-2,0v2.86A4,4,0,0,1,4.5,12V8a4,4,0,0,1,6.83-2.84,3.94,3.94,0,0,1,1.06,2A5,5,0,0,0,11.5,10Zm8,4a3,3,0,0,1-2,2.82V13a1,1,0,0,0-2,0v3.82a3,3,0,0,1-2-2.82V10a3,3,0,0,1,6,0Z"/></svg>',
                ),
                array(
                    'keys' => 'triangle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.87,19.29l-9-15.58a1,1,0,0,0-1.74,0l-9,15.58a1,1,0,0,0,0,1,1,1,0,0,0,.87.5H21a1,1,0,0,0,.87-.5A1,1,0,0,0,21.87,19.29Zm-17.14-.5L12,6.21l7.27,12.58Z"/></svg>',
                ),
                array(
                    'keys' => 'trophy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,4H18V3a1,1,0,0,0-1-1H7A1,1,0,0,0,6,3V4H3A1,1,0,0,0,2,5V8a4,4,0,0,0,4,4H7.54A6,6,0,0,0,11,13.91V16H10a3,3,0,0,0-3,3v2a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V19a3,3,0,0,0-3-3H13V13.91A6,6,0,0,0,16.46,12H18a4,4,0,0,0,4-4V5A1,1,0,0,0,21,4ZM6,10A2,2,0,0,1,4,8V6H6V8a6,6,0,0,0,.35,2Zm8,8a1,1,0,0,1,1,1v1H9V19a1,1,0,0,1,1-1ZM16,8A4,4,0,0,1,8,8V4h8Zm4,0a2,2,0,0,1-2,2h-.35A6,6,0,0,0,18,8V6h2Z"/></svg>',
                ),
                array(
                    'keys' => 'trowel',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.12,2.88a3.08,3.08,0,0,0-4.24,0L14.46,5.29a3,3,0,0,0-.57,3.41l-2.15,2.15-2-2a3,3,0,0,0-5,1.17l-2.66,8a3,3,0,0,0,.72,3.07A3,3,0,0,0,5,22a2.87,2.87,0,0,0,1-.16l8-2.66a3,3,0,0,0,1.17-5l-2-2,2.15-2.15a3,3,0,0,0,3.41-.57l2.41-2.42A3,3,0,0,0,21.12,2.88ZM13.7,15.63a1,1,0,0,1-.4,1.65L5.32,20a1,1,0,0,1-1-.25,1,1,0,0,1-.25-1l2.67-8A1,1,0,0,1,7.44,10a1.07,1.07,0,0,1,.23,0,1,1,0,0,1,.7.29l2,2-.87.86a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l.86-.87Zm6-9.92L17.29,8.12a1,1,0,0,1-1.7-.71,1,1,0,0,1,.29-.7l2.41-2.42a1,1,0,0,1,1.42,0A1,1,0,0,1,19.71,5.71Z"/></svg>',
                ),
                array(
                    'keys' => 'truck-loading',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,16H19.82A3,3,0,0,0,20,15V10a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5a3,3,0,0,0,.18,1H7a1,1,0,0,1-1-1V5A3,3,0,0,0,3,2H2A1,1,0,0,0,2,4H3A1,1,0,0,1,4,5V15a3,3,0,0,0,2.22,2.88,3,3,0,1,0,5.6.12h3.36a3,3,0,1,0,5.64,0H22a1,1,0,0,0,0-2ZM9,20a1,1,0,1,1,1-1A1,1,0,0,1,9,20Zm2-4a1,1,0,0,1-1-1V10a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1Zm7,4a1,1,0,1,1,1-1A1,1,0,0,1,18,20Z"/></svg>',
                ),
                array(
                    'keys' => 'truck',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M1,12.5v5a1,1,0,0,0,1,1H3a3,3,0,0,0,6,0h6a3,3,0,0,0,6,0h1a1,1,0,0,0,1-1V5.5a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v2H6A3,3,0,0,0,3.6,8.7L1.2,11.9a.61.61,0,0,0-.07.14l-.06.11A1,1,0,0,0,1,12.5Zm16,6a1,1,0,1,1,1,1A1,1,0,0,1,17,18.5Zm-7-13a1,1,0,0,1,1-1h9a1,1,0,0,1,1,1v11h-.78a3,3,0,0,0-4.44,0H10Zm-2,6H4L5.2,9.9A1,1,0,0,1,6,9.5H8Zm-3,7a1,1,0,1,1,1,1A1,1,0,0,1,5,18.5Zm-2-5H8v2.78a3,3,0,0,0-4.22.22H3Z"/></svg>',
                ),
                array(
                    'keys' => 'tumblr-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.43359,20.50825l-.96191-2.85351a1.00073,1.00073,0,0,0-1.37891-.583,3.7631,3.7631,0,0,1-1.209.249.93653.93653,0,0,1-.65918-.165,1.20025,1.20025,0,0,1-.23926-.80762V12.00044H16.002a.99942.99942,0,0,0,1-1V7.09517a.99942.99942,0,0,0-1-1H13V2.00044a.99942.99942,0,0,0-1-1H9.07031a1.14806,1.14806,0,0,0-1.13769,1.04A5.09342,5.09342,0,0,1,4.65234,6.59809a.99923.99923,0,0,0-.66113.94043v3.584a.99943.99943,0,0,0,1,1H6.01562v4.53516a6.41109,6.41109,0,0,0,1.88672,4.47851A6.90463,6.90463,0,0,0,12.877,22.99946c.05371,0,.1084,0,.16309-.001,1.5459-.0254,3.61816-.64747,4.27246-1.60743A.99833.99833,0,0,0,17.43359,20.50825Zm-4.42675.49024A4.87007,4.87007,0,0,1,9.30469,19.7104a4.36971,4.36971,0,0,1-1.28907-3.05273V11.12251a.99942.99942,0,0,0-1-1H5.99121v-1.917A6.95438,6.95438,0,0,0,9.80957,3.00044H11V7.09517a.99943.99943,0,0,0,1,1h3.002v1.90527h-3.0166a.99942.99942,0,0,0-1,1V16.3647a3.07681,3.07681,0,0,0,.85645,2.23535,2.76714,2.76714,0,0,0,2.0957.7207,5.90822,5.90822,0,0,0,.94727-.11328l.4248,1.25879A5.909,5.909,0,0,1,13.00684,20.99849Z"/></svg>',
                ),
                array(
                    'keys' => 'tumblr-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M2,2V22H22V2ZM13.57,17.85a3.4,3.4,0,0,1-3.75-3.33V10.44H8.56V8.83A3.83,3.83,0,0,0,11,5.47a.09.09,0,0,1,.09-.09h1.82V8.55h2.5v1.89H12.92v3.89a1.11,1.11,0,0,0,1.2,1.23,3,3,0,0,0,1-.22l.6,1.78A3.34,3.34,0,0,1,13.57,17.85Z"/></svg>',
                ),
                array(
                    'keys' => 'tumblr',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.79,18a4.65,4.65,0,0,1-1.62.35,1.75,1.75,0,0,1-1.92-2V10.12h4v-3h-4V2H10.33a.15.15,0,0,0-.14.15A6.11,6.11,0,0,1,6.25,7.54v2.58h2v6.54c0,2.23,1.65,5.41,6,5.34,1.47,0,3.11-.64,3.47-1.17Z"/></svg>',
                ),
                array(
                    'keys' => 'tv-retro-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11.62,7.92A1,1,0,0,0,12,8h6a1,1,0,0,1,1,1v5.34a1,1,0,1,0,2,0V9a3,3,0,0,0-3-3H14.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76A1,1,0,0,0,11.62,7.92ZM21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71L4.83,6.24A3,3,0,0,0,3,9v8a3,3,0,0,0,3,3v1a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V20a3.07,3.07,0,0,0,.53-.06l1.76,1.77a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM6,18a1,1,0,0,1-1-1V9A1,1,0,0,1,6,8h.59l10,10Z"/></svg>',
                ),
                array(
                    'keys' => 'tv-retro',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,6H14.41l2.3-2.29a1,1,0,1,0-1.42-1.42L12,5.54l-1.17-2a1,1,0,1,0-1.74,1L10,6H6A3,3,0,0,0,3,9v8a3,3,0,0,0,3,3v1a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V20a3,3,0,0,0,3-3V9A3,3,0,0,0,18,6Zm1,11a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V9A1,1,0,0,1,6,8H18a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'twitter-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.99121,3.9502a.99942.99942,0,0,0-1.51074-.85938,7.47956,7.47956,0,0,1-1.873.793,5.15234,5.15234,0,0,0-3.374-1.24219,5.23238,5.23238,0,0,0-5.22363,5.06348A11.03194,11.03194,0,0,1,4.19629,3.78125,1.01154,1.01154,0,0,0,3.33887,3.416a.99852.99852,0,0,0-.78516.5,5.2755,5.2755,0,0,0-.24219,4.76855l-.00195.00195a1.0411,1.0411,0,0,0-.49512.88868,3.04174,3.04174,0,0,0,.02637.43945,5.1854,5.1854,0,0,0,1.56836,3.3125.99813.99813,0,0,0-.06641.76953,5.20436,5.20436,0,0,0,2.36231,2.92187,7.46464,7.46464,0,0,1-3.58985.44825.99975.99975,0,0,0-.665,1.833A12.94248,12.94248,0,0,0,8.46,21.36133,12.7878,12.7878,0,0,0,20.9248,11.998,12.82166,12.82166,0,0,0,21.46,8.35156c0-.06543,0-.13281-.001-.20019A5.76963,5.76963,0,0,0,22.99121,3.9502ZM19.68457,7.16211a.995.995,0,0,0-.2334.70215c.00977.165.00879.331.00879.4873a10.82371,10.82371,0,0,1-.4541,3.08106A10.68457,10.68457,0,0,1,8.46,19.36133a10.93791,10.93791,0,0,1-2.55078-.30078,9.47951,9.47951,0,0,0,2.94238-1.56348A1.00033,1.00033,0,0,0,8.25,15.71094a3.208,3.208,0,0,1-2.21387-.93457q.22413-.04248.44532-.10547a1.00026,1.00026,0,0,0-.08008-1.94336,3.19824,3.19824,0,0,1-2.25-1.72559,5.29929,5.29929,0,0,0,.54492.0459,1.02093,1.02093,0,0,0,.9834-.69629A.9998.9998,0,0,0,5.2793,9.21484,3.19559,3.19559,0,0,1,3.85547,6.542c0-.0664.00195-.13281.00586-.19824a13.01365,13.01365,0,0,0,8.209,3.47949,1.02046,1.02046,0,0,0,.81739-.3584,1.00037,1.00037,0,0,0,.206-.86816,3.15653,3.15653,0,0,1-.08691-.72852A3.23,3.23,0,0,1,16.2334,4.6416a3.18428,3.18428,0,0,1,2.34472,1.02051A.993.993,0,0,0,19.499,5.96a9.27073,9.27073,0,0,0,1.21192-.32226A6.68126,6.68126,0,0,1,19.68457,7.16211Z"/></svg>',
                ),
                array(
                    'keys' => 'twitter',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z"/></svg>',
                ),
                array(
                    'keys' => 'umbrella',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11.24s0,0,0,0a.22.22,0,0,1,0-.08l0-.19c0-.23-.06-.46-.1-.69a.75.75,0,0,1,0-.16c-.05-.25-.12-.49-.19-.73v0a8.91,8.91,0,0,0-5.86-5.87l-.08,0c-.22-.07-.45-.13-.68-.18l-.18,0a5.21,5.21,0,0,0-.55-.08l-.24,0V3a1,1,0,0,0-2,0v.06a8.7,8.7,0,0,0-1,.18,4.71,4.71,0,0,0-.62.16l-.13,0c-.25.08-.48.17-.72.26l0,0A8.93,8.93,0,0,0,3.42,9.28a.31.31,0,0,0,0,.08,6.38,6.38,0,0,0-.19.72l0,.16q-.08.36-.12.75s0,.07,0,.11,0,.06,0,.09,0,0,0,.05c0,.25,0,.5,0,.76a1,1,0,0,0,1,1h7v6a1,1,0,0,1-2,0,1,1,0,0,0-2,0,3,3,0,0,0,6,0V13h7a1,1,0,0,0,1-1C21,11.74,21,11.49,21,11.24ZM8,11H5.08s0-.07,0-.11,0-.28.08-.41,0-.13,0-.19.08-.32.13-.48l0-.08A7,7,0,0,1,9.1,5.64,16.09,16.09,0,0,0,8,11Zm2,0c.19-3.91,1.44-6,2-6s1.79,2.09,2,6Zm6,0A16.09,16.09,0,0,0,14.9,5.64a7,7,0,0,1,3.73,4.12v0a4.61,4.61,0,0,1,.15.53.83.83,0,0,0,0,.15c0,.14.06.29.08.43s0,.07,0,.11Z"/></svg>',
                ),
                array(
                    'keys' => 'unamused',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.66,13.56l-4.19,1.5A1,1,0,0,0,10.8,17a1,1,0,0,0,.34-.06l4.2-1.5a1,1,0,1,0-.68-1.88Zm-4-3a1,1,0,0,0,0-1.41,3.08,3.08,0,0,0-4.24,0,1,1,0,1,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0Zm7-1.41a3.08,3.08,0,0,0-4.24,0,1,1,0,0,0,1.41,1.41,1,1,0,0,1,1.42,0,1,1,0,0,0,1.41,0A1,1,0,0,0,17.62,9.13ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"/></svg>',
                ),
                array(
                    'keys' => 'underline',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,15.5a5,5,0,0,0,5-5v-5a1,1,0,0,0-2,0v5a3,3,0,0,1-6,0v-5a1,1,0,0,0-2,0v5A5,5,0,0,0,12,15.5Zm5,2H7a1,1,0,0,0,0,2H17a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'university',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,10a.99974.99974,0,0,0,1-1V6a.9989.9989,0,0,0-.68359-.94824l-9-3a1.002,1.002,0,0,0-.63282,0l-9,3A.9989.9989,0,0,0,2,6V9a.99974.99974,0,0,0,1,1H4v7.18427A2.99507,2.99507,0,0,0,2,20v2a.99974.99974,0,0,0,1,1H21a.99974.99974,0,0,0,1-1V20a2.99507,2.99507,0,0,0-2-2.81573V10ZM20,21H4V20a1.001,1.001,0,0,1,1-1H19a1.001,1.001,0,0,1,1,1ZM6,17V10H8v7Zm4,0V10h4v7Zm6,0V10h2v7ZM4,8V6.7207l8-2.667,8,2.667V8Z"/></svg>',
                ),
                array(
                    'keys' => 'unlock-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,13a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V14A1,1,0,0,0,12,13Zm5-4H9V7a3,3,0,0,1,5.12-2.13,3.08,3.08,0,0,1,.78,1.38,1,1,0,1,0,1.94-.5,5.09,5.09,0,0,0-1.31-2.29A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9Zm1,10a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'unlock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,9H9V7a3,3,0,0,1,5.12-2.13,3.08,3.08,0,0,1,.78,1.38,1,1,0,1,0,1.94-.5,5.09,5.09,0,0,0-1.31-2.29A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9Zm1,10a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'upload-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M9.71,6.71,11,5.41V17a1,1,0,0,0,2,0V5.41l1.29,1.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-3-3a1,1,0,0,0-1.42,0l-3,3A1,1,0,0,0,9.71,6.71ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"/></svg>',
                ),
                array(
                    'keys' => 'upload',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.71,7.71,11,5.41V15a1,1,0,0,0,2,0V5.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4-4a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-4,4A1,1,0,1,0,8.71,7.71ZM21,12a1,1,0,0,0-1,1v6a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V13a1,1,0,0,0-2,0v6a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12Z"/></svg>',
                ),
                array(
                    'keys' => 'usd-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm1-8A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>',
                ),
                array(
                    'keys' => 'usd-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm8-7H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'user-arrows',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.64026,15.77179A3.46849,3.46849,0,0,0,21.5,13.5a3.5,3.5,0,0,0-7,0,3.46849,3.46849,0,0,0,.85974,2.27179A4.98821,4.98821,0,0,0,13,20a1,1,0,0,0,2,0,3,3,0,0,1,6,0,1,1,0,0,0,2,0A4.98821,4.98821,0,0,0,20.64026,15.77179ZM18,15a1.5,1.5,0,1,1,1.5-1.5A1.50164,1.50164,0,0,1,18,15ZM6.79327,7.70734,8.793,9.707A.99989.99989,0,0,0,10.207,8.293L9.91406,8h4.17188l-.293.293A.99989.99989,0,1,0,15.207,9.707l1.9997-1.99969a1.00354,1.00354,0,0,0,0-1.41468L15.207,4.293A.99989.99989,0,0,0,13.793,5.707l.293.293H9.91406l.293-.293A.99989.99989,0,0,0,8.793,4.293L6.79327,6.29266a1.00354,1.00354,0,0,0,0,1.41468Zm1.847,8.06445A3.46849,3.46849,0,0,0,9.5,13.5a3.5,3.5,0,0,0-7,0,3.46849,3.46849,0,0,0,.85974,2.27179A4.98821,4.98821,0,0,0,1,20a1,1,0,0,0,2,0,3,3,0,0,1,6,0,1,1,0,0,0,2,0A4.98821,4.98821,0,0,0,8.64026,15.77179ZM6,15a1.5,1.5,0,1,1,1.5-1.5A1.50164,1.50164,0,0,1,6,15Z"/></svg>',
                ),
                array(
                    'keys' => 'user-check',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.3,12.22A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5ZM21.71,9.13a1,1,0,0,0-1.42,0l-2,2-.62-.63a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l1.34,1.34a1,1,0,0,0,1.41,0l2.67-2.67A1,1,0,0,0,21.71,9.13Z"/></svg>',
                ),
                array(
                    'keys' => 'user-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2A10,10,0,0,0,4.65,18.76h0a10,10,0,0,0,14.7,0h0A10,10,0,0,0,12,2Zm0,18a8,8,0,0,1-5.55-2.25,6,6,0,0,1,11.1,0A8,8,0,0,1,12,20ZM10,10a2,2,0,1,1,2,2A2,2,0,0,1,10,10Zm8.91,6A8,8,0,0,0,15,12.62a4,4,0,1,0-6,0A8,8,0,0,0,5.09,16,7.92,7.92,0,0,1,4,12a8,8,0,0,1,16,0A7.92,7.92,0,0,1,18.91,16Z"/></svg>',
                ),
                array(
                    'keys' => 'user-exclamation',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.55,12.22a4.92,4.92,0,0,0,1.7-3.72,5,5,0,0,0-10,0A4.92,4.92,0,0,0,8,12.22a8,8,0,0,0-4.7,7.28,1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,14.55,12.22Zm-3.3-.72a3,3,0,1,1,3-3A3,3,0,0,1,11.25,11.5Zm8.5-5a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0v-2A1,1,0,0,0,19.75,6.5ZM19,11.79a1.05,1.05,0,0,0-.29.71,1,1,0,0,0,.29.71,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,.9.9,0,0,0,.54-.54.84.84,0,0,0,.08-.38A1,1,0,0,0,19,11.79Z"/></svg>',
                ),
                array(
                    'keys' => 'user-location',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.49,10.86a3.09,3.09,0,1,0-5,0,4.67,4.67,0,0,0-1.12,1A1,1,0,1,0,10,13.12a2.62,2.62,0,0,1,2.05-1h0a2.62,2.62,0,0,1,2.05,1,1,1,0,0,0,.78.37,1,1,0,0,0,.78-1.62A4.67,4.67,0,0,0,14.49,10.86ZM12,10.13h0A1.09,1.09,0,1,1,13.09,9,1.09,1.09,0,0,1,12,10.13Zm8.46-.5A8.5,8.5,0,0,0,7.3,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z"/></svg>',
                ),
                array(
                    'keys' => 'user-md',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.8985,13.229l-.00427-.00183c-.06336-.02673-.12439-.05774-.18836-.08313A5.98759,5.98759,0,0,0,18,8.43457a5.2899,5.2899,0,0,0-.04468-.63049.94592.94592,0,0,0,.03784-.12195l.28125-2.39746A3.00567,3.00567,0,0,0,15.83154,1.9834l-.79-.14356a16.931,16.931,0,0,0-6.08252,0l-.791.14356A3.0057,3.0057,0,0,0,5.72559,5.28467l.28125,2.39746a.94592.94592,0,0,0,.03784.122A5.2899,5.2899,0,0,0,6,8.43457,5.98759,5.98759,0,0,0,8.29413,13.144c-.064.02539-.125.0564-.18836.08313L8.1015,13.229a9.94794,9.94794,0,0,0-6.03558,8.09717,1,1,0,0,0,1.98828.2168A7.94836,7.94836,0,0,1,8.26965,15.358L11.293,18.38135a.99963.99963,0,0,0,1.41406,0L15.73035,15.358A7.94836,7.94836,0,0,1,19.9458,21.543a.99992.99992,0,0,0,.99268.8916,1.048,1.048,0,0,0,.10986-.00586,1.00007,1.00007,0,0,0,.88574-1.10254A9.94794,9.94794,0,0,0,15.8985,13.229ZM7.71191,5.05127a1.00179,1.00179,0,0,1,.814-1.1001l.79053-.14355a14.92975,14.92975,0,0,1,5.36718,0l.79.14355a1.00176,1.00176,0,0,1,.81446,1.1001l-.17774,1.51416H7.88965ZM12,16.26025,10.34973,14.61a7.8502,7.8502,0,0,1,3.30054,0Zm0-3.82568A4.005,4.005,0,0,1,8.002,8.56543h7.9961A4.005,4.005,0,0,1,12,12.43457Z"/></svg>',
                ),
                array(
                    'keys' => 'user-minus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,10.5H17a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-7.7,1.72A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5Z"/></svg>',
                ),
                array(
                    'keys' => 'user-nurse',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.1745,12.91626c-.01825-.00818-.03522-.01685-.05383-.0238-.1377-.06214-.27393-.127-.4148-.183a6,6,0,1,0-7.41174,0c-.14087.056-.2771.12085-.4148.183-.01861.00695-.03558.01562-.05383.0238A9.946,9.946,0,0,0,2.06592,20.8916a1,1,0,1,0,1.98828.2168,7.94518,7.94518,0,0,1,3.9873-6.0586L11.293,18.30127a.99963.99963,0,0,0,1.41406,0L15.9585,15.0498a7.94518,7.94518,0,0,1,3.9873,6.0586A.99992.99992,0,0,0,20.93848,22a1.048,1.048,0,0,0,.10986-.00586,1.00007,1.00007,0,0,0,.88574-1.10254A9.946,9.946,0,0,0,16.1745,12.91626ZM8.041,7.59424a3.97749,3.97749,0,0,1,7.918,0ZM12,16.18018l-1.93695-1.93695a7.834,7.834,0,0,1,3.8739,0ZM12,12A4.003,4.003,0,0,1,8.33588,9.59424h7.32824A4.003,4.003,0,0,1,12,12Z"/></svg>',
                ),
                array(
                    'keys' => 'user-plus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,10.5H20v-1a1,1,0,0,0-2,0v1H17a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm-7.7,1.72A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5Z"/></svg>',
                ),
                array(
                    'keys' => 'user-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M14.81,12.28a3.73,3.73,0,0,0,1-2.5,3.78,3.78,0,0,0-7.56,0,3.73,3.73,0,0,0,1,2.5A5.94,5.94,0,0,0,6,16.89a1,1,0,0,0,2,.22,4,4,0,0,1,7.94,0A1,1,0,0,0,17,18h.11a1,1,0,0,0,.88-1.1A5.94,5.94,0,0,0,14.81,12.28ZM12,11.56a1.78,1.78,0,1,1,1.78-1.78A1.78,1.78,0,0,1,12,11.56ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'user-times',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M13.3,12.22A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5Zm10.91.5.8-.79a1,1,0,0,0-1.42-1.42l-.79.8-.79-.8a1,1,0,0,0-1.42,1.42l.8.79-.8.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l.79-.8.79.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'user',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"/></svg>',
                ),
                array(
                    'keys' => 'users-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>',
                ),
                array(
                    'keys' => 'utensils-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M15.53,14.13a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l6.18,6.18a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.41Zm1.23-2.49a3,3,0,0,0,2.12-.88l2.83-2.83a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L17.46,9.35a1,1,0,0,1-1.41,0l3.54-3.54a1,1,0,0,0,0-1.41,1,1,0,0,0-1.42,0L14.64,7.93h0a1,1,0,0,1,0-1.41l2.82-2.83a1,1,0,1,0-1.41-1.41L13.22,5.11a3,3,0,0,0,0,4.24h0L12,10.59,10.44,9.05a4.16,4.16,0,0,0-.74-5C8.26,2.61,4.53,1,2.77,2.79S2.6,8.27,4,9.72A4.36,4.36,0,0,0,6.94,11h.14A3.88,3.88,0,0,0,9,10.46L10.57,12,2.29,20.28a1,1,0,1,0,1.42,1.41l9-9,0,0,0,0,1.92-1.92A3,3,0,0,0,16.76,11.64ZM8.43,8.44A1.93,1.93,0,0,1,7,9,2.26,2.26,0,0,1,5.46,8.3C4.38,7.22,3.62,4.77,4.19,4.2A1,1,0,0,1,4.85,4,5.87,5.87,0,0,1,8.29,5.47,2.12,2.12,0,0,1,8.43,8.44Z"/></svg>',
                ),
                array(
                    'keys' => 'utensils',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,2a1,1,0,0,0-1,1V8.46l-1,.67V3a1,1,0,0,0-2,0V9.13l-1-.67V3a1,1,0,0,0-2,0V9a1,1,0,0,0,.45.83L15,11.54V21a1,1,0,0,0,2,0V11.54l2.55-1.71A1,1,0,0,0,20,9V3A1,1,0,0,0,19,2ZM9,2H9A5,5,0,0,0,4,7v6a1,1,0,0,0,1,1H8v7a1,1,0,0,0,2,0V3A1,1,0,0,0,9,2ZM8,12H6V7A3,3,0,0,1,8,4.17Z"/></svg>',
                ),
                array(
                    'keys' => 'vector-square-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16,7H8A1,1,0,0,0,7,8v8a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V8A1,1,0,0,0,16,7Zm-1,8H9V9h6Zm6,3.28V5.72A2,2,0,1,0,18.28,3H5.72A2,2,0,1,0,3,5.72V18.28A2,2,0,1,0,5.72,21H18.28A2,2,0,1,0,21,18.28Zm-2,0a1.91,1.91,0,0,0-.72.72H5.72A1.91,1.91,0,0,0,5,18.28V5.72A1.91,1.91,0,0,0,5.72,5H18.28a1.91,1.91,0,0,0,.72.72Z"/></svg>',
                ),
                array(
                    'keys' => 'vector-square',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,16.18V7.82A3,3,0,1,0,16.18,4H7.82A3,3,0,1,0,4,7.82v8.36A3,3,0,1,0,7.82,20h8.36A3,3,0,1,0,20,16.18ZM19,4a1,1,0,1,1-1,1A1,1,0,0,1,19,4ZM5,4A1,1,0,1,1,4,5,1,1,0,0,1,5,4ZM5,20a1,1,0,1,1,1-1A1,1,0,0,1,5,20Zm11.18-2H7.82A3,3,0,0,0,6,16.18V7.82A3,3,0,0,0,7.82,6h8.36A3,3,0,0,0,18,7.82v8.36A3,3,0,0,0,16.18,18ZM19,20a1,1,0,1,1,1-1A1,1,0,0,1,19,20Z"/></svg>',
                ),
                array(
                    'keys' => 'venus',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,9a7,7,0,1,0-8,6.92V18H10a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V20h1a1,1,0,0,0,0-2H13V15.92A7,7,0,0,0,19,9Zm-7,5a5,5,0,1,1,5-5A5,5,0,0,1,12,14Z"/></svg>',
                ),
                array(
                    'keys' => 'vertical-align-bottom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,20H18V9a1,1,0,0,0-1-1H14V3a1,1,0,0,0-1-1H7A1,1,0,0,0,6,3V20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-9,0H8V4h4Zm4,0H14V10h2Z"/></svg>',
                ),
                array(
                    'keys' => 'vertical-align-center',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,11H18V6a1,1,0,0,0-1-1H14V3a1,1,0,0,0-1-1H7A1,1,0,0,0,6,3v8H3a1,1,0,0,0,0,2H6v8a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V19h3a1,1,0,0,0,1-1V13h3a1,1,0,0,0,0-2Zm-9,9H8V4h4Zm4-3H14V7h2Z"/></svg>',
                ),
                array(
                    'keys' => 'vertical-align-top',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,3,4H6V21a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V16h3a1,1,0,0,0,1-1V4h3a1,1,0,0,0,0-2ZM12,20H8V4h4Zm4-6H14V4h2Z"/></svg>',
                ),
                array(
                    'keys' => 'vertical-distribute-bottom',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,18H20V13a1,1,0,0,0-1-1H5a1,1,0,0,0-1,1v5H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm-3,0H6V14H18ZM3,10H21a1,1,0,0,0,0-2H19V5a1,1,0,0,0-1-1H6A1,1,0,0,0,5,5V8H3a1,1,0,0,0,0,2ZM7,6H17V8H7Z"/></svg>',
                ),
                array(
                    'keys' => 'vertical-distribution-center',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,15H20V13a1,1,0,0,0-1-1H5a1,1,0,0,0-1,1v2H3a1,1,0,0,0,0,2H4v2a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V17h1a1,1,0,0,0,0-2Zm-3,3H6V14H18ZM3,8H5V9a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1V8h2a1,1,0,0,0,0-2H19V5a1,1,0,0,0-1-1H6A1,1,0,0,0,5,5V6H3A1,1,0,0,0,3,8ZM7,6H17V8H7Z"/></svg>',
                ),
                array(
                    'keys' => 'vertical-distribution-top',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,6H4v5a1,1,0,0,0,1,1H19a1,1,0,0,0,1-1V6h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,6ZM6,6H18v4H6Zm15,8H3a1,1,0,0,0,0,2H5v3a1,1,0,0,0,1,1H18a1,1,0,0,0,1-1V16h2a1,1,0,0,0,0-2Zm-4,4H7V16H17Z"/></svg>',
                ),
                array(
                    'keys' => 'video-question',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.21,17.29a1.04667,1.04667,0,0,0-1.41992,0,1.02673,1.02673,0,0,0-.21.32959.94223.94223,0,0,0,0,.76025,1.15384,1.15384,0,0,0,.21.33008A1,1,0,0,0,10.5,18a.99993.99993,0,0,0-.08008-.38037A1.1515,1.1515,0,0,0,10.21,17.29ZM9.5,9a3.00933,3.00933,0,0,0-2.59766,1.49951.99956.99956,0,1,0,1.73047,1.001A1.00032,1.00032,0,1,1,9.5,13a.99974.99974,0,0,0-1,1v1a1,1,0,0,0,2,0v-.18427A2.99257,2.99257,0,0,0,9.5,9ZM21.52539,6.14941a.999.999,0,0,0-.97266-.04394l-3.56408,1.782A2.9975,2.9975,0,0,0,14,5H5A3.00328,3.00328,0,0,0,2,8v6a3.00328,3.00328,0,0,0,3,3H6a1,1,0,0,0,0-2H5a1.001,1.001,0,0,1-1-1V8A1.001,1.001,0,0,1,5,7h9a1.001,1.001,0,0,1,1,1v6a1.001,1.001,0,0,1-1,1h-.5a1,1,0,0,0,0,2H14a2.9975,2.9975,0,0,0,2.98865-2.88751l3.56408,1.782A1.00038,1.00038,0,0,0,22,15V7A.99976.99976,0,0,0,21.52539,6.14941ZM20,13.38184l-3-1.5V10.11816l3-1.5Z"/></svg>',
                ),
                array(
                    'keys' => 'video-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M7.71,6.29h0l-4-4A1,1,0,0,0,2.29,3.71L4.62,6A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,1.9-.69l4.39,4.4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM14,16H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8H6.59l7.87,7.88A1,1,0,0,1,14,16Zm7.53-8.85a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H12.66a1,1,0,0,0,0,2H14a1,1,0,0,1,1,1v1.5h0a1.62,1.62,0,0,0,0,.19.65.65,0,0,0,.05.2h0s.05.06.07.1a1,1,0,0,0,.15.21s.1.06.15.1l.17.11a.85.85,0,0,0,.23,0,.7.7,0,0,0,.14,0h0a1.62,1.62,0,0,0,.19,0,.65.65,0,0,0,.2-.05h0L20,9.62v5.72a1,1,0,1,0,2,0V8A1,1,0,0,0,21.53,7.15Z"/></svg>',
                ),
                array(
                    'keys' => 'video',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>',
                ),
                array(
                    'keys' => 'virus-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M10.16943,5.23633A7.51405,7.51405,0,0,1,11,5.07751V6.34814a1,1,0,1,0,2,0v-1.277a6.94554,6.94554,0,0,1,3.9491,1.98022l.00061.00092.00134.00091A6.98718,6.98718,0,0,1,18.921,11.002H18a1,1,0,0,0,0,2h.922a7.64958,7.64958,0,0,1-.16028.82666.99981.99981,0,0,0,.71875,1.21778.98343.98343,0,0,0,.25.03173,1.0002,1.0002,0,0,0,.96777-.75048,9.59392,9.59392,0,0,0,.23621-1.32569H22a1,1,0,0,0,0-2H20.94073A8.93293,8.93293,0,0,0,19.028,6.38824l.7503-.75006a.99989.99989,0,0,0-1.41406-1.41406l-.75287.75263A8.911,8.911,0,0,0,13,3.06763V1.99805a1,1,0,1,0-2,0V3.06372a9.47345,9.47345,0,0,0-1.32959.23608.9999.9999,0,0,0,.499,1.93653ZM14,9.002a1,1,0,1,0,1-1A1,1,0,0,0,14,9.002Zm4.3772,7.96314-.00757-.01148-.01178-.00787L2.707,1.29492A.99989.99989,0,0,0,1.293,2.709l3.67889,3.6789A8.93173,8.93173,0,0,0,3.05927,11.002H2a1,1,0,0,0,0,2H3.06006a8.94838,8.94838,0,0,0,1.91138,4.61451l-.74976.74975a.99989.99989,0,1,0,1.41406,1.41406l.74988-.74987A8.94628,8.94628,0,0,0,11,20.93854V22.002a1,1,0,0,0,2,0V20.93854a8.94628,8.94628,0,0,0,4.61438-1.90814L21.293,22.709A.99989.99989,0,0,0,22.707,21.29492ZM13,18.91888V17.002a1,1,0,0,0-2,0v1.917a6.98552,6.98552,0,0,1-3.945-1.96021l-.0047-.00708-.00683-.00452A6.99374,6.99374,0,0,1,5.07971,13.002H6a1,1,0,0,0,0-2H5.0788A6.94294,6.94294,0,0,1,6.39948,7.81549L8.25305,9.66907a1.49935,1.49935,0,0,0,2.07984,2.07983l5.8529,5.85291A6.95663,6.95663,0,0,1,13,18.91888ZM9,14.002a1,1,0,1,0,1,1A1,1,0,0,0,9,14.002Z"/></svg>',
                ),
                array(
                    'keys' => 'visual-studio',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M16.85,2,9.09,9.77,4.19,5.91,2.05,7V17L4.2,18.09l4.93-3.85L16.87,22,22,19.93V4ZM4.37,14.3V9.65l2.44,2.43ZM16.7,15.59,12.05,12,16.7,8.41Z"/></svg>',
                ),
                array(
                    'keys' => 'vk-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.74365,13.5293a5.5186,5.5186,0,0,0-.97741-.83612A7.87286,7.87286,0,0,0,17.625,8.22168a1,1,0,1,0-1.9502-.44336,5.86,5.86,0,0,1-3.0205,3.90228V8.002a.95817.95817,0,0,0-.0437-.21643,1.0238,1.0238,0,0,0-.03449-.17083.991.991,0,0,0-.16681-.24891c-.01788-.02124-.02691-.04925-.04645-.0689a1.00121,1.00121,0,0,0-.24609-.16706c-.02551-.01361-.04449-.03662-.07129-.048a1.01943,1.01943,0,0,0-.23645-.04865.94528.94528,0,0,0-.15179-.03119L11.00293,7H11a.99525.99525,0,0,0-.3501,1.92865v4.89069A11.307,11.307,0,0,1,7.64014,7.835a.99988.99988,0,1,0-1.97168.334,13.33371,13.33371,0,0,0,5.3999,8.64355.986.986,0,0,0,.12781.06445.94.94,0,0,0,.10748.0542.99383.99383,0,0,0,.35065.0708.98307.98307,0,0,0,.42382-.10186c.00995-.0047.02137-.00251.03126-.00751a.99262.99262,0,0,0,.24011-.17529c.01422-.01386.02374-.03089.03717-.04554a.98836.98836,0,0,0,.15991-.23718c.01392-.02869.02661-.05609.03778-.08624a.9878.9878,0,0,0,.06995-.34638l.00049-2.126a3.55144,3.55144,0,0,1,1.61474,1.00488l1.64795,1.79687a.99979.99979,0,1,0,1.47363-1.35156ZM15.07275,1H8.9375C2.78027,1,1,2.77832,1,8.92676V15.0625C1,21.21973,2.77783,23,8.92725,23H15.0625C21.21973,23,23,21.22168,23,15.07324V8.9375C23,2.78027,21.22217,1,15.07275,1ZM21,15.07324C21,20.11328,20.1123,21,15.0625,21H8.92725C3.88623,21,3,20.1123,3,15.0625V8.92676C3,3.88672,3.8877,3,8.9375,3h6.13525C20.11377,3,21,3.8877,21,8.9375Z"/></svg>',
                ),
                array(
                    'keys' => 'vk',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M15.07294,2H8.9375C3.33331,2,2,3.33331,2,8.92706V15.0625C2,20.66663,3.32294,22,8.92706,22H15.0625C20.66669,22,22,20.67706,22,15.07288V8.9375C22,3.33331,20.67706,2,15.07294,2Zm3.07287,14.27081H16.6875c-.55206,0-.71875-.44793-1.70831-1.4375-.86463-.83331-1.22919-.9375-1.44794-.9375-.30206,0-.38544.08332-.38544.5v1.3125c0,.35419-.11456.5625-1.04162.5625a5.69214,5.69214,0,0,1-4.44794-2.66668A11.62611,11.62611,0,0,1,5.35419,8.77081c0-.21875.08331-.41668.5-.41668H7.3125c.375,0,.51044.16668.65625.55212.70831,2.08331,1.91669,3.89581,2.40625,3.89581.1875,0,.27081-.08331.27081-.55206V10.10413c-.0625-.97913-.58331-1.0625-.58331-1.41663a.36008.36008,0,0,1,.375-.33337h2.29169c.3125,0,.41662.15625.41662.53125v2.89587c0,.3125.13544.41663.22919.41663.1875,0,.33331-.10413.67706-.44788a11.99877,11.99877,0,0,0,1.79169-2.97919.62818.62818,0,0,1,.63544-.41668H17.9375c.4375,0,.53125.21875.4375.53125A18.20507,18.20507,0,0,1,16.41669,12.25c-.15625.23956-.21875.36456,0,.64581.14581.21875.65625.64582,1,1.05207a6.48553,6.48553,0,0,1,1.22912,1.70837C18.77081,16.0625,18.5625,16.27081,18.14581,16.27081Z"/></svg>',
                ),
                array(
                    'keys' => 'voicemail-rectangle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M20,4H4A3,3,0,0,0,1,7V17a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V7A3,3,0,0,0,20,4Zm1,13a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V7A1,1,0,0,1,4,6H20a1,1,0,0,1,1,1ZM16,9a3,3,0,0,0-2.82,4H10.82A3,3,0,1,0,8,15h8a3,3,0,0,0,0-6ZM8,13a1,1,0,1,1,1-1A1,1,0,0,1,8,13Zm8,0a1,1,0,1,1,1-1A1,1,0,0,1,16,13Z"/></svg>',
                ),
                array(
                    'keys' => 'voicemail',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18,8a4,4,0,0,0-4,4,3.91,3.91,0,0,0,.56,2H9.44A3.91,3.91,0,0,0,10,12a4,4,0,1,0-4,4H18a4,4,0,0,0,0-8ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,0a2,2,0,1,1,2-2A2,2,0,0,1,18,14Z"/></svg>',
                ),
                array(
                    'keys' => 'volleyball',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20.59,6.9a0,0,0,0,1,0,0,.86.86,0,0,0-.07-.1A10,10,0,0,0,7.6,3l0,0h0l-.07,0a10,10,0,0,0-1,17.19h0l.33.2.1.07h0A9.93,9.93,0,0,0,12,22h.21A10,10,0,0,0,20.59,6.9ZM19,8.06a7.64,7.64,0,0,1,.65,1.46,10,10,0,0,0-3-.49.81.81,0,0,0-.31,0,9.78,9.78,0,0,0-3.58.73,7.85,7.85,0,0,1-1.84-1.6A8.16,8.16,0,0,1,19,8.06ZM12,4a7.86,7.86,0,0,1,4,1.07A7.77,7.77,0,0,0,15,5,10,10,0,0,0,9.8,6.47a8,8,0,0,1-.64-1.94A7.92,7.92,0,0,1,12,4ZM6,6.71A8.26,8.26,0,0,1,7.33,5.52,9.9,9.9,0,0,0,12,11.61a7.89,7.89,0,0,1-.77,2.88A8,8,0,0,1,6,7C6,6.9,6,6.81,6,6.71ZM4,12a8.1,8.1,0,0,1,.36-2.37,10,10,0,0,0,5.7,6.56,7.84,7.84,0,0,1-2.93,2.14A8,8,0,0,1,4,12Zm7.86,8a7.8,7.8,0,0,1-2.61-.49,9.94,9.94,0,0,0,3.23-3.22l0,0A10,10,0,0,0,14,11.41a7.71,7.71,0,0,1,1.78-.36A8,8,0,0,1,11.86,20Zm4.22-1.12A9.94,9.94,0,0,0,18,13a10.69,10.69,0,0,0-.18-1.88,8.34,8.34,0,0,1,2.17.7c0,.06,0,.12,0,.18A8,8,0,0,1,16.08,18.87Z"/></svg>',
                ),
                array(
                    'keys' => 'volume-down',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.83,9.17a1,1,0,1,0-1.42,1.42A2,2,0,0,1,18,12a2,2,0,0,1-.71,1.53,1,1,0,0,0-.13,1.41,1,1,0,0,0,1.41.12A4,4,0,0,0,20,12,4.06,4.06,0,0,0,18.83,9.17ZM14.43,4.1a1,1,0,0,0-1,.12L8.65,8H5A1,1,0,0,0,4,9v6a1,1,0,0,0,1,1H8.65l4.73,3.78A1,1,0,0,0,14,20a.91.91,0,0,0,.43-.1A1,1,0,0,0,15,19V5A1,1,0,0,0,14.43,4.1ZM13,16.92l-3.38-2.7A1,1,0,0,0,9,14H6V10H9a1,1,0,0,0,.62-.22L13,7.08Z"/></svg>',
                ),
                array(
                    'keys' => 'volume-mute',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.43,4.1a1,1,0,0,0-1,.12L6.65,8H3A1,1,0,0,0,2,9v6a1,1,0,0,0,1,1H6.65l4.73,3.78A1,1,0,0,0,12,20a.91.91,0,0,0,.43-.1A1,1,0,0,0,13,19V5A1,1,0,0,0,12.43,4.1ZM11,16.92l-3.38-2.7A1,1,0,0,0,7,14H4V10H7a1,1,0,0,0,.62-.22L11,7.08ZM19.91,12l1.8-1.79a1,1,0,0,0-1.42-1.42l-1.79,1.8-1.79-1.8a1,1,0,0,0-1.42,1.42L17.09,12l-1.8,1.79a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l1.79-1.8,1.79,1.8a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'volume-off',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M16.93,4.1a1,1,0,0,0-1,.12L11.15,8H7.5a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3.65l4.73,3.78a1,1,0,0,0,.62.22.91.91,0,0,0,.43-.1,1,1,0,0,0,.57-.9V5A1,1,0,0,0,16.93,4.1ZM15.5,16.92l-3.38-2.7A1,1,0,0,0,11.5,14h-3V10h3a1,1,0,0,0,.62-.22l3.38-2.7Z"/></svg>',
                ),
                array(
                    'keys' => 'volume-up',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.43,4.1a1,1,0,0,0-1,.12L6.65,8H3A1,1,0,0,0,2,9v6a1,1,0,0,0,1,1H6.65l4.73,3.78A1,1,0,0,0,12,20a.91.91,0,0,0,.43-.1A1,1,0,0,0,13,19V5A1,1,0,0,0,12.43,4.1ZM11,16.92l-3.38-2.7A1,1,0,0,0,7,14H4V10H7a1,1,0,0,0,.62-.22L11,7.08ZM15.14,4.09a1,1,0,1,0-.28,2,6,6,0,0,1,0,11.86,1,1,0,0,0,.14,2h.14a8,8,0,0,0,0-15.82Zm-.46,9.78a1,1,0,0,0,.32,2,1.13,1.13,0,0,0,.32-.05,4,4,0,0,0,0-7.54,1,1,0,0,0-.64,1.9,2,2,0,0,1,0,3.74Z"/></svg>',
                ),
                array(
                    'keys' => 'volume',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12.43,4.1a1,1,0,0,0-1,.12L6.65,8H3A1,1,0,0,0,2,9v6a1,1,0,0,0,1,1H6.65l4.73,3.78A1,1,0,0,0,12,20a.91.91,0,0,0,.43-.1A1,1,0,0,0,13,19V5A1,1,0,0,0,12.43,4.1ZM11,16.92l-3.38-2.7A1,1,0,0,0,7,14H4V10H7a1,1,0,0,0,.62-.22L11,7.08ZM19.66,6.34a1,1,0,0,0-1.42,1.42,6,6,0,0,1-.38,8.84,1,1,0,0,0,.64,1.76,1,1,0,0,0,.64-.23,8,8,0,0,0,.52-11.79ZM16.83,9.17a1,1,0,1,0-1.42,1.42A2,2,0,0,1,16,12a2,2,0,0,1-.71,1.53,1,1,0,0,0-.13,1.41,1,1,0,0,0,1.41.12A4,4,0,0,0,18,12,4.06,4.06,0,0,0,16.83,9.17Z"/></svg>',
                ),
                array(
                    'keys' => 'vuejs-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22.86723,3.374a.99906.99906,0,0,0-.86622-.50195l-4.97064-.00391-.00738-.001-3.64356.001a1.00172,1.00172,0,0,0-.81787.42481l-.55859.7959L11.43851,3.291a.9983.9983,0,0,0-.81591-.42286l-3.646-.001H6.97611l-.00146.00018-.00147-.00018H6.96781l-4.97314.02734a.99989.99989,0,0,0-.85742,1.50586L11.15678,21.50586A1.00068,1.00068,0,0,0,12.01957,22h.001a1.00062,1.00062,0,0,0,.86328-.49609L22.8643,4.376A1.00212,1.00212,0,0,0,22.86723,3.374ZM10.10453,4.86816l1.085,1.53321a.99856.99856,0,0,0,.81641.42285h.00146a1.00252,1.00252,0,0,0,.8169-.42481l1.07519-1.53125,1.36267-.001-3.244,5.45373L8.7432,4.86719Zm1.9126,14.14942L3.7393,4.88477l2.66992-.01465,4.75342,7.918a1.00082,1.00082,0,0,0,.85742.48535H12.022l.001-.00012.001.00012h.002a1,1,0,0,0,.85742-.48926l4.708-7.916,2.66949.00293Z"/></svg>',
                ),
                array(
                    'keys' => 'vuejs',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M18.03079,2.44284V2.44278l-.15448.00006-.84552-.00006-.00012.00024-2.64319.00055L12.01321,6.39951,9.62961,2.44357l-2.64594-.001-.00024-.00037H2.2717v.00055L.83231,2.44266,12.029,21.55777,23.16769,2.443ZM12.02505,17.59293,4.322,4.44223H7.14566l4.88562,8.4071,4.8468-8.4071h2.80939Z"/></svg>',
                ),
                array(
                    'keys' => 'wall',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,9a1,1,0,0,0,0-2H20V5h1a1,1,0,0,0,0-2H3A1,1,0,0,0,3,5H6V7H3A1,1,0,0,0,3,9H4v2H3a1,1,0,0,0,0,2H6v2H3a1,1,0,0,0,0,2H4v2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2H18V17h3a1,1,0,0,0,0-2H20V13h1a1,1,0,0,0,0-2H18V9ZM8,5h4V7H8Zm8,4v2H12V9ZM6,9h4v2H6Zm6,4v2H8V13Zm-2,6H6V17h4Zm6,0H12V17h4Zm2-4H14V13h4ZM14,7V5h4V7Z"/></svg>',
                ),
                array(
                    'keys' => 'wallet',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M19,7H18V6a3,3,0,0,0-3-3H5A3,3,0,0,0,2,6H2V18a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V10A3,3,0,0,0,19,7ZM5,5H15a1,1,0,0,1,1,1V7H5A1,1,0,0,1,5,5ZM20,15H19a1,1,0,0,1,0-2h1Zm0-4H19a3,3,0,0,0,0,6h1v1a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8.83A3,3,0,0,0,5,9H19a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'watch-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,8.61,16,2.84A1,1,0,0,0,15,2H9a1,1,0,0,0-1,.84l-1,5.77a6,6,0,0,0,0,6.78l1,5.77A1,1,0,0,0,9,22h6a1,1,0,0,0,1-.84l1-5.77a6,6,0,0,0,0-6.78ZM9.85,4h4.3l.44,2.59a6,6,0,0,0-5.18,0Zm4.3,16H9.85l-.44-2.59a6,6,0,0,0,5.18,0ZM12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16Z"/></svg>',
                ),
                array(
                    'keys' => 'watch',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,6.78V3a1,1,0,0,0-1-1H8A1,1,0,0,0,7,3V6.78A3,3,0,0,0,6,9v6a3,3,0,0,0,1,2.22V21a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V17.22A3,3,0,0,0,18,15V9A3,3,0,0,0,17,6.78ZM9,4h6V6H9Zm6,16H9V18h6Zm1-5a1,1,0,0,1-1,1H9a1,1,0,0,1-1-1V9A1,1,0,0,1,9,8h6a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'water-drop-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,20.29l-18-18A1,1,0,0,0,2.29,3.71l4,4a12.46,12.46,0,0,0-2,6.57A7.76,7.76,0,0,0,12,22a7.64,7.64,0,0,0,5.87-2.71l2.42,2.42a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM12,20a5.76,5.76,0,0,1-5.75-5.75A10.3,10.3,0,0,1,7.72,9.14l8.74,8.73A5.67,5.67,0,0,1,12,20ZM10.85,5.24c.45-.42.85-.75,1.15-1,1.43,1.12,5.13,4.43,5.68,8.88a1,1,0,0,0,1,.88h.12a1,1,0,0,0,.87-1.11c-.78-6.43-6.85-10.55-7.1-10.72a1,1,0,0,0-1.12,0A18.73,18.73,0,0,0,9.49,3.78a1,1,0,0,0,1.36,1.46Z"/></svg>',
                ),
                array(
                    'keys' => 'water-glass',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.08,7A1,1,0,0,0,17,7.92l-.35,4.55a2.67,2.67,0,0,1-1.2-.77,1,1,0,0,0-1.5,0,2.65,2.65,0,0,1-3.9,0,1,1,0,0,0-1.5,0,2.7,2.7,0,0,1-1.2.77L7,7.92A1,1,0,0,0,5.92,7,1,1,0,0,0,5,8.08l.86,11.15a3,3,0,0,0,3,2.77h6.3a3,3,0,0,0,3-2.77L19,8.08A1,1,0,0,0,18.08,7ZM16.14,19.08a1,1,0,0,1-1,.92H8.85a1,1,0,0,1-1-.92L7.5,14.5a4.77,4.77,0,0,0,1.8-.79,4.66,4.66,0,0,0,5.4,0,4.77,4.77,0,0,0,1.8.79ZM12,10a3.26,3.26,0,0,0,3.25-3.25c0-2.75-2.58-4.51-2.69-4.58a1,1,0,0,0-1.12,0C11.33,2.25,8.75,4,8.75,6.75A3.26,3.26,0,0,0,12,10Zm0-5.7a3.61,3.61,0,0,1,1.25,2.45,1.25,1.25,0,0,1-2.5,0A3.66,3.66,0,0,1,12,4.3Z"/></svg>',
                ),
                array(
                    'keys' => 'water',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M2.72,7.65a2.56,2.56,0,0,1,.56.24,4,4,0,0,0,4.1,0,2.6,2.6,0,0,1,2.56,0,4.15,4.15,0,0,0,4.12,0,2.6,2.6,0,0,1,2.56,0,4.25,4.25,0,0,0,2.08.56,3.88,3.88,0,0,0,2-.56,2.56,2.56,0,0,1,.56-.24,1,1,0,0,0-.56-1.92,4.45,4.45,0,0,0-1,.45,2.08,2.08,0,0,1-2.1,0,4.64,4.64,0,0,0-4.54,0,2.11,2.11,0,0,1-2.12,0,4.64,4.64,0,0,0-4.54,0,2.08,2.08,0,0,1-2.1,0,4.45,4.45,0,0,0-1-.45,1,1,0,1,0-.56,1.92Zm18,8.08a4.45,4.45,0,0,0-1,.45,2.08,2.08,0,0,1-2.1,0,4.64,4.64,0,0,0-4.54,0,2.11,2.11,0,0,1-2.12,0,4.64,4.64,0,0,0-4.54,0,2.08,2.08,0,0,1-2.1,0,4.45,4.45,0,0,0-1-.45,1,1,0,1,0-.56,1.92,2.56,2.56,0,0,1,.56.24,4,4,0,0,0,4.1,0,2.6,2.6,0,0,1,2.56,0,4.15,4.15,0,0,0,4.12,0,2.6,2.6,0,0,1,2.56,0,4.25,4.25,0,0,0,2.08.56,3.88,3.88,0,0,0,2-.56,2.56,2.56,0,0,1,.56-.24,1,1,0,0,0-.56-1.92Zm0-5a4.45,4.45,0,0,0-1,.45,2.08,2.08,0,0,1-2.1,0,4.64,4.64,0,0,0-4.54,0,2.11,2.11,0,0,1-2.12,0,4.64,4.64,0,0,0-4.54,0,2.08,2.08,0,0,1-2.1,0,4.45,4.45,0,0,0-1-.45A1,1,0,0,0,2,11.41a1,1,0,0,0,.68,1.24,2.56,2.56,0,0,1,.56.24,4,4,0,0,0,4.1,0,2.6,2.6,0,0,1,2.56,0,4.15,4.15,0,0,0,4.12,0,2.6,2.6,0,0,1,2.56,0,4.25,4.25,0,0,0,2.08.56,3.88,3.88,0,0,0,2-.56,2.56,2.56,0,0,1,.56-.24,1,1,0,0,0-.56-1.92Z"/></svg>',
                ),
                array(
                    'keys' => 'web-grid-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM11,20H4V10h7Zm9,0H13V10h7ZM20,8H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'web-grid',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM14,20H4V13H14Zm0-9H4V4H14Zm6,9H16V4h4Z"/></svg>',
                ),
                array(
                    'keys' => 'web-section-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM8,20H4V4H8Zm12,0H10V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'web-section',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM14,20H4V4H14Zm6,0H16V4h4Z"/></svg>',
                ),
                array(
                    'keys' => 'webcam',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,13a3,3,0,1,0-3-3A3,3,0,0,0,12,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,12,9Zm9.59,9.16A10,10,0,0,0,19,13.89a8,8,0,1,0-14,0,9.9,9.9,0,0,0-2.6,4.27,3,3,0,0,0,.47,2.63A3,3,0,0,0,5.3,22H18.7a3,3,0,0,0,2.42-1.21A3,3,0,0,0,21.59,18.16ZM12,4a6,6,0,1,1-6,6A6,6,0,0,1,12,4Zm7.52,15.59a1,1,0,0,1-.82.41H5.3a1,1,0,0,1-.82-.41,1,1,0,0,1-.15-.87A7.85,7.85,0,0,1,6.21,15.5a8,8,0,0,0,11.58,0,7.85,7.85,0,0,1,1.88,3.22A1,1,0,0,1,19.52,19.59Z"/></svg>',
                ),
                array(
                    'keys' => 'weight',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M19,4H17.55A3.08,3.08,0,0,0,17,3a3,3,0,0,0-2.25-1H9.27A3,3,0,0,0,7,3a3.08,3.08,0,0,0-.57,1H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4ZM8.52,4.34A1,1,0,0,1,9.27,4h5.46a1,1,0,0,1,.75.34,1,1,0,0,1,.25.78l-.5,4a1,1,0,0,1-1,.88H12.59l1.14-2.4a1,1,0,0,0-1.8-.86L10.37,10h-.6a1,1,0,0,1-1-.88l-.5-4A1,1,0,0,1,8.52,4.34ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7A1,1,0,0,1,5,6H6.37l.42,3.37a3,3,0,0,0,3,2.63h4.46a3,3,0,0,0,3-2.63L17.63,6H19a1,1,0,0,1,1,1Zm-6-3H10a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'whatsapp-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M22,6.55a12.61,12.61,0,0,0-.1-1.29,4.29,4.29,0,0,0-.37-1.08,3.66,3.66,0,0,0-.71-1,3.91,3.91,0,0,0-1-.71,4.28,4.28,0,0,0-1.08-.36A10.21,10.21,0,0,0,17.46,2H6.55a12.61,12.61,0,0,0-1.29.1,4.29,4.29,0,0,0-1.08.37,3.66,3.66,0,0,0-1,.71,3.91,3.91,0,0,0-.71,1,4.28,4.28,0,0,0-.36,1.08A10.21,10.21,0,0,0,2,6.54C2,6.73,2,7,2,7.08v9.84c0,.11,0,.35,0,.53a12.61,12.61,0,0,0,.1,1.29,4.29,4.29,0,0,0,.37,1.08,3.66,3.66,0,0,0,.71,1,3.91,3.91,0,0,0,1,.71,4.28,4.28,0,0,0,1.08.36A10.21,10.21,0,0,0,6.54,22H17.45a12.61,12.61,0,0,0,1.29-.1,4.29,4.29,0,0,0,1.08-.37,3.66,3.66,0,0,0,1-.71,3.91,3.91,0,0,0,.71-1,4.28,4.28,0,0,0,.36-1.08A10.21,10.21,0,0,0,22,17.46c0-.19,0-.43,0-.54V7.08C22,7,22,6.73,22,6.55ZM12.23,19h0A7.12,7.12,0,0,1,8.8,18.1L5,19.1l1-3.72a7.11,7.11,0,0,1-1-3.58A7.18,7.18,0,1,1,12.23,19Zm0-13.13A6,6,0,0,0,7.18,15l.14.23-.6,2.19L9,16.8l.22.13a6,6,0,0,0,3,.83h0a6,6,0,0,0,6-6,6,6,0,0,0-6-6Zm3.5,8.52a1.82,1.82,0,0,1-1.21.85,2.33,2.33,0,0,1-1.12-.07,8.9,8.9,0,0,1-1-.38,8,8,0,0,1-3.06-2.7,3.48,3.48,0,0,1-.73-1.85,2,2,0,0,1,.63-1.5.65.65,0,0,1,.48-.22H10c.11,0,.26,0,.4.31s.51,1.24.56,1.33a.34.34,0,0,1,0,.31,1.14,1.14,0,0,1-.18.3c-.09.11-.19.24-.27.32s-.18.18-.08.36a5.56,5.56,0,0,0,1,1.24,5,5,0,0,0,1.44.89c.18.09.29.08.39,0s.45-.52.57-.7.24-.15.4-.09,1.05.49,1.23.58.29.13.34.21A1.56,1.56,0,0,1,15.73,14.36Z"/></svg>',
                ),
                array(
                    'keys' => 'whatsapp',
                    'svg' => '<?xml version="1.0" encoding="utf-8"?><!-- Generator: Adobe Illustrator 23.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0) --><svg version="1.1" id="svg8" inkscape:version="0.92.4 (5da689c313, 2019-01-14)" sodipodi:docname="1881161.svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><path id="path4" inkscape:connector-curvature="0" d="M16.6,14c-0.2-0.1-1.5-0.7-1.7-0.8c-0.2-0.1-0.4-0.1-0.6,0.1c-0.2,0.2-0.6,0.8-0.8,1c-0.1,0.2-0.3,0.2-0.5,0.1c-0.7-0.3-1.4-0.7-2-1.2c-0.5-0.5-1-1.1-1.4-1.7c-0.1-0.2,0-0.4,0.1-0.5c0.1-0.1,0.2-0.3,0.4-0.4c0.1-0.1,0.2-0.3,0.2-0.4c0.1-0.1,0.1-0.3,0-0.4c-0.1-0.1-0.6-1.3-0.8-1.8C9.4,7.3,9.2,7.3,9,7.3c-0.1,0-0.3,0-0.5,0C8.3,7.3,8,7.5,7.9,7.6C7.3,8.2,7,8.9,7,9.7c0.1,0.9,0.4,1.8,1,2.6c1.1,1.6,2.5,2.9,4.2,3.7c0.5,0.2,0.9,0.4,1.4,0.5c0.5,0.2,1,0.2,1.6,0.1c0.7-0.1,1.3-0.6,1.7-1.2c0.2-0.4,0.2-0.8,0.1-1.2C17,14.2,16.8,14.1,16.6,14 M19.1,4.9C15.2,1,8.9,1,5,4.9c-3.2,3.2-3.8,8.1-1.6,12L2,22l5.3-1.4c1.5,0.8,3.1,1.2,4.7,1.2h0c5.5,0,9.9-4.4,9.9-9.9C22,9.3,20.9,6.8,19.1,4.9 M16.4,18.9c-1.3,0.8-2.8,1.3-4.4,1.3h0c-1.5,0-2.9-0.4-4.2-1.1l-0.3-0.2l-3.1,0.8l0.8-3l-0.2-0.3C2.6,12.4,3.8,7.4,7.7,4.9S16.6,3.7,19,7.5C21.4,11.4,20.3,16.5,16.4,18.9"/></svg>',
                ),
                array(
                    'keys' => 'wheel-barrow',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21,2H19l-.09,0-.21,0-.16.07-.17.11a.8.8,0,0,0-.13.13.86.86,0,0,0-.1.16.71.71,0,0,0-.08.18l0,.09L17.38,6H16.24L13.12,2.89a3.06,3.06,0,0,0-4.24,0L5.76,6H3a1,1,0,0,0-.87.5,1,1,0,0,0,0,1l4,7h0L5.36,16A2.2,2.2,0,0,0,5,16a3,3,0,1,0,3,3,3,3,0,0,0-.85-2.08l1-2,1.38-.14,3.94,5.91A2.93,2.93,0,0,0,16,22a3.18,3.18,0,0,0,1.13-.21A3,3,0,0,0,19,18.49L18,13l1.79-9H21a1,1,0,0,0,0-2ZM5,20a1,1,0,1,1,1-1A1,1,0,0,1,5,20ZM10.3,4.29a1,1,0,0,1,1.4,0L13.41,6H8.59ZM7.55,12.94,4.72,8H17l-.82,4.08Zm8.81,7a1,1,0,0,1-1.2-.38l-3.34-5,4.37-.43L17,18.82A1,1,0,0,1,16.36,19.93Z"/></svg>',
                ),
                array(
                    'keys' => 'wheelchair-alt',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M20,16.18V16a3,3,0,0,0-2-2.82V7h1a1,1,0,0,0,0-2H7A3,3,0,0,0,4,2H3A1,1,0,0,0,3,4H4A1,1,0,0,1,5,5v7.42A5,5,0,1,0,12,17a4.94,4.94,0,0,0-.42-2H17a1,1,0,0,1,1,1v.18a3,3,0,1,0,2,0ZM7,20a3,3,0,1,1,3-3A3,3,0,0,1,7,20Zm9-7H10a4.93,4.93,0,0,0-3-1V11h9Zm0-4H7V7h9Zm3,11a1,1,0,1,1,1-1A1,1,0,0,1,19,20ZM7,16a1,1,0,1,0,1,1A1,1,0,0,0,7,16Z"/></svg>',
                ),
                array(
                    'keys' => 'wheelchair',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,6.5a2,2,0,1,0-2-2A2,2,0,0,0,12,6.5Zm7.5,14h-1v-5a1,1,0,0,0-1-1h-5v-2h5a1,1,0,0,0,0-2h-5v-2a1,1,0,0,0-2,0v7a1,1,0,0,0,1,1h5v5a1,1,0,0,0,1,1h2a1,1,0,0,0,0-2Zm-6.8-1.6a4,4,0,0,1-7.2-2.4,4,4,0,0,1,2.4-3.66A1,1,0,1,0,7.1,11a6,6,0,1,0,7.2,9.1,1,1,0,0,0-1.6-1.2Z"/></svg>',
                ),
                array(
                    'keys' => 'wifi-router',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M8.9,17a1,1,0,1,0,1,1A1,1,0,0,0,8.9,17Zm-3,0a1,1,0,1,0,1,1A1,1,0,0,0,5.9,17Zm6,0a1,1,0,1,0,1,1A1,1,0,0,0,11.9,17ZM15,8.5a1,1,0,0,1,1.73,0,1,1,0,0,0,1.36.37A1,1,0,0,0,18.5,7.5a3,3,0,0,0-5.2,0A1,1,0,0,0,15,8.5ZM22,5.5a7,7,0,0,0-12.12,0,1,1,0,0,0,.37,1.37A1,1,0,0,0,10.7,7a1,1,0,0,0,.87-.5,5,5,0,0,1,8.66,0,1,1,0,0,0,1.37.37A1,1,0,0,0,22,5.5ZM17.9,14h-1V11a1,1,0,1,0-2,0v3H4.9a3,3,0,0,0-3,3v2a3,3,0,0,0,3,3h13a3,3,0,0,0,3-3V17A3,3,0,0,0,17.9,14Zm1,5a1,1,0,0,1-1,1H4.9a1,1,0,0,1-1-1V17a1,1,0,0,1,1-1h13a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'wifi-slash',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M6.92,5.51h0L3.71,2.29A1,1,0,0,0,2.29,3.71L4.56,6A15.21,15.21,0,0,0,1.4,8.39a1,1,0,0,0,0,1.41,1,1,0,0,0,.71.3,1,1,0,0,0,.7-.29A13.07,13.07,0,0,1,6.05,7.46L7.54,9a10.78,10.78,0,0,0-3.32,2.27,1,1,0,1,0,1.42,1.4,8.8,8.8,0,0,1,3.45-2.12l1.62,1.61a7.07,7.07,0,0,0-3.66,1.94,1,1,0,1,0,1.42,1.4A5,5,0,0,1,12,14a4.13,4.13,0,0,1,.63.05l7.66,7.66a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42ZM12,16a3,3,0,1,0,3,3A3,3,0,0,0,12,16Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,20ZM22.61,8.39A15,15,0,0,0,10.29,4.1a1,1,0,1,0,.22,2A13.07,13.07,0,0,1,21.2,9.81a1,1,0,0,0,1.41-1.42Zm-4.25,4.24a1,1,0,0,0,1.42-1.4,10.75,10.75,0,0,0-4.84-2.82,1,1,0,1,0-.52,1.92A8.94,8.94,0,0,1,18.36,12.63Z"/></svg>',
                ),
                array(
                    'keys' => 'wifi',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,15a3,3,0,1,0,3,3A3,3,0,0,0,12,15Zm0,4a1,1,0,1,1,1-1A1,1,0,0,1,12,19Zm0-8a7.06,7.06,0,0,0-4.95,2.05,1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0,5,5,0,0,1,7.08,0,1,1,0,0,0,.7.3A1,1,0,0,0,17,13.05,7.06,7.06,0,0,0,12,11Zm0-4a11.08,11.08,0,0,0-7.78,3.22,1,1,0,0,0,1.42,1.42,9,9,0,0,1,12.72,0,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42A11.08,11.08,0,0,0,12,7Zm10.61.39a15,15,0,0,0-21.22,0A1,1,0,0,0,2.81,8.81a13,13,0,0,1,18.38,0,1,1,0,0,0,1.42,0A1,1,0,0,0,22.61,7.39Z"/></svg>',
                ),
                array(
                    'keys' => 'wind-moon',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,19H7a1,1,0,0,0,0,2h5a1.01348,1.01348,0,0,1,1,1,1,1,0,0,0,2,0A3.00328,3.00328,0,0,0,12,19ZM14,9a1,1,0,1,0-1-1A1,1,0,0,0,14,9Zm4,0h2a3.00328,3.00328,0,0,0,3-3,1,1,0,0,0-2,0,1.01348,1.01348,0,0,1-1,1H18a1,1,0,0,0,0,2Zm2,6H17.83868a8.04287,8.04287,0,0,0,1.14667-2.9502,1.00038,1.00038,0,0,0-1.30566-1.11718,5.96932,5.96932,0,0,1-1.91992.31738A6.06179,6.06179,0,0,1,9.7002,5.2002a7.15542,7.15542,0,0,1,.09765-1.04883A.99925.99925,0,0,0,8.49023,3.05273,8.03194,8.03194,0,0,0,4.26587,15H3a1,1,0,0,0,0,2H8a1,1,0,0,0,0-2H6.83051a6.028,6.028,0,0,1,.8814-9.36035A8.06544,8.06544,0,0,0,15.75977,13.25a7.87832,7.87832,0,0,0,.78906-.03906A6.02734,6.02734,0,0,1,15.27728,15H12a1,1,0,0,0,0,2h8a1,1,0,0,1,0,2,1,1,0,0,0,0,2,3,3,0,0,0,0-6ZM2.62012,19.08008a1.14718,1.14718,0,0,0-.33008.21A1.02776,1.02776,0,0,0,2,20a.98979.98979,0,0,0,1.37988.91992A1.16044,1.16044,0,0,0,3.71,20.71.99349.99349,0,0,0,4,20a1.05232,1.05232,0,0,0-.29-.71A1.00157,1.00157,0,0,0,2.62012,19.08008Z"/></svg>',
                ),
                array(
                    'keys' => 'wind-sun',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M11,4.5a.99943.99943,0,0,0,1-1v-1a1,1,0,0,0-2,0v1A.99943.99943,0,0,0,11,4.5Zm-7,7a.99943.99943,0,0,0-1-1H2a1,1,0,0,0,0,2H3A.99943.99943,0,0,0,4,11.5Zm.63574,4.9502-.707.707a.99989.99989,0,1,0,1.41406,1.41406l.707-.707A.99989.99989,0,1,0,4.63574,16.4502Zm0-9.9004A.99989.99989,0,0,0,6.0498,5.13574l-.707-.707A.99989.99989,0,0,0,3.92871,5.84277Zm12.02149.293a.99672.99672,0,0,0,.707-.293l.707-.707a.99989.99989,0,1,0-1.41406-1.41406l-.707.707a1,1,0,0,0,.707,1.707ZM13,12a.99943.99943,0,0,0,1,1h5a3.00328,3.00328,0,0,0,3-3,1,1,0,0,0-2,0,1.01348,1.01348,0,0,1-1,1H14A.99943.99943,0,0,0,13,12Zm7,3H15a1,1,0,0,0,0,2h5a1,1,0,0,1,0,2,1,1,0,0,0,0,2,3,3,0,0,0,0-6ZM9,19a1,1,0,1,0,1,1A1,1,0,0,0,9,19Zm6,0H13a1,1,0,0,0,0,2h2a1.01348,1.01348,0,0,1,1,1,1,1,0,0,0,2,0A3.00328,3.00328,0,0,0,15,19Zm-4-4a3.5,3.5,0,0,1,0-7,3.41539,3.41539,0,0,1,2.1875.77441,1.00008,1.00008,0,1,0,1.26562-1.54882A5.39339,5.39339,0,0,0,11,6a5.5,5.5,0,0,0,0,11,1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'wind',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3.5,9a1,1,0,1,0-1-1A1,1,0,0,0,3.5,9Zm4,0h7a3,3,0,0,0,0-6,3.06,3.06,0,0,0-1.5.4,1,1,0,0,0-.37,1.37A1,1,0,0,0,14,5.13,1.09,1.09,0,0,1,14.5,5a1,1,0,0,1,0,2h-7a1,1,0,0,0,0,2Zm-4,4h7a1,1,0,0,0,0-2h-7a1,1,0,0,0,0,2Zm17-4a1,1,0,1,0-1-1A1,1,0,0,0,20.5,9Zm-2,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,1,0,2,1,1,0,0,0,0,2,3,3,0,0,0,0-6Zm-6,4h-4a1,1,0,0,0,0,2h4a1,1,0,0,1,0,2,1.09,1.09,0,0,1-.5-.13,1,1,0,1,0-1,1.73,3.06,3.06,0,0,0,1.5.4,3,3,0,0,0,0-6Zm-8,0h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'window-grid',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM8,20H4V4H8Zm12,0H10V13H20Zm0-9H10V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'window-maximize',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V10H20ZM20,8H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'window-section',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM8,20H4V10H8Zm6,0H10V10h4Zm6,0H16V10h4ZM20,8H4V4H20Z"/></svg>',
                ),
                array(
                    'keys' => 'window',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M10,5a1,1,0,1,0,1,1A1,1,0,0,0,10,5ZM6,5A1,1,0,1,0,7,6,1,1,0,0,0,6,5Zm8,0a1,1,0,1,0,1,1A1,1,0,0,0,14,5Zm6-4H4A3,3,0,0,0,1,4V20a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V4A3,3,0,0,0,20,1Zm1,19a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V11H21ZM21,9H3V4A1,1,0,0,1,4,3H20a1,1,0,0,1,1,1Z"/></svg>',
                ),
                array(
                    'keys' => 'windsock',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.08,5,10,4.33h0L7,4.08V3A1,1,0,0,0,5,3V21a1,1,0,0,0,2,0V13.92l3-.25h0L18.08,13A1,1,0,0,0,19,12V6A1,1,0,0,0,18.08,5ZM9,11.75l-2,.16V6.09l2,.16Zm4-.34-2,.17V6.42l2,.17Zm4-.33-2,.17V6.75l2,.17Z"/></svg>',
                ),
                array(
                    'keys' => 'windy',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M17,15a1.73,1.73,0,0,1-.86-.23,3.11,3.11,0,0,0-3.27,0,1.73,1.73,0,0,1-1.73,0,3.11,3.11,0,0,0-3.27,0A1.74,1.74,0,0,1,7,15a1,1,0,0,0,0,2,3.72,3.72,0,0,0,1.9-.52,1.13,1.13,0,0,1,1.2,0,3.75,3.75,0,0,0,3.8,0,1.13,1.13,0,0,1,1.2,0A3.72,3.72,0,0,0,17,17a1,1,0,0,0,0-2Zm0,4a1.73,1.73,0,0,1-.86-.23,3.11,3.11,0,0,0-3.27,0,1.73,1.73,0,0,1-1.73,0,3.11,3.11,0,0,0-3.27,0A1.74,1.74,0,0,1,7,19a1,1,0,0,0,0,2,3.72,3.72,0,0,0,1.9-.52,1.13,1.13,0,0,1,1.2,0,3.75,3.75,0,0,0,3.8,0,1.13,1.13,0,0,1,1.2,0A3.72,3.72,0,0,0,17,21a1,1,0,0,0,0-2ZM18.42,7.21A7,7,0,0,0,5.06,9.11,4,4,0,0,0,2,13a4,4,0,0,0,1.34,3,1,1,0,0,0,.66.25,1,1,0,0,0,.75-.35,1,1,0,0,0-.09-1.41A1.93,1.93,0,0,1,4,13a2,2,0,0,1,2-2,1,1,0,0,0,1-1,5,5,0,0,1,9.73-1.61,1,1,0,0,0,.78.66A3,3,0,0,1,20,12a2.93,2.93,0,0,1-.74,2,1,1,0,1,0,1.48,1.33A4.91,4.91,0,0,0,22,12,5,5,0,0,0,18.42,7.21Z"/></svg>',
                ),
                array(
                    'keys' => 'wordpress-simple',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,2a10.00009,10.00009,0,1,0,10,9.99976A10.01117,10.01117,0,0,0,12,2ZM3.00928,11.99976a8.95547,8.95547,0,0,1,.77844-3.659L8.07654,20.09131A8.99123,8.99123,0,0,1,3.00928,11.99976ZM12,20.99121a8.98726,8.98726,0,0,1-2.54-.36633l2.69788-7.83869,2.7633,7.57135a.84386.84386,0,0,0,.06446.12391A8.97138,8.97138,0,0,1,12,20.99121ZM13.239,7.78436c.54126-.02844,1.02906-.08539,1.02906-.08539a.37165.37165,0,0,0-.05738-.741s-1.4563.11432-2.39648.11432c-.8833,0-2.3678-.11432-2.3678-.11432a.37165.37165,0,0,0-.057.741s.4585.05695.943.08539l1.40075,3.838-1.968,5.90087L6.49133,7.78436C7.033,7.75592,7.52026,7.699,7.52026,7.699a.37166.37166,0,0,0-.05749-.741s-1.45593.11432-2.39612.11432c-.1687,0-.36768-.00415-.57861-.01093A8.98815,8.98815,0,0,1,18.07117,5.36957c-.0387-.00238-.07654-.0072-.11634-.0072A1.55669,1.55669,0,0,0,16.445,6.958a4.21016,4.21016,0,0,0,.88317,2.1087,4.73577,4.73577,0,0,1,.74122,2.47955,10.88314,10.88314,0,0,1-.68409,2.9065l-.897,2.99634ZM16.52,19.771l2.74609-7.9397A8.489,8.489,0,0,0,19.94983,8.611a6.9105,6.9105,0,0,0-.06043-.92456A8.99224,8.99224,0,0,1,16.52,19.771Z"/></svg>',
                ),
                array(
                    'keys' => 'wordpress',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M3.66675,11.99976c-0.00055,3.1933,1.82367,6.10608,4.69678,7.49969L4.38818,8.60846C3.91162,9.67548,3.66583,10.83112,3.66675,11.99976z M12.14648,12.7287l-2.50073,7.2652c1.67889,0.49438,3.47076,0.44788,5.1217-0.13293c-0.02319-0.0365-0.04315-0.07489-0.05969-0.11487L12.14648,12.7287z M17.62573,11.57953c-0.01117-0.815-0.24902-1.61078-0.68701-2.29816c-0.44788-0.56354-0.7312-1.23999-0.8186-1.95453c-0.0202-0.79413,0.60535-1.45526,1.39941-1.47894c0.03699,0,0.07202,0.00446,0.10791,0.00671C14.23444,2.74658,8.96436,2.97766,5.85638,6.37061C5.55566,6.69885,5.2818,7.05066,5.03735,7.42267C5.23291,7.42889,5.41724,7.4328,5.57361,7.4328c0.87146,0,2.22107-0.10602,2.22107-0.10602C7.98462,7.3158,8.14752,7.46088,8.15851,7.65082C8.16919,7.83551,8.03204,7.99567,7.8479,8.01355c0,0-0.45166,0.05286-0.95361,0.07916l3.03442,9.02649l1.82397-5.4693l-1.29834-3.55713c-0.44897-0.02631-0.87402-0.07916-0.87402-0.07916c-0.18933-0.01831-0.328-0.18665-0.30975-0.37598c0.01782-0.18427,0.17804-0.32147,0.36279-0.31079c0,0,1.37585,0.10602,2.19458,0.10602c0.87146,0,2.22131-0.10602,2.22131-0.10602c0.18988-0.01111,0.35291,0.13385,0.36401,0.32373c0.0108,0.18494-0.12653,0.34534-0.31091,0.36304c0,0-0.45203,0.05286-0.95361,0.07916l3.01147,8.95776l0.85962-2.72406C17.35553,13.44556,17.55969,12.51996,17.62573,11.57953z M19.36877,8.85889c-0.01447,1.02673-0.2298,2.04077-0.63391,2.98474l-2.54517,7.35889c3.90363-2.27075,5.28845-7.23743,3.12299-11.20044C19.35059,8.28607,19.36932,8.57233,19.36877,8.85889z M12,2.00012c-5.52283,0-10,4.47717-10,10s4.47717,10,10,10s10-4.47717,10-10S17.52283,2.00012,12,2.00012z M15.65869,20.66162c-2.92645,1.23846-6.28082,0.91241-8.91394-0.86652c-1.51147-1.02045-2.69464-2.45721-3.40637-4.13629c-1.23877-2.92645-0.9126-6.28094,0.8667-8.91394c1.02026-1.5116,2.45703-2.69489,4.13623-3.40631c2.92645-1.23846,6.28082-0.91241,8.91394,0.86652c1.51147,1.02045,2.69464,2.45721,3.40637,4.13629c1.23877,2.92645,0.9126,6.28094-0.8667,8.91394C18.77466,18.76691,17.33789,19.9502,15.65869,20.66162z"/></svg>',
                ),
                array(
                    'keys' => 'wrap-text',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M3,7H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,7Zm6,8H3a1,1,0,0,0,0,2H9a1,1,0,0,0,0-2Zm9.5-5H3a1,1,0,0,0,0,2H18.5a1.5,1.5,0,0,1,0,3H15.41l.3-.29a1,1,0,0,0-1.42-1.42l-2,2a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l2,2a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-.3-.29H18.5a3.5,3.5,0,0,0,0-7Z"/></svg>',
                ),
                array(
                    'keys' => 'wrench',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M21.71,15.58l-4.52-4.51a6.85,6.85,0,0,0,.14-1.4A7.67,7.67,0,0,0,6.42,2.72a1,1,0,0,0-.57.74,1,1,0,0,0,.28.88l4.35,4.34-1.8,1.8L4.34,6.13a1,1,0,0,0-.88-.27,1,1,0,0,0-.74.56,7.67,7.67,0,0,0,7,10.91,6.85,6.85,0,0,0,1.4-.14l4.51,4.52a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42l-4.9-4.9a1,1,0,0,0-.95-.26,5.88,5.88,0,0,1-1.48.2A5.67,5.67,0,0,1,4,9.67a6,6,0,0,1,.08-1L8,12.6a1,1,0,0,0,1.42,0L12.6,9.39A1,1,0,0,0,12.6,8L8.71,4.08a6.12,6.12,0,0,1,1-.08,5.67,5.67,0,0,1,5.66,5.67,5.88,5.88,0,0,1-.2,1.48,1,1,0,0,0,.26.95l4.9,4.9a1,1,0,0,0,1.42-1.42Z"/></svg>',
                ),
                array(
                    'keys' => 'x-add',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M14.71,7.29a1,1,0,0,0-1.42,0L11,9.59,8.71,7.29A1,1,0,1,0,7.29,8.71L9.59,11l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L11,12.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L12.41,11l2.3-2.29A1,1,0,0,0,14.71,7.29ZM7,18a3,3,0,0,1-3-3V7A3,3,0,0,1,7,4,1,1,0,0,0,7,2,5,5,0,0,0,2,7v8a5,5,0,0,0,5,5,1,1,0,0,0,0-2ZM18,7v6a1,1,0,0,0,2,0V7a5,5,0,0,0-5-5,1,1,0,0,0,0,2A3,3,0,0,1,18,7Zm3,11H20V17a1,1,0,0,0-2,0v1H17a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0V20h1a1,1,0,0,0,0-2Z"/></svg>',
                ),
                array(
                    'keys' => 'x',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M8,19a3,3,0,0,1-3-3V8A3,3,0,0,1,8,5,1,1,0,0,0,8,3,5,5,0,0,0,3,8v8a5,5,0,0,0,5,5,1,1,0,0,0,0-2Zm7.71-3.29a1,1,0,0,0,0-1.42L13.41,12l2.3-2.29a1,1,0,0,0-1.42-1.42L12,10.59,9.71,8.29A1,1,0,0,0,8.29,9.71L10.59,12l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l2.29,2.3a1,1,0,0,0,1.42,0ZM16,3a1,1,0,0,0,0,2,3,3,0,0,1,3,3v8a3,3,0,0,1-3,3,1,1,0,0,0,0,2,5,5,0,0,0,5-5V8A5,5,0,0,0,16,3Z"/></svg>',
                ),
                array(
                    'keys' => 'yen-circle',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21ZM14.83,6.45,12,10.7,9.17,6.45a1,1,0,0,0-1.39-.28A1,1,0,0,0,7.5,7.55l2.11,3.17H9a1,1,0,0,0,0,2H11l.05.08v.92H9a1,1,0,0,0,0,2h2V18a1,1,0,0,0,2,0V15.72h2a1,1,0,0,0,0-2H13V12.8l.05-.08H15a1,1,0,0,0,0-2h-.61L16.5,7.55a1,1,0,0,0-.28-1.38A1,1,0,0,0,14.83,6.45Z"/></svg>',
                ),
                array(
                    'keys' => 'yen',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24"><path d="M18.55,2.17a1,1,0,0,0-1.38.28L12,10.2,6.83,2.45a1,1,0,0,0-1.66,1.1l5,7.45H7a1,1,0,0,0,0,2h4v2H7a1,1,0,0,0,0,2h4v4a1,1,0,0,0,2,0V17h4a1,1,0,0,0,0-2H13V13h4a1,1,0,0,0,0-2H13.87l5-7.45A1,1,0,0,0,18.55,2.17Z"/></svg>',
                ),
                array(
                    'keys' => 'yin-yang',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M12,15.5a1,1,0,1,0,1,1A1,1,0,0,0,12,15.5ZM12,2a5.54514,5.54514,0,0,0-.56165.0285A9.99347,9.99347,0,0,0,12,22a5.54514,5.54514,0,0,0,.56165-.0285A9.99347,9.99347,0,0,0,12,2Zm0,18A7.98889,7.98889,0,0,1,6.70935,6.01538,5.48381,5.48381,0,0,0,12,13a3.5,3.5,0,0,1,0,7Zm5.29065-2.01538A5.48381,5.48381,0,0,0,12,11a3.5,3.5,0,0,1,0-7,7.98889,7.98889,0,0,1,5.29065,13.98462ZM12,6.5a1,1,0,1,0,1,1A1,1,0,0,0,12,6.5Z"/></svg>',
                ),
                array(
                    'keys' => 'youtube',
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" class="ghostkit-svg-icon ghostkit-svg-icon-unicons" aria-hidden="true" role="img" fill="currentColor" data-name="Layer 1" viewBox="0 0 24 24"><path d="M23,9.71a8.5,8.5,0,0,0-.91-4.13,2.92,2.92,0,0,0-1.72-1A78.36,78.36,0,0,0,12,4.27a78.45,78.45,0,0,0-8.34.3,2.87,2.87,0,0,0-1.46.74c-.9.83-1,2.25-1.1,3.45a48.29,48.29,0,0,0,0,6.48,9.55,9.55,0,0,0,.3,2,3.14,3.14,0,0,0,.71,1.36,2.86,2.86,0,0,0,1.49.78,45.18,45.18,0,0,0,6.5.33c3.5.05,6.57,0,10.2-.28a2.88,2.88,0,0,0,1.53-.78,2.49,2.49,0,0,0,.61-1,10.58,10.58,0,0,0,.52-3.4C23,13.69,23,10.31,23,9.71ZM9.74,14.85V8.66l5.92,3.11C14,12.69,11.81,13.73,9.74,14.85Z"/></svg>',
                ),
            ),
        );

        return $icons;
    }
}

new GhostKit_Pro_Icons_Unicons();
