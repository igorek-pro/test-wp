/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';
import {background} from "../../../../wp-includes/js/codemirror/csslint";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @param {Object} props            Properties passed to the function.
 * @param {Object} props.attributes Available block attributes.
 * @return {WPElement} Element to render.
 */
export default function save( { attributes } ) {
	const blockProps = useBlockProps.save();
	return (	<section { ...blockProps } data-bg={ attributes.back_url } style={ 'background-image:url('+attributes.back_url+')' } className="parallax-section wp-block-create-block-gutenpride">
		<div className="container">
			<div className="row">

				<div className="col-md-offset-5 col-md-7 col-sm-12">
					<div className="home-thumb">
						<h1 className="wow fadeInUp" data-wow-delay="0.4s">{ attributes.message }</h1>
						<p className="wow fadeInUp white-color" data-wow-delay="0.6s">{ attributes.second_message }</p>
						<a href={ attributes.link } className="wow fadeInUp smoothScroll btn btn-default section-btn"
						   data-wow-delay="1s">{ attributes.link_text }</a>

					</div>
				</div>

			</div>
		</div>
	</section>);}
