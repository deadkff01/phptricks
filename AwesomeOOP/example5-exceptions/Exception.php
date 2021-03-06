<?php

Exception {
	/* properties */
	protected string $message;
	protected int $code;
	protected string $file;
	protected int $line;

	/*methods*/
	public __construct([ string $message ="" [, int $code = 0
		[, Exception $previous = NULL]]] )
	
	final public string getMessage( void )
	final public Exception getPrevious( void )
	final public int getCode( void )
	final public string getFile( void )
	final public int getLine( void )
	final public array getTrace( void )
	final public string getTraceAsString( void )
	public string __tostring( void )
	final private void __clone( void )
}