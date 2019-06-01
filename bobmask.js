/**
 * Masking an HTML-Input
 * id > Attribute for the HTML element
 * mask > something like ###-##/##
 * where the # represents any charakter
 * all other charakters from the mask will be shown in the input/output field
 * 
 */
function bobmask(id, mask)
{
	if(mask != '')
	{
		var id;
		var txt;
		var txt_len;
		var out = '';
		var mask;
		var mask_len = mask.length;
		var mask_char = '';
		var mask_offset = 0;

		txt = document.getElementById(id).value;
		txt_len = txt.length;

		for(var i = 0; i < txt_len; i++)
		{
			mask_char = mask.substr(i + mask_offset, 1);
			if(mask_char === '#')
			{
				out = out + txt.substr(i, 1);
			}
			else
			{
				out = out + mask_char + txt.substr(i, 1);
				mask_offset ++;
			}
		}
		document.getElementById('input-mask-' + id).innerHTML = out;
	}
}

/**
 * Hide the HTML element 
 */
function bobmaskHide(id)
{
	document.getElementById('input-mask-' + id).style.display = 'none';
	
}

/**
 * Show the HTML element 
 */
function bobmaskShow(id, mask)
{
	document.getElementById('input-mask-' + id).style.display = 'block';
	bobmask(id, mask);
}

/**
 * For output only 
 * id and mask see bobmask
 */
function bobmaskList(id, mask)
{
	if(mask != '')
	{
		var id;
		var txt;
		var txt_len;
		var out = '';
		var mask;
		var mask_len = mask.length;
		var mask_char = '';
		var mask_offset = 0;

		txt = document.getElementById(id).textContent;
		txt_len = txt.length;
		
		for(var i = 0; i < txt_len; i++)
		{
			mask_char = mask.substr(i + mask_offset, 1);
			if(mask_char === '#')
			{
				out = out + txt.substr(i, 1);
			}
			else
			{
				out = out + mask_char + txt.substr(i, 1);
				mask_offset ++;
			}
		}
		document.getElementById(id).innerHTML = out;
	}
}
