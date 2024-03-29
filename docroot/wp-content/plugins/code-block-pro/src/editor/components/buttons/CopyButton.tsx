import { __ } from '@wordpress/i18n';
import stripAnsi from 'strip-ansi';
import { Attributes } from '../../../types';

export const CopyButton = ({ attributes }: { attributes: Attributes }) => (
    <span
        // Using a span to prevent aggressive button styling from themes
        role="button"
        tabIndex={0}
        data-encoded={attributes.useDecodeURI ? true : undefined}
        data-code={stripAnsi(
            attributes.useDecodeURI
                ? // Encode again otherwise WP will decode it
                  encodeURIComponent(attributes.code ?? '')
                : attributes.code ?? '',
        )}
        style={{ color: attributes?.textColor ?? 'inherit', display: 'none' }}
        aria-label={__('Copy', 'code-block-pro')}
        className="code-block-pro-copy-button">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            style={{ width: 24, height: 24 }}
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            strokeWidth="2">
            <path
                className="with-check"
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
            />
            <path
                className="without-check"
                strokeLinecap="round"
                strokeLinejoin="round"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"
            />
        </svg>
    </span>
);
