import { select, dispatch } from "@wordpress/data";
import domReady from "@wordpress/dom-ready";

domReady(() => {
  const isFullscreenMode = select("core/edit-post").isFeatureActive(
    "fullscreenMode"
  );

  if (isFullscreenMode) {
    dispatch("core/edit-post").toggleFeature("fullscreenMode");
  }
});
