/**
 * WordPress components that create the necessary UI elements for the block
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-components/
 */
import { TextControl } from '@wordpress/components';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               Properties passed to the function.
 * @param {Object}   props.attributes    Available block attributes.
 * @param {Function} props.setAttributes Function that updates individual attributes.
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();
	return (
		<section  { ...blockProps } id="home" className="parallax-section"  >
			<img src={attributes.back_url} width="100"/>
			<div className="container">
				<div className="row">

					<div className="col-md-offset-5 col-md-7 col-sm-12">
						<div className="home-thumb">

							Cover image url: <TextControl
								value={ attributes.back_url }
								onChange={ ( val ) => setAttributes( { back_url: val } ) }
							/>
							Main message: <h1 className="wow fadeInUp" data-wow-delay="0.4s"><TextControl
								value={ attributes.message }
								onChange={ ( val ) => setAttributes( { message: val } ) }
							/></h1>
							Second message:<p className="wow fadeInUp white-color" data-wow-delay="0.6s"><TextControl
								value={ attributes.second_message }
								onChange={ ( val ) => setAttributes( { second_message: val } ) }
							/></p>
							Button link: <TextControl
								value={ attributes.link }
								onChange={ ( val ) => setAttributes( { link: val } ) }
							/>
							Button text: <TextControl
								value={ attributes.link_text }
								onChange={ ( val ) => setAttributes( { link_text: val } ) }
							/>
						</div>
					</div>

				</div>
			</div>
		</section>
	);
}
