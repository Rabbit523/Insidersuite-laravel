<?php
function mm_jpo_test( $file ) {
	$onboard_time = strtotime( get_option( 'mm_install_date', 0 ) ) + DAY_IN_SECONDS * 90;
	if ( $onboard_time > time() ) {
		return mm_ab_test_file( 'jetpack-onboarding-v1.7.4', $file, 'vendor/jetpack/jetpack-onboarding/jetpack-onboarding.php', 'tests/jetpack-onboarding/jetpack-onboarding.php', 50, DAY_IN_SECONDS * 90 );
	} else {
		return false;
	}
}
add_filter( 'mm_require_file', 'mm_jpo_test' );

function mm_jpo_test_exempt() {
	$onboard_time = strtotime( get_option( 'mm_install_date', 0 ) ) + DAY_IN_SECONDS * 90;
	if ( $onboard_time > time() ) {
		mm_ab_test_inclusion( 'jetpack-onboarding-v1.7.4-exempt', md5( 'jetpack-onboarding-v1.7.4-exempt' ), 100, DAY_IN_SECONDS * 30 );
	}
}
add_action( 'init', 'mm_jpo_test_exempt', 7 );

