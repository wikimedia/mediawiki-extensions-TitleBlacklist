mw.libs.ve.targetLoader.addPlugin( function () {

	ve.init.mw.TitleBlacklistSaveErrorHandler = function () {};

	OO.inheritClass( ve.init.mw.TitleBlacklistSaveErrorHandler, ve.init.mw.SaveErrorHandler );

	ve.init.mw.TitleBlacklistSaveErrorHandler.static.name = 'titleBlacklist';

	ve.init.mw.TitleBlacklistSaveErrorHandler.static.matchFunction = function ( editApi ) {
		return editApi.code === 'titleblacklist-forbidden';
	};

	ve.init.mw.TitleBlacklistSaveErrorHandler.static.process = function ( editApi, target ) {
		// Handle warnings/errors from Extension:AbuseFilter
		target.showSaveError( mw.msg( 'visualeditor-saveerror-titleblacklist' ) );
		// Emit event for tracking. TODO: This is a bad design
		target.emit( 'saveErrorTitleBlacklist' );
	};

	ve.init.mw.saveErrorHandlerFactory.register( ve.init.mw.TitleBlacklistSaveErrorHandler );
} );
